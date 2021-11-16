<div class="main-content">
	<h1 class="page-title"><?=$title?></h1>
    <div class="row">
        <div class="col-lg-12">
            
            <hr/>
        </div>
    </div>

	<div class="row">
		<div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead> 
                        <tr> 
                            <th>#</th>                             
                            <th>اسم المنطقة</th>
                            <th>الحدث</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php 
                            foreach($provinces as $province)
                            {
                                $show  = "<a href='".base_url()."/panel/province/$province[id]' class='btn btn-primary btn-rounded'>تفاصيل</a>";                               
                                print("
                                    <tr>
                                        <th>$province[id]</th>                                        
                                        <td>$province[nameAr]</td>                                      
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

</div>