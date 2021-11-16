<div class="main-content">
	<h1 class="page-title"><?=$title?></h1>
    <div class="row">
        <div class="col-lg-12">
            <a href='<?=base_url()?>/panel/add_dirction/<?=$type?>' class='btn btn-success btn-rounded'>إضافة جهة جديدة</a>
            <hr/>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= $pager->links() ?>
        </div>
    </div>
	<div class="row">
		<div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead> 
                        <tr> 
                            <th>#</th> 
                            <th>عنوان الجهة</th>
                            <th>الحدث</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php 
                            foreach($dirctions as $dirction)
                            {
                                $show  = "<a href='".base_url()."/panel/view_dirction/$type/$dirction[id]' class='btn btn-primary btn-rounded'>عرض المزيد</a>";                                

                                print("
                                    <tr>
                                        <th>$dirction[id]</th>
                                        <td>$dirction[title]</td>
                                        <td>$show</td>
                                    </tr>
                                ");
                            }
                        ?>                                        
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <?= $pager->links() ?>
        </div>
    </div>
</div>