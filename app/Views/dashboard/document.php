<div class="main-content">
	<h1 class="page-title"><?=$title?></h1>
    <div class="row">
        <div class="col-lg-12">
            
            <hr/>
        </div>
    </div>
	<div class="row">
		<div class="col-lg-12">
            <!-- <iframe src="<?=base_url()?>/uploads/file.pdf" class="pdf-frame" height="200" width="300"></iframe> -->
            <div class="row">
                <div class="col-md-12">
                    <h2><strong>مرسل الى </strong><?=$document['destination_name']?></h2>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <?=$document['message_body']?>
                </div>
            </div>
        </div>
    </div>    
</div>