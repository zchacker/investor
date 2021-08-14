<section class="form7 cid-sFSJ7JRAnN" id="form7-9">
    
    
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>أضف مشروعك الان</strong>
            </h3>
            
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="" method="post" class="mbr-form form-with-styler mx-auto" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="Sj6clhRgjU+XlAMqe//PS7DVHjWAnrGYBZzRblLmhuxGzMF4qbfn9VLFpap3mrJwpaZQGrR8wx6+oZ55HYv0P0qa6TnLy4LQdhSTX9k1W2DBDOamig+VqNqFhfHJYT/B">
                    <p class="mbr-text mbr-fonts-style align-center mb-4 display-7">
                        تتم مراجعة المشاريع قبل النشر
                    </p>
                    <div class="row">
                        <?php 
                            if(strlen($message) > 0)
                            {                                                       
                                print '<div data-form-alert="" class="alert alert-success col-12">'.$message.'</div>';   
                            }

                            if(strlen($error) > 0)
                            {                                                       
                                print '<div data-form-alert-danger="" class="alert alert-danger col-12">'.$error.'</div>';   
                            }
                        ?>
                        <!-- <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some problem!</div> -->
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="full_name">
                            <input type="text" name="title" placeholder="عنوان مشروعك" data-form-field="full_name" class="form-control" value="" id="name-form7-9" required="required" />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="id_number">
                            <input type="text" name="domain" placeholder="مجال نشاط المشروع" data-form-field="id_number" class="form-control" value="" id="email-form7-9" required="required" />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="phone">
                            <input type="number" name="capital" placeholder="رأس المال" data-form-field="phone" class="form-control" value="" id="email-form7-9" required="required" />
                        </div>
                        <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="number" name="share" placeholder="نسبة المساهمة" data-form-field="email" class="form-control" value="" id="phone-form7-9" required="required" />
                        </div>
                        <div data-for="pass" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <!-- <input type="password" name="pass" placeholder="كلمة السر" data-form-field="pass" class="form-control" value="" id="phone-form7-9" required="required" /> -->
                            <textarea name="description" class="form-control" placeholder="وصف وشرح للمشروع" cols="30" rows="10"  required="required"></textarea>
                        </div>
                        <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <label for="" class="form-control">أفضل وقت للاتصال</label>
                            <select name="call_time" id="" class="form-control">
                                <option value="8 صباحا">8 صباحا</option>
                                <option value="9 صباحا">9 صباحا</option>
                                <option value="10 صباحا">10 صباحا</option>
                                <option value="11 صباحا">11 صباحا</option>
                                <option value="12 مساء">12 مساء</option>
                                <option value="1 مساء">1 مساء</option>
                                <option value="2 مساء">2 مساء</option>
                                <option value="3 مساء">3 مساء</option>
                                <option value="4 مساء">4 مساء</option>
                                <option value="5 مساء">5 مساء</option>
                                <option value="6 مساء">6 مساء</option>
                            </select>
                        </div>
                        <div class="col-auto mbr-section-btn align-center">
                            <button type="submit" class="btn btn-primary display-4">أضف المشروع الان</button>
                        </div>                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>