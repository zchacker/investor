<section class="form7 cid-sFSJ7JRAnN" id="form7-9">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>سجل الان واضف مشروعك</strong>
            </h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="" method="post" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="Sj6clhRgjU+XlAMqe//PS7DVHjWAnrGYBZzRblLmhuxGzMF4qbfn9VLFpap3mrJwpaZQGrR8wx6+oZ55HYv0P0qa6TnLy4LQdhSTX9k1W2DBDOamig+VqNqFhfHJYT/B">
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                        وصول آمن للموقع
                    </p>
                    <div class="row">
                        <?php 
                            if(strlen($error) > 0)
                            {                                                       
                                print '<div data-form-alert-danger="" class="alert alert-danger col-12">'.$error.'</div>';   
                            }
                        ?>
                        <!-- <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div> -->
                    </div>
                    <div class="dragArea row">                        
                        <div data-for="username" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="البريد الالكتروني أو رقم الهاتف" data-form-field="username" class="form-control" value="" id="phone-form7-9" required="required" />
                        </div>
                        <div data-for="pass" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="password" name="pass" placeholder="كلمة السر" data-form-field="pass" class="form-control" value="" id="phone-form7-9" required="required" />
                        </div>
                        <div class="col-auto mbr-section-btn align-center">
                            <button type="submit" class="btn btn-primary display-4">سجل دخول الان</button>
                        </div>
                        <br/> <br/>
                        <br/> <br/>                     
                        <div class="col-auto mbr-section-btn align-center">                           
                            <p class="mbr-text mbr-fonts-style align-center mb-4 display-7"> ليس لديك حساب؟ <a href="<?=base_url()?>/auth/register">سجل معنا الان</a> </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>