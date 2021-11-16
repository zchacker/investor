<div class="main-content">
	<h1 class="page-title"><?=$title?></h1>
    <div class="row">
        <div class="col-lg-12">            
            <hr/>
        </div>
    </div>
	<div class="row">
		<div class="col-lg-12">            
            <div class="row">
                <div class="col-md-12">
                    <h2><?=$project['title']?></h2>
                </div>
            </div>            
            <div class="row">
                <div class="col-md-6">
                    <p><strong>مجال العمل:</strong> <?=$project['domain']?> </p>
                </div>
                <div class="col-md-6">
                    <p><strong>رأس المال:</strong> <?=$project['capital']?> </p>
                </div>
                <div class="col-md-6">
                    <p><strong>نسبة المشاركة:</strong> <?=$project['share']?> </p>
                </div>
                <div class="col-md-6">
                    <p><strong>أنسب وقت للاتصال:</strong> <?=$project['call_time']?> </p>
                </div>            
                <div class="col-md-12">
                    <hr>    
                    <h2>وصف المشروع</h2>                    
                    <?=$project['description']?>
                </div>
            </div>
        </div>
    </div> 
    <hr>
    <div class="row">
        <form action="" method="POST">
            <input type="hidden" name="project_id" value="<?=$project['id']?>"/>
            <input type="submit" class="btn btn-primary btn-rounded" name="accept" value="قبول">
            <input type="submit" class="btn btn-danger btn-rounded" name="reject" value="رفض">
        </form>
    </div>
</div>