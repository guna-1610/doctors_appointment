<?php
session_start();

 

require('./comnpages/config.php'); 
$doctor_id= $_SESSION['doctor_id'];
if($doctor_id>0)
{

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

    <title>Admin :: View Doctor</title>

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
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i>View Doctor</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>doctors</li>
						<li><i class="fa fa-square-o"></i>View all Doctors</li>
						<li><i class="fa fa-square-o"></i>View Doctor</li>
					</ol>
				</div>
			<div class="col-lg-8">
              <!-- page start-->
              
			<div class="box box-primary"  >
          
						<?php	
			  // $update_id=$_REQUEST['cid'];
			$c_select = mysqli_query($conn,"SELECT * FROM doctor_list WHERE did='$doctor_id'");
			$data_row = mysqli_fetch_array($c_select);

			 
					// $sql1="UPDATE doctor_list SET isread=1";
					// $sql11=mysqli_query($conn,$sql1);
			 
				?>
				<div bgcolor="white"  style=" box-shadow:5px 3px 12px black;"  >
				
						 <table id="example1" class="table table-bordered table-striped">
		               			<caption> Personal  Details </caption>	
			
					                <tr>
					                  <th> Doctors Name</th>	<td> 	<?php echo $data_row['name']; ?> </td>
									</tr>
									
									<tr>
					                  <th>Speciality</th>	<td> <?php echo $data_row['speciality']; ?> </td>
									</tr>
									
									<tr>				  
					                  <th>Fees</th><td> <?php echo $data_row['fees']; ?> </td>  			  
					                </tr>
									 
									 
									<tr>
									  <th>Description</th> <td> <?php echo $data_row['description']; ?> </td> 
									</tr>
						 </table>
				 </div>
				 
               
			 
				</div>
            </div>


            <div class="col-lg-4"  >
            	<div class="box box-primary"   >
           			<div bgcolor="white"  style=" box-shadow:5px 3px 12px black;"  >
           				<img src="../images/Doctors/<?php echo $data_row['image']; ?>" alt="<?=$data_row['name']?>' Image	" class="col-lg-12" >
									
											 
					</div> 	 
				</div> 
            </div>
           </div>
              <!-- page end-->
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


<?php


}else{
	 echo "<script type='text/javascript'>
											 
						                    window.location = '../index.php?error_invalidUSER';
						                   </script>";
						 	



}


?>