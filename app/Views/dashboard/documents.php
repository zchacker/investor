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
                            <th>رقم المرسل</th>
                            <th>الحالة</th>
                            <th>التاريخ</th>
                            <th>الحدث</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php 
                            foreach($docuemnts as $docuemnt)
                            {
                                $show  = "<a href='".base_url()."/panel/document/$docuemnt[id]' class='btn btn-primary btn-rounded'>عرض المزيد</a>";                                
                                $status = '<span class="badge badge-primary">معلقة</span>';
                                
                                if($docuemnt['sent_status'] == 'sent'){
                                    $status = '<span class="badge badge-success">مؤكدة</span>';
                                }else if($docuemnt['sent_status'] == 'canceled'){
                                    $status = '<span class="badge badge-danger">ملغية</span>';
                                }

                                print("
                                    <tr>
                                        <th>$docuemnt[id]</th>                                        
                                        <td>$docuemnt[sender_phone]</td>
                                        <td>$status</td>
                                        <td>$docuemnt[date]</td>
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