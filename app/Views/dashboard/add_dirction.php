<div class="main-content">
	<h1 class="page-title"><strong>إضافة جهة إرسال <?=$title?></strong></h1>
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
					<label for="title">اسم الجهة</label>
					<input type="text" class="form-control" name="title" id="title" value="" placeholder="اسم الجهة">
				</div>
				<div class="form-group">
					<label for="address_line_1">سطر العنوان 1</label>
					<input type="text" class="form-control"  name="address_line_1" id="address_line_1" value="" placeholder="سطر العنوان 1">
				</div>
                <div class="form-group">
					<label for="address_line_2">سطر العنوان 2</label>
					<input type="text" class="form-control"  name="address_line_2" id="address_line_2" value="" placeholder="سطر العنوان 2">
				</div>
                <div class="form-group">
					<label for="city">المدينة</label>
					<input type="text" class="form-control"  name="city" id="city" value="" placeholder="المدينة">
				</div>
                <div class="form-group">
					<label for="postal_code">الرمز البريدي</label>
					<input type="text" class="form-control"  name="postal_code" id="postal_code" value="" placeholder="الرمز البريدي">
				</div>				
				<div class="form-group">					
					<button type="submit" class="btn btn-primary">حفظ البيانات</button>
                    <button type="button" class="btn btn-danger">حذف</button>
				</div>
			</form>
        </div>
    </div>
</div>