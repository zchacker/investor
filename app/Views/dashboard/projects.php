<div class="main-content">
	<h1 class="page-title"><?=$title?></h1>
    <div class="row">
        <div class="col-lg-12">
            
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
                            <th>اسم المشروع</th>
                            <th>رأس المال</th>
                            <th>نسبة المشاركة</th>
                            <th>التاريخ</th>
                            <th>الحدث</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php 
                            foreach($projects as $project)
                            {
                                $show  = "<a href='".base_url()."/dash/project/$project[id]' class='btn btn-primary btn-rounded'>التفاصيل</a>";                               

                                print("
                                    <tr>
                                        <th>$project[id]</th>                                        
                                        <td>$project[title]</td>
                                        <td>$project[capital]</td>
                                        <td>$project[share]</td>
                                        <td>$project[added_time]</td>
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