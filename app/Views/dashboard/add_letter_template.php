<!-- Main content -->
<div class="main-content">
	<h1 class="page-title"><?=$title?></h1>
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
					<label for="title">العنوان</label>
					<input type="text" class="form-control" name="title" id="title" value="" placeholder="عنوان النموذج">
				</div>				
				<div class="form-group">
					<textarea id="summernote" name="text"></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">حفظ البيانات</button>
				</div>
			</form>
		</div>
	</div>
</div>