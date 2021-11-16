<!-- Main content -->
<div class="main-content">
	<h1 class="page-title">معلومات صفحة : <?= $page_data[0]->title ?></h1>
	<div class="row">
		<div class="col-lg-12">
			<form method="post">
				<div class="form-group">
					<label for="title">عنوان الصفحة</label>
					<input type="text" class="form-control" name="title" id="title" value="<?= $page_data[0]->title ?>" placeholder="عنوان الصفحة">
				</div>
				<div class="form-group">
					<label for="description">وصف للصفحة</label>
					<input type="text" class="form-control" <?= $page_data[0]->description ?> name="description" id="description" value="<?= $page_data[0]->description ?>" placeholder="وصف للصفحة">
				</div>
				<div class="form-group">
					<textarea id="summernote" name="body"><?= $page_data[0]->body ?></textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">حفظ البيانات</button>
				</div>
			</form>
		</div>
	</div>
</div>