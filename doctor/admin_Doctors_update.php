	<?php
  session_start();
require('./comnpages/config.php');

$doctor_id=$_SESSION['doctor_id'];

$sql="SELECT * FROM doctor_list WHERE did= '$doctor_id' ";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin :: Update Doctors</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
       <!--header Start-->
      <?php require('./comnpages/header.php'); ?>
	  <!--header end-->

      <!--sidebar start-->
	   <?php require('./comnpages/side.php'); ?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-md-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i>Update Doctor</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Doctor</li>
						<li><i class="fa fa-square-o"></i>Update Doctor</li>
					</ol>
				</div>
				<div class="col-md-8">
              <!-- page start-->

              <?php


 
$result = mysqli_query($conn, $sql); 

    $row = mysqli_fetch_assoc($result);
       
    

              ?>
              
			 
	   
				<form  action="./model/admin_model_doctors_update.php" method="post">
			   
				 
                 <b>Name:</b>
				  <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" hidden >
				<b>Speciality :</b>
				<input type="text" name="speciality" class="form-control" value="<?php echo $row['speciality']; ?>">
				<b>Fees :</b>
				<input type="text" name="fees" class="form-control" value="<?php echo $row['fees']; ?>">			
				<b>Description :</b>
        <textarea  name="description" class="form-control"  rows="20"  ><?php echo $row['description']; ?></textarea>
				 						
						<br><br><br>
			  <!-- /.box-body -->
			    <div class="box-footer">
					 
                     <button type="submit" class="btn btn-success" name="btn_sub" >Update</button>
					
					 
                  </div>
			   </form>
              <!-- page end-->
			  </div>
			</div>
          </section>
      </section>
      <!--main content end-->
      <!-----Credit Start ------>
		  <?php include("./comnpages/credit.php");?>
          <!-----Credit End ------>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
