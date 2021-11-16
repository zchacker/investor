<div class="main-content">
	<h1 class="page-title"><?=$title?></h1>
    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post">
                <div class="col-md-6 col-xs-9">
                    <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" />
                </div>
                <div class="col-md-6 col-xs-3">
                    <button type="submit" class="btn btn-primary">بحث</button>
                </div>
            </form>
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
                            <th>المبلغ</th>
                            <th>معرف العملية</th>
                            <th>الرسالة</th>
                            <th>حالة العملية</th>
                            <th>الزمن</th>
                            <th>رقم الهاتف</th>
                            <th>المستند</th>
                            <th>الحدث</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php 
                            foreach($transactions as $transaction)
                            {
                                
                                $show  = "<a href='".base_url()."/panel/province/$transaction[id]' class='btn btn-primary btn-rounded'>تفاصيل</a>";
                                $document = "<a href='".base_url()."/panel/document/".$transaction['document_id']."'>البرقية</a>";

                                print("
                                    <tr>
                                        <th>$transaction[id]</th>                                        
                                        <td><strong>$transaction[amount]</strong></td>
                                        <td>$transaction[transaction_id]</td>
                                        <td>$transaction[message]</td>
                                        <td>$transaction[status]</td>
                                        <td>$transaction[time]</td>
                                        <td>$transaction[phone]</td>
                                        <td>$document</td>
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