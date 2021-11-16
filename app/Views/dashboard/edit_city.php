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
					<label for="city">اسم المدينة</label>
					<input type="text" class="form-control" name="city" id="city" value="<?=$city['nameAr']?>" placeholder="اسم المدينة">
				</div>				               				
				<div class="form-group">					
					<button type="submit" class="btn btn-primary">حفظ البيانات</button>                    
					<button type="button" onclick="delete_city()" class="btn btn-danger">حذف</button>                    
				</div>
			</form>
        </div>
    </div>
</div>

<script type="text/javascript">
    function delete_city() {
        Swal.fire({
            title: 'هل تريد حذف المدينة؟',
            icon: 'warning',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: `حذف`,
            //denyButtonText: `Don't save`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {              
                delete_city_id();
            }            
        })
    }

    function delete_city_id()
    {       
        var fileuploaddata = new FormData();
        fileuploaddata.append('id', <?=$id?>);

        $.ajax({           
            url: '<?= base_url() ?>/panel/delete_city',
            type: "POST",
            processData: false,
            contentType: false,
            data: fileuploaddata,
            success: function(result) {
                console.log(result);
                if (result.success === true) {                    
                    Swal.fire('تم الحذف!', '', 'success');
                    setTimeout(() => { window.location = '<?= base_url() ?>/panel/provinces'; }, 3000);
                    //window.open('<?= base_url() ?>/panel/provinces');
                    //
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'لم يتم الحذف',
                        text: 'حدث خطأ ما أثناء الحذف الرجاء المحاولة مرة أخرى',
                        confirmButtonText: 'حسنا!'
                    });                    
                }
                $('#file').val('');
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                Swal.fire({
                    icon: 'error',
                    title: 'لم يتم الحذف',
                    text: 'حدث خطأ ما أثناء الحذف الرجاء المحاولة مرة أخرى',
                    confirmButtonText: 'حسنا!'
                });
            }
        });
    }
</script>