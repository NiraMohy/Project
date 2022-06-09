<?php
include "connectDB.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>system</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <style>
    label{
      color: #f0f0e9;
    }
  </style>
</head><!--/head-->

<body>
<header id="header" style="background-color:#d63031"><!--header-->
		
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.php"><img style="    width: 100%;" src="images/home/صورة اللوجو.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							</div>
							
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
						<h1 style="font-size: 33px;">المعهد المصري لأكاديمية الاسكندرية للإدارة والمحاسبة</h1>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	

	<section style=" background-color:#d63031">
		<div class="container">
			<div class="row">
				
				
				<div class="col-sm-9 padding-right">
					
					<!--features_items-->
					
					<div class="category-tab"><!--category-tab-->
					
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-12">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
                      <table style="width : 21sm; direction: rtl;background-color:#f0f0e9;margin-top:20px;" class=" table table-bordered">
                      <thead>
                            
                            <td style="font-size: 10px; width : 20%;"> الكود</td>
                            <td style="font-size: 10px; width : 80%;">الاسم</td>
                            
                        </thead>    
                        
                      <?php
                        $stu_attendance= getAllFrom("*"," 	departments ","" , "dep_id" , "ASC");
                          foreach ($stu_attendance as $stus) {
                          echo '<tr><td style="font-size: 20px;"> '. $stus['dep_id'] .'</td>';
                          echo '<td style="font-size: 15px;">'. $stus['dep_name'] .'</td></tr>';
                        }
                        
                      
                        ?>
                        
                        </table>
											</div>
											
										</div>
									</div>
								</div>
							
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items">
					</div>
					<!--/recommended_items-->
					
        </div>
        <div class="col-sm-3">
					<div class="left-sidebar">
					<div class="panel-group category-products" id="accordian"><!--category-productsr-->
              <div class="panel panel-default text-center"> <div class="panel-heading"> <h4><a style="font-size: larger;color:blue" href="index.php">الرئيسية</a></h4> </div> </div>
              <div class="panel panel-default text-center"> <div class="panel-heading"> <h4><a style="font-size: larger;" href="all_stu.php">الطلاب</a></h4> </div> </div>
              <div class="panel panel-default text-center"> <div class="panel-heading"> <h4><a style="font-size: larger;" href="all_cur.php">المقررات</a></h4> </div> </div> 
              <div class="panel panel-default text-center"> <div class="panel-heading"> <h4><a style="font-size: larger;" href="all_dep.php">الاقسام</a></h4> </div> </div> 
              <div class="panel panel-default text-center"> <div class="panel-heading"> <h4><a style="font-size: larger;" href="all_levels.php">الفرق</a></h4> </div> </div> 
						</div>
						<!--/category-products-->
					


					</div>
				</div>
			</div>
		</div>
	</section>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>