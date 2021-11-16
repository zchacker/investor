<div class="main-content">
	<h1 class="page-title"><strong>مدينة في <?=$title?></strong></h1>
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
					<label for="city">اسم المدينة</label>
					<input type="text" class="form-control" name="city" id="city" value="" placeholder="اسم المدينة">
				</div>				               				
				<div class="form-group">					
					<button type="submit" class="btn btn-primary">حفظ البيانات</button>                    
				</div>
			</form>
        </div>
    </div>
</div>