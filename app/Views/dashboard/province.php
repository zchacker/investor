<div class="main-content">
	<h1 class="page-title"><?=$title?></h1>
    <div class="row">
        <div class="col-lg-12">
            <a href='<?=base_url()?>/panel/add_city/<?=$id?>' class='btn btn-primary btn-rounded'>أضف مدينة</a>
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
                            <th>اسم المدينة</th>
                            <th>الحدث</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php 
                            foreach($cities as $city)
                            {
                                $show  = "<a href='".base_url()."/panel/city/$city[id]' class='btn btn-primary btn-rounded'>تعديل</a>";

                                print("
                                    <tr>
                                        <th>$city[id]</th>                                        
                                        <td>$city[nameAr]</td>                                      
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