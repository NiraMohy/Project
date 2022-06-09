<?php
 include "connectDB.php";

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

 $stmt = $connectDB->prepare("INSERT INTO students
                    (level_id ,dep_id ,full_name ,Acceptance_type ,address  ,Nationality
                    ,gender,Date_of_Birth ,National_ID ,Educational_Qualification ,stu_phone)

VALUES(:xlev , :xdep , :xfam , :xacc , :xadd ,  :xnat ,:xgen , :xdate , :xnatid , :xecu, :xstuph ) ");
      $stmt->execute(array(
        'xlev'     => $_POST['level'],
        'xdep'     => $_POST['dep'],
        'xfam'     => $_POST['full_name'],
        'xacc'     => $_POST['Acceptance_type'],
        'xadd'     => $_POST['address'],
        'xnat'     => $_POST['nationality'],
        'xgen'     => $_POST['gender'],
        'xdate'   => $_POST['date_of_birth'],
        'xnatid'   => $_POST['national_id'],
        'xecu'      => $_POST['educational_qualification'],
        'xstuph'   => $_POST['stu_phone']
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
                            <label style="color:#f0f0e9" for="full_name">الاسم بالكامل </label>
                            <input type="text" class="form-control" autocomplete="off" name="full_name" placeholder="Enter the full name " id="fristname" required>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label style="color:#f0f0e9">الدفعة </label><br>
                            <input type="radio" class="custom-control-input" id="level1" name="level" value="1" required="required">
                            <label class="custom-control-label" for="level1">الفرقة الاولي</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="custom-control-input" id="level2" name="level" value="2" required="required">
                            <label class="custom-control-label" for="level2">الفرقة الثانية</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="custom-control-input" id="level3" name="level" value="3" required="required">
                            <label class="custom-control-label" for="level3">الفرقة الثالثة</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="custom-control-input" id="level4" name="level" value="4" required="required">
                            <label class="custom-control-label" for="level4">الفرقة الرابعة</label>
                          </div>
                          <div class="form-group col-md-12">
                            <label style="color:#f0f0e9" for="dep">القسم </label>
                            <select name="dep" class="form-control" id="dep" required>
                              <?php
                              $alldeps = getAllFrom("*", "departments", "", "dep_id", "ASC");
                              foreach ($alldeps as $dep) {
                                echo '<option value="' . $dep['dep_id'] . '">' . $dep['dep_name'] . '</option>';
                              }
                              ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-12">
                            <label style="color:#f0f0e9">نوع القبول </label><br>
                            <input type="radio" class="custom-control-input" id="Acceptance_type1" name="Acceptance_type" value="تنسيق" required="required">
                            <label class="custom-control-label" for="Acceptance_type1">تنسيق</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="custom-control-input" id="Acceptance_type2" name="Acceptance_type" value="محول" required="required">
                            <label class="custom-control-label" for="Acceptance_type2">محول</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="custom-control-input" id="Acceptance_type3" name="Acceptance_type" value="وافد" required="required">
                            <label class="custom-control-label" for="Acceptance_type3">وافد</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="custom-control-input" id="Acceptance_type4" name="Acceptance_type" value="اعادة قيد" required="required">
                            <label class="custom-control-label" for="Acceptance_type4">اعادة قيد</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="custom-control-input" id="Acceptance_type5" name="Acceptance_type" value="مفصول" required="required">
                            <label class="custom-control-label" for="Acceptance_type5">مفصول</label>
                          </div>

                          <div class="form-group col-md-6">
                            <label style="color:#f0f0e9"for="address">العنوان </label>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter the address " id="address" name="address" required>
                          </div>

                          
                        </div>


                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label style="color:#f0f0e9">الجنس </label><br>
                            <input type="radio" class="custom-control-input" id="mile" name="gender" value="ذكر" required="required">
                            <label class="custom-control-label" for="mile">ذكر</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" class="custom-control-input" id="femile" name="gender" value="انثي" required="required">
                            <label class="custom-control-label" for="femile">انثي</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          </div>

                          

                          
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label style="color:#f0f0e9" for="Nationality">الجنسية <span class="asterisk"> *</span></label>
                            <input type="text" class="form-control" autocomplete="off" placeholder="Enter the Nationality " id="Nationality" name="nationality" required>
                          </div>
                          <div class="form-group col-md-6">
                            <label style="color:#f0f0e9" for="date_of_birth">تاريخ الميلاد <span class="asterisk"> *</span></label>
                            <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required="required">
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label style="color:#f0f0e9" for="National_ID">الرقم القومي <span class="asterisk"> *</span></label>
                            <input type="text" class="form-control" autocomplete="off" name="national_id" placeholder="Enter the National ID" id="National_ID" required>
                          </div>
                          
                          <div class="form-group col-md-6">
                            <label style="color:#f0f0e9" for="educational_qualification">المؤهل الدراسي <span class="asterisk"> *</span></label>
                            <select name="educational_qualification" class="form-control" id="educational_qualification">
                              <?php //للاختصار
                              $eq1 = "الثانوية العامة بشعبتيها العلمى والأدبى وما يعادلها من الشهادات العربية والأجنبية.";
                              $eq2 = " الثانوية التجارية نظام 5 سنوات أو 3 سنوات.";
                              $eq3 = "الثانوية الصناعية نظام 3 أو 5 سنوات";
                              $eq4 = " دبلوم المعاهد الفنية الصناعية.";
                              $eq5 = "دبلوم المعاهد الفنية التجارية.";
                              $eq6 = "دبلوم المعاهد الفنية التجارية شعبة الحاسب الآلى للالتحاق بالفرقة الثانية مباشرة.";
                              $eq7 = "الثانوية الفنية للادارة والخدمات ومدارس الأورمان نظام 3 سنوات.";
                              $eq8 = "دبلوم المعاهد الفنية التجارية ومعاهد السكرتارية الفوق متوسطة والثانوية التجارية نظام 5 سنوات (للالتحاق بالفرقة الثانية مباشرة).";
                              $eq9 = "حالات استنفاذ مرات الرسوب للفرقة الأولى من الكليات غير المناظرة.";
                              $eq10 = "التحويلات من الكليات والمعاهد المناظرة والغير مناظرة لراغبى التحويل."; ?>
                              <option value="<?php echo $eq1; ?>"><?php echo $eq1; ?></option>
                              <option value="<?php echo $eq2; ?>"><?php echo $eq2; ?></option>
                              <option value="<?php echo $eq3; ?>"><?php echo $eq3; ?></option>
                              <option value="<?php echo $eq4; ?>"><?php echo $eq4; ?></option>
                              <option value="<?php echo $eq5; ?>"><?php echo $eq5; ?></option>
                              <option value="<?php echo $eq6; ?>"><?php echo $eq6; ?></option>
                              <option value="<?php echo $eq7; ?>"><?php echo $eq7; ?></option>
                              <option value="<?php echo $eq8; ?>"><?php echo $eq8; ?></option>
                              <option value="<?php echo $eq9; ?>"><?php echo $eq9; ?></option>
                              <option value="<?php echo $eq10; ?>"><?php echo $eq10; ?></option>
                            </select>
                          </div>

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label style="color:#f0f0e9" for="stu_phone">هاتف الطالب</label>
                              <input type="text" class="form-control" autocomplete="off" name="stu_phone" placeholder="Enter The phone" id="stu_phone">
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
	</section>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>