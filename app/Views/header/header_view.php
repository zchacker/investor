<!DOCTYPE html>
<html dir="rtl">

<head>
    <!-- Site made with Mobirise Website Builder v5.3.10, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.3.10, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>/assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">


    <title><?=$title?></title>
    <link rel="stylesheet" href="<?=base_url()?>/assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/tether/tether.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/dropdown/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/socicon/css/styles.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/theme/css/style.css?v=1.1">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="<?=base_url()?>/assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="<?=base_url()?>/assets/mobirise/css/mbr-additional.css" type="text/css">




</head>

<body>

    <section class="menu menu2 cid-sFMINNIz79" once="menu" id="menu2-0">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <span class="navbar-logo">
                        <a href="<?=base_url()?>">
                            <img src="<?=base_url()?>/assets/images/logo.png" alt="Mobirise" style="height: 5.4rem;">
                        </a>
                    </span>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?=base_url()?>">من نحن</a></li>
                        <li class="nav-item"><a class="nav-link link text-black text-primary display-4" href="<?=base_url()?>">الخدمات</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="#">تواصل معنا</a></li>
                        <?php 
                            if(session()->get('user_id') && session()->get('user_id')){
                        ?>                
                        <li class="nav-item"><a class="nav-link link text-primary display-4" href="<?=base_url()?>/user/projects">مشاريعي</a></li>
                        <li class="nav-item"><a class="nav-link link text-danger display-4" href="<?=base_url()?>/auth/logout">تسجيل خروج</a></li>
                        <?php } else { ?>
                        <li class="nav-item"><a class="nav-link link text-primary display-4" href="<?=base_url()?>/auth/login">تسجيل الدخول</a></li>
                        <?php } ?>
                    </ul>
                    <!-- <div class="icons-menu">
                        <a class="iconfont-wrapper" href="#" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                        <a class="iconfont-wrapper" href="#" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                        <a class="iconfont-wrapper" href="#" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                        <a class="iconfont-wrapper" href="#" target="_blank">
                            <span class="p-2 mbr-iconfont socicon-linkedin socicon"></span>
                        </a>
                    </div> -->
                   
                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="<?=base_url()?>/user/add_project">انشر مشروعك الن</a></div>
                </div>
            </div>
        </nav>
    </section>