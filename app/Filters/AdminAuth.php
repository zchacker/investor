<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here

        //if(!isset($_SESSION['loggedin']) || !isset($_SESSION['phone'])){
        if(!session()->get('admin_loggedin') || !session()->get('admin_id')){            
            return redirect()->to('/adminLogin');			            
        }else{
            //sprint 'you are loggedin';
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}

?>