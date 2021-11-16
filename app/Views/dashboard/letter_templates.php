<div class="main-content">
	<h1 class="page-title"><?=$title?></h1>
    <div class="row">
        <div class="col-lg-12">
            <a href='<?=base_url()?>/panel/add_letter_template' class='btn btn-success btn-rounded'>إضافة قالب جديد</a>
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
                            <th>العنوان</th>
                            <th>الحدث</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php 
                            foreach($letters as $letter)
                            {
                                $show  = "<a href='".base_url()."/panel/letter_template/$letter[id]' class='btn btn-primary btn-rounded'>عرض المزيد</a>";                                

                                print("
                                    <tr>
                                        <th>$letter[id]</th>
                                        <td>$letter[title]</td>
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