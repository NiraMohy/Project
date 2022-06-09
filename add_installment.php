<?php
include "connectDB.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$stmt = $connectDB->prepare("INSERT INTO installment
                    (the_amount_paid ,payment_date ,Expenses_id ,stu_id )

VALUES(:xamp , :xlev , :xpp , :xtt ) ");
      $stmt->execute(array(
        'xamp'     => $_POST['the_amount_paid'],
        'xlev'     => $_POST['payment_date'],
        'xpp'     => $_POST['Expenses_id'],
        'xtt'     => $_POST['stu_id']
      ));
    }
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
                      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label style="color:#f0f0e9" for="the_amount_paid">المبلغ المدفوع  </label>
                            <input type="number" class="form-control" autocomplete="off" name="the_amount_paid" placeholder="Enter the amount paid" id="the_amount_paid" required>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label style="color:#f0f0e9" for="stu_id">كود الطالب  </label>
                            <input type="number" class="form-control" autocomplete="off" name="stu_id" placeholder="Enter the student id" id="stu_id" required>
                          </div>
                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label style="color:#f0f0e9" for="payment_date">تاريخ الدفع</label>
                            <input type="date" class="form-control" autocomplete="off" name="payment_date" placeholder="Enter the data" id="payment_date" required>
                          </div>
                        </div>

                        <div class="form-row">
                          
                          <div class="form-group col-md-12">
                            <label style="color:#f0f0e9" for="Expenses_id">المصاريف </label>
                            <select name="Expenses_id" class="form-control" id="Expenses_id" required>
                              <?php
                              $allExpenses = getAllFrom("*", "expenses", "", "Expenses_id", "ASC");
                              foreach ($allExpenses as $Exp) {
                                echo '<option value="' . $Exp['Expenses_id'] . '">' . $Exp['expenses_name'] . '</option>';
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                          <br><br><br> <button type="submit" style="color:#f0f0e9;width: 100%; " class="form-control btn btn-primary">تسجيل</button>
                      </form>
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