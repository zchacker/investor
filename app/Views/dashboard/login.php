<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>تسجيل الدخول</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
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

<!-- Mouldifi RTL core stylesheet -->
<link href="<?= base_url() ?>/dashboard/css/mouldifi-rtl-core.css" rel="stylesheet">
<!-- /mouldifi rtl core stylesheet -->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->


</head>
<body class="login-page">
<div class="login-container">
	<div class="login-branding">
		<a href="<?= base_url();?>"><img src="<?= base_url() ?>/dashboard/images/earno.png" class="loign-logo" alt="Mouldifi" title="Mouldifi"></a>
	</div>
	<div class="login-content">
		<h2><strong>مرحبا بعودتك</strong>, يرجى تسجيل الدخول</h2>
		<form method="post" action="">    
            <?php                 
                if(strlen($error) > 0){
                    print("<div class='alert alert-danger' role='alert'><strong>نأسف! </strong>$error</div>");
                }
            ?>
			<div class="form-group">
				<input type="text" name="username" placeholder="اسم المستخدم" class="form-control">
			</div>                        
			<div class="form-group">
				<input type="password" name="password" placeholder="كلمة المرور" class="form-control">
			</div>
			<!-- <div class="form-group">
				 <div class="checkbox checkbox-replace">
					<input type="checkbox" id="remeber">
					<label for="remeber">Remeber me</label>
				  </div>
			 </div> -->
			<div class="form-group">
				<button class="btn btn-primary btn-block">دخول</button>
			</div>
			<p class="text-center"><a href="forgot-password.html">نسيت كلمة المرور؟</a></p>                        
		</form>
	</div>
</div>
<!--Load JQuery-->
<script src="<?= base_url() ?>/dashboard/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/dashboard/js/bootstrap.min.js"></script>
</body>
</html>
