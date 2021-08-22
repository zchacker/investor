<section class="header5 cid-sFMIRCStII mbr-fullscreen" id="header5-2">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-12 col-lg-7">
                <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-3 display-1"><strong>استثمر لمستقبلك وانضم الان</strong></h1>

                <p class="mbr-text mbr-fonts-style mbr-white display-7">هي منصة تتيح لك عرض مشاريعك على المستثمرين للحصول على شريك جديد</p>
                <div class="mbr-section-btn mt-3">
                    <a class="btn btn-warning-outline display-7" href="#contacts2-4">مستثمر؟ تصفح الان</a>
                    <a class="btn btn-warning display-7" href="<?=base_url()?>/user/add_project">أضف مشروعك الان!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features3 cid-sFMIXYTU1d" id="features3-3">


    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><strong>المميزات</strong></h4>

        </div>
        <div class="row mt-4">
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/fast.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>وصول سهل للمشاريع</strong></h5>

                        <p class="mbr-text mbr-fonts-style mt-3 display-7">نقطة تواصل سهلة وسريعة</p>
                    </div>

                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/trust.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>ثقة أكبر بعقود موثقة</strong></h5>

                        <p class="mbr-text mbr-fonts-style mt-3 display-7">شركتنا تتيح خدمة توثيق العقود و جلسات المناقشة للمشاريع</p>
                    </div>

                </div>
            </div>
            <div class="item features-image сol-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/flex.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-7"><strong>مرونة في التعامل</strong></h5>
                        <p class="mbr-text mbr-fonts-style mt-3 display-7">فريق العمل لدينا مرن في التعامل&nbsp;<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contacts2 cid-sFMJ2u12wQ" id="contacts2-4">
    <!---->
    <div class="container">
        <div class="mbr-section-head">
            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                <strong>هل أنت مستثمر؟ تصفح هذه المشاريع</strong>
            </h3>
        </div>        
        <div class="row justify-content-center mt-4">
        <?php 

            function preview($text)
            {
                return $out = strlen($text) > 50 ? substr($text,0,310)."..." : $text;         
            }


            foreach($projects as $project)
            {
                
                $url = base_url().'/home/project/'.$project['id'];

                print("                
                    <div class='card col-12 col-md-12'>
                        <div class='card-wrapper'>                       
                            <div class='text-wrapper'>
                                <h6 class='card-title mbr-fonts-style mb-1 display-5'>  
                                    <a href='$url'>                              
                                        <strong>$project[title]</strong>
                                    </a>
                                </h6>
                                <p class='mbr-text mbr-fonts-style display-7'>                                
                                    ".preview($project['description'])."
                                </p>
                            </div>
                        </div>
                    </div>
                ");
            }
            ?>
        </div>
    </div>
</section>

<section class="social2 cid-sFMJzrKfNH" id="share2-5">
    <div class="container">
        <div class="media-container-row">
            <div class="col-12">
                <h3 class="mbr-section-title align-center mb-3 mbr-fonts-style display-2">
                    <strong>انشر هذا الموقع</strong>
                </h3>
                <div>
                    <div class="mbr-social-likes align-center" data-counters="false">
                        <span class="btn btn-social facebook m-2">
                            <i class="socicon socicon-facebook"></i>
                        </span>
                        <span class="btn btn-social twitter m-2">
                            <i class="socicon socicon-twitter"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>