<div class="main-content">
	<h1 class="page-title"><strong><?=$title?></strong></h1>
	<div class="row">
		<div class="col-lg-12">
            <form method="post" action="">
				<?php
					if(strlen($message) > 0){
						print("<div class='alert alert-success' role='alert'><strong>رائع! </strong>$message</div>");
					}

					if(strlen($error) > 0){
						print("<div class='alert alert-danger' role='alert'><strong>نأسف! </strong>$error</div>");
					}
				?>
				<div class="form-group">
					<label for="site_name">اسم الموقع</label>
					<input type="text" class="form-control" name="site_name" id="site_name" value="<?=$site_name?>" placeholder="اسم الموقع">
				</div>
				<div class="form-group">
					<label for="phone">رقم الهاتف</label>
					<input type="text" class="form-control"  name="phone" id="phone" value="<?=$phone?>" placeholder="رقم الهاتف">
				</div>
                <div class="form-group">
					<label for="email">البريد الالكتروني</label>
					<input type="text" class="form-control"  name="email" id="email" value="<?=$email?>" placeholder="البريد الالكتروني">
				</div>
                <div class="form-group">
					<label for="description">وصف الموقع</label>
					<input type="text" class="form-control"  name="description" id="description" value="<?=$description?>" placeholder="وصف الموقع">
				</div>
                <div class="form-group">
					<label for="package1">سعر باقة الحكومية</label>
					<input type="text" class="form-control"  name="package1" id="package1" value="<?=$package1?>" placeholder="سعر باقة الحكومية">
				</div>	
                <div class="form-group">
					<label for="package2">سعر باقة الشركات</label>
					<input type="text" class="form-control"  name="package2" id="package2" value="<?=$package2?>" placeholder="سعر باقة الشركات">
				</div>
                <div class="form-group">
					<label for="package3">سعر باقة المخصصة</label>
					<input type="text" class="form-control"  name="package3" id="package3" value="<?=$package3?>" placeholder="سعر باقة المخصصة">
				</div>			
				<div class="form-group">					
					<button type="submit" class="btn btn-primary">حفظ البيانات</button>                    
				</div>
			</form>
        </div>
    </div>
</div>