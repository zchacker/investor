<?php 
namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ProjectsModel;
use App\Models\OrdersModel;

use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use Exception;
use ReflectionException;

// this is blog tut
// https://www.twilio.com/blog/create-secured-restful-api-codeigniter-php

class MobilePublicApi extends BaseController
{

    /**
     * Register a new user
     * @return Response
     * @throws ReflectionException
     */
    public function register()
    {
        // $rules = [
        //     'name' => 'required',
        //     'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[user.email]',
        //     'password' => 'required|min_length[8]|max_length[255]'
        // ];

        // $input = $this->getRequestInput($this->request);
        // if (!$this->validateRequest($input, $rules)) {
        //     return $this
        //         ->getResponse(
        //             $this->validator->getErrors(),
        //             ResponseInterface::HTTP_BAD_REQUEST
        //         );
        // }
        
        // $input = array(
        //     'full_name' => $_POST['full_name'],
        //     'id_number' => $_POST['id_number'],
        //     'phone' => $_POST['phone'],
        //     'email' => $_POST['email'],
        //     'password' => $_POST['password'],            
        // );

        // $userModel = new UserModel();
        // $userModel->save($input);

        // return $this
        //     ->getJWTForUser(
        //         $input['email'],
        //         ResponseInterface::HTTP_CREATED
        //     );


        $model = new UserModel();        
        $dublicate = $model->where('phone' , $this->request->getVar('phone') )->first();        

        if($dublicate){

            $response = [
                'status'   => 500,
                'error'    => '',
                'messages' => 'ًهذا الرقم مستخدم مسبقاً'                
            ];
    
            //return $this->respondCreated($response);
            return $this->getResponse($response); 
            
        }else{

            $data = [
                'full_name' => $this->request->getVar('full_name'),
                'id_number'  => $this->request->getVar('id_number'),
                'phone'  => $this->request->getVar('phone'),
                'email'  => $this->request->getVar('email'),
                'password'  => $this->hash_password($this->request->getVar('pass')),
            ];                
                
            $model->insert($data);
            
            // $response = [
            //     'status'   => 201,
            //     'error'    => null,
            //     'messages' => [
            //         'success' => 'تم انشاء الحساب بنجاح'
            //     ]
            // ];

            return $this
            ->getJWTForUser(
                $this->request->getVar('email'),
                ResponseInterface::HTTP_CREATED
            );
        }


    }

    /**
     * Authenticate Existing User
     * @return Response
     */
    public function login()
    {        

        $input = [
            'email'  => $this->request->getVar('email'),
            'password'  => $this->request->getVar('password'),
        ]; 

        $model = new UserModel();
        $user = $model->findUserByEmailAddress($input['email']);

        if($user != NULL){

            $auth = password_verify($input['password'] , $user['password']);
        
            if($auth){
                return $this->getJWTForUser($input['email']);
            }else{
                return $this
                ->getResponse(
                    [
                        'message' => 'اسم المسخدم أو كلمة المرور خطأ, الرجاء المحاولة مرة أخرى',
                        'user' => NULL,
                        'status'   => 500,
                        'error'    => '',
                        'access_token' => ''
                    ]
                );
            }

        }else{
                return $this
                ->getResponse(
                    [
                        'message' => 'رقم الهاتف أو البريد غير مسجل لدينا, حاول مرة أخرى',
                        'user' => NULL,
                        'status'   => 500,
                        'error'    => '',
                        'access_token' => ''
                    ]
                );
        }
        

    }

    /**
     * Check if ios app need update
     * @return Response
     */
    public function ios_version()
    {
        $server_response = array(
			'update' => TRUE,
			'build' => 1
		);

        return $this ->getResponse($server_response);
    }   
    
    /**
     * Check if android app need update
     * @return Response
     */
    public function android_version()
    {
        $server_response = array(
			'update' => TRUE,
			'build' => 1
		);

        return $this ->getResponse($server_response);
    }

    /**
     * Get all projects for investors
     * @return Response
     */
    public function get_all_projects()
    {
        $model = new ProjectsModel();
        $data['projects'] = $model->orderBy('id', 'DESC')->findAll();
        return $this->getResponse($data);
    }

    /**
     * Register a new user
     * @return Response
     * @throws ReflectionException
     */
    public function invest_in_project()
    {
        
        $model = new OrdersModel();

        $data = [
            'project_id'    => $this->request->getVar('project_id'),
            'name'          => $this->request->getVar('name'),
            'phone'         => $this->request->getVar('phone'),
            'email'         => $this->request->getVar('email'),
            'best_time'     => $this->request->getVar('best_time'),
        ];                
            
        $model->insert($data);

        $response = [
            'status'   => 201,
            'error'    => '',
            'messages' => 'ًتم ارسال الطلب بنجاح'                
        ];
        
        return $this->getResponse($response);

    }

    private function getJWTForUser( string $emailAddress,int $responseCode = ResponseInterface::HTTP_OK)
    {
        try {
            
            $model = new UserModel();
            $user = $model->findUserByEmailAddress($emailAddress);                        
            unset($user['password']);

            helper('jwt');
        
            return $this
            ->getResponse(
                [
                    'message' => 'User authenticated successfully',
                    'user' => $user,
                    'status'   => 200,
                    'error'    => '',
                    'access_token' => getSignedJWTForUser($emailAddress)
                ]
            );

        } catch (Exception $exception) {
            return $this
                ->getResponse(
                    [
                        'error' => $exception->getMessage(),
                    ],
                    $responseCode
                );
        }
    }

    private function hash_password($password)
	{
		return password_hash($password, PASSWORD_BCRYPT);
	}

}

?>