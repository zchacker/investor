<section class="form7 cid-sFSJ7JRAnN" id="form7-9">
    <div class="container">
        <div class="mbr-section-head">
            <h1 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>مشاريعك</strong>
            </h1>                
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <?php
                    foreach($projects as $project){
                        print("
                        <div class='projct'>
                            <h2>$project[title]</h2>
                            <hr/>
                            <div class='info'>
                                <span class='domain'><strong>مجال العمل: </strong>$project[domain]</span> 
                                <span class='domain'><strong>أوقات الاتصال: </strong>$project[call_time]</span> 
                            </div>
                            <div class='info'>
                                <span class='domain'><strong>رأسل المال: </strong>$project[capital]</span> 
                                <span class='domain'><strong>نسب الشراكة المتاحة: </strong>$project[share]</span> 
                            </div>
                            <div class='description'>
                                <p class='project-description'>$project[description]</p>
                            </div>
                        </div>
                        ");
                    }
                ?>
                
            </div>
        </div>
    </div>
</section>