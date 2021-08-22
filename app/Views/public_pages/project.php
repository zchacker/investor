<section class="form7 cid-sFSJ7JRAnN" id="form7-9">
    <div class="container">
        <div class="mbr-section-head">
            <h2 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>تفاصيل المشروع</strong>
            </h2>                
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <?php                    
                    print("
                    <div class='projct'>
                        <h1>$project[title]</h1>
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
                ?>                
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <a href="<?=base_url()?>/home/investnow/<?=$project['id']?>" class="btn btn-success display-4">استثمر في هذا المشروع</a>
            </div>
        </div>
    </div>
</section>