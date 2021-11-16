<!DOCTYPE html>
<html lang="ar">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
	<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
	<title>لوحة تحكم </title>
	<!-- Site favicon -->
	<link rel='shortcut icon' type='image/x-icon' href='<?= base_url() ?>/dashboard/images/favicon.ico' />
	<!-- /site favicon -->

	<!-- Entypo font stylesheet -->
	<link href="<?= base_url() ?>/dashboard/css/entypo.css" rel="stylesheet">
	<!-- /entypo font stylesheet -->

	<!-- Font awesome stylesheet -->
	<link href="<?= base_url() ?>/dashboard/css/font-awesome.min.css" rel="stylesheet">
	<!-- /font awesome stylesheet -->

	<!-- Bootstrap stylesheet min version -->
	<link href="<?= base_url() ?>/dashboard/css/bootstrap.min.css" rel="stylesheet">
	<!-- /bootstrap stylesheet min version -->

	<!-- Mouldifi core stylesheet -->
	<link href="<?= base_url() ?>/dashboard/css/mouldifi-core.css" rel="stylesheet">
	<!-- /mouldifi core stylesheet -->

	<link href="<?= base_url() ?>/dashboard/css/mouldifi-forms.css" rel="stylesheet">

	<!-- Bootstrap RTL stylesheet min version -->
	<link href="<?= base_url() ?>/dashboard/css/bootstrap-rtl.min.css" rel="stylesheet">
	<!-- /bootstrap rtl stylesheet min version -->

	<!--Summernote-->
	<link href="<?= base_url() ?>/dashboard/css/plugins/summernote/summernote.css" rel="stylesheet">

	<!-- Mouldifi RTL core stylesheet -->
	<link href="<?= base_url() ?>/dashboard/css/mouldifi-rtl-core.css" rel="stylesheet">
	<!-- /mouldifi rtl core stylesheet -->

	<!-- custom styling -->
	<link href="<?= base_url() ?>/dashboard/css/custom.css" rel="stylesheet">

	<script  src="<?= base_url() ?>/assets/alert/sweetalert2.all.min.js"></script>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
	<![endif]-->
	<!--[if lte IE 8]>
		<script src="js/plugins/flot/excanvas.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Page container -->
	<div class="page-container">

		<!-- Page Sidebar -->
		<div class="page-sidebar">

			<!-- Site header  -->
			<header class="site-header">
				<div class="site-logo">
					<a href="<?=base_url()?>/panel/">
						<!-- <img src="<?=base_url()?>/dashboard/images/logo.png" alt="Mouldifi" title="Mouldifi"> -->
						<h1>Earno</h1>						
					</a>
				</div>
				<div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
				<div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
			</header>
			<!-- /site header -->

			<!-- Main navigation -->
			<ul id="side-nav" class="main-menu navbar-collapse collapse">
				<li class="has-sub <?php if($tab > 0 && $tab <= 1 ) print("active");?>"><a href="<?=base_url()?>/panel/"><i class="icon-gauge"></i><span class="title">الرئيسية</span></a>
					<ul class="nav">
						<li class="<?php if($tab == 1 ) print("active");?>"><a href="<?=base_url()?>/dash/index"><span class="title">الاحصائيات</span></a></li>						
					</ul>
				</li>
				<li class="has-sub <?php if($tab > 1 && $tab <= 5 ) print("active");?>"><a href="<?=base_url()?>/dash/projects/all"><i class="icon-layout"></i><span class="title">المشاريع</span></a>
					<ul class="nav collapse">
						<li class="<?php if($tab == 2 ) print("active");?>"><a href="<?=base_url()?>/dash/projects/approved"><span class="title">مشاريع معروضة</span></a></li>
						<li class="<?php if($tab == 3 ) print("active");?>"><a href="<?=base_url()?>/dash/projects/pending"><span class="title">مشاريع تحت المراجعة</span></a></li>
						<li class="<?php if($tab == 4 ) print("active");?>"><a href="<?=base_url()?>/dash/projects/deleted"><span class="title">مشاريع محذوفة</span></a></li>
						<li class="<?php if($tab == 5 ) print("active");?>"><a href="<?=base_url()?>/dash/projects/archived"><span class="title">مشاريع مكتملة</span></a></li>						
					</ul>
				</li>
				<li class="has-sub <?php if($tab > 7 && $tab <= 9 ) print("active");?>"><a href="<?=base_url()?>/dash/list_dirctions/gov"><i class="icon-newspaper"></i><span class="title">طلبات الاستثمار</span></a>
					<ul class="nav collapse">
						<li class="<?php if($tab == 8 ) print("active");?>"><a href="<?=base_url()?>/dash/list_dirctions/gov"><span class="title">طلبات تحت المراجعة</span></a></li>
						<li class="<?php if($tab == 9 ) print("active");?>"><a href="<?=base_url()?>/dash/list_dirctions/com"><span class="title">طلبات مكتملة</span></a></li>
					</ul>
				</li>
				<li class="has-sub <?php if($tab > 9 && $tab <= 12 ) print("active");?>"><a href="<?=base_url()?>/dash/"><i class="icon-window"></i><span class="title">العضويات</span></a>
					<ul class="nav collapse">
						<li class="<?php if($tab == 10 ) print("active");?>"><a href="<?=base_url()?>/dash/documents/pending"><span class="title">معلقة</span></a></li>
						<li class="<?php if($tab == 11 ) print("active");?>"><a href="<?=base_url()?>/dash/documents/sent"><span class="title">مؤكدة</span></a></li>
						<li class="<?php if($tab == 12 ) print("active");?>"><a href="<?=base_url()?>/dash/documents/canceled"><span class="title">ملغية</span></a></li>
					</ul>
				</li>
				<li class="has-sub <?php if($tab > 12 && $tab <= 14 ) print("active");?>"><a href="<?=base_url()?>/dash/"><i class="icon-doc-text"></i><span class="title">حسابات</span></a>
					<ul class="nav collapse">
						<li class="<?php if($tab == 13 ) print("active");?>"><a href="<?=base_url()?>/dash/"><span class="title">الكوبونات النشطة</span></a></li>
						<li class="<?php if($tab == 14 ) print("active");?>"><a href="<?=base_url()?>/dash/"><span class="title">الكوبونات المنتهية</span></a></li>
					</ul>
				</li>
				<li class="has-sub <?php if($tab > 14 && $tab <= 17 ) print("active");?>"><a href="<?=base_url()?>/dash/"><i class="icon-chart-bar"></i><span class="title">إعدادات</span></a>
					<ul class="nav collapse">
						<li class="<?php if($tab == 15 ) print("active");?>"><a href="<?=base_url()?>/dash/"><span class="title">عرض المستخدمين</span></a></li>
						<li class="<?php if($tab == 16 ) print("active");?>"><a href="<?=base_url()?>/dash/"><span class="title">إضافة جديد</span></a></li>
						<li class="<?php if($tab == 17 ) print("active");?>"><a href="<?=base_url()?>/dash/"><span class="title">ملفك الشخصي</span></a></li>
					</ul>
				</li>					
				<li class="has-sub <?php if($tab > 18 && $tab <= 20 ) print("active");?>"><a href="<?=base_url()?>/dash/site_sesttings"><i class="icon-chart-bar"></i><span class="title">إعدادات الموقع</span></a>
					<ul class="nav collapse">
						<li class="<?php if($tab == 19 ) print("active");?>"><a href="<?=base_url()?>/dash/site_sesttings"><span class="title">الشروط والاحكام</span></a></li>
						<li class="<?php if($tab == 20 ) print("active");?>"><a href="<?=base_url()?>/dash/provinces"><span class="title">من نحن</span></a></li>
						<li class="<?php if($tab == 21 ) print("active");?>"><a href="<?=base_url()?>/dash/transactions"><span class="title">أرقام التواصل</span></a></li>
						<li class="<?php if($tab == 21 ) print("active");?>"><a href="<?=base_url()?>/dash/transactions"><span class="title">سياسة الخصوصية</span></a></li>
					</ul>
				</li>					
			</ul>
			<!-- /main navigation -->
		</div>
		<!-- /page sidebar -->

		<!-- Main container -->
		<div class="main-container gray-bg">

			<!-- Main header -->
			<div class="main-header row">
				<div class="col-sm-6 col-xs-7">

					<!-- User info -->
					<ul class="user-info pull-left">
						<li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="<?= base_url() ?>/dashboard/images/man-3.jpg">مرحبا بك في لوحة التحكم <span class="caret"></span></a>

							<!-- User action menu -->
							<ul class="dropdown-menu">

								<!-- <li><a href="#/"><i class="icon-user"></i>My profile</a></li>
								<li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
								<li><a href="#"><i class="icon-clipboard"></i>Tasks</a></li>
								<li class="divider"></li> -->
								<li><a href="#"><i class="icon-cog"></i>المشرفين</a></li>
								<li><a href="#"><i class="icon-logout"></i>تسجيل الخروج</a></li>
							</ul>
							<!-- /user action menu -->

						</li>
					</ul>
					<!-- /user info -->

				</div>

				<div class="col-sm-6 col-xs-5">
					<div class="pull-right">
						<!-- User alerts -->
						<ul class="user-info pull-left hidden">

							<!-- Notifications -->
							<li class="notifications dropdown">
								<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
								<ul class="dropdown-menu pull-right">
									<li class="first">
										<div class="small"><a class="pull-right danger" href="#">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
									</li>
									<li>
										<ul class="dropdown-list">
											<li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
											<li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
											<li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
											<li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
											<li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
											<li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
										</ul>
									</li>
									<li class="external-last"> <a href="#" class="danger">View all notifications</a> </li>
								</ul>
							</li>
							<!-- /notifications -->

							<!-- Messages -->
							<li class="notifications dropdown">
								<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
								<ul class="dropdown-menu pull-right">
									<li class="first">
										<div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
									</li>
									<li>
										<ul class="media-list">
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url() ?>/dashboard/images/domnic-brown.png"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">Domnic Brown</span>
														<span class="media-annotation pull-right">Tue</span>
													</a>
													<span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
												</div>
											</li>
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url() ?>/dashboard/images/john-smith.png"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">John Smith</span>
														<span class="media-annotation pull-right">12:30</span>
													</a>
													<span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
												</div>
											</li>
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url() ?>/dashboard/images/stella-johnson.png"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">Stella Johnson</span>
														<span class="media-annotation pull-right">2 days ago</span>
													</a>
													<span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
												</div>
											</li>
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url() ?>/dashboard/images/alex-dolgove.png"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">Alex Dolgove</span>
														<span class="media-annotation pull-right">10:45</span>
													</a>
													<span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
												</div>
											</li>
											<li class="media">
												<div class="media-left"><img alt="" class="img-circle img-sm" src="<?= base_url() ?>/dashboard/images/domnic-brown.png"></div>
												<div class="media-body">
													<a class="media-heading" href="#">
														<span class="text-semibold">Domnic Brown</span>
														<span class="media-annotation pull-right">4:00</span>
													</a>
													<span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>
												</div>
											</li>
										</ul>
									</li>
									<li class="external-last"> <a class="danger" href="#">All Messages</a> </li>
								</ul>
							</li>
							<!-- /messages -->

						</ul>
						<!-- /user alerts -->

					</div>
				</div>
			</div>
			<!-- /main header -->