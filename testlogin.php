<?php
if(isset($_POST['btn_login']))
{
require('./comnpages/config.php');

$email=$_POST['email'];
$password=$_POST['password'];
//$user_id=$_POST['user_id'];

echo$sql="SELECT * FROM tbl_logindetails WHERE user_email='$email' AND user_pass='$password'";
	
$data=mysqli_query($conn,$sql);  
	
   if(mysqli_num_rows($data)>0)
	{	

         session_start();
		 
		$row=mysqli_fetch_array($data);
		 
		 $_SESSION['user_id']=$row['user_id'];
		//echo $_SESSION['user_id'];
		header('Location:products.php');
	}
	else
	{
	header('Location:login.php?error=invalidUSER');
	}
}
	
	
	
   //session_start();
  //if()
  //{
         
//$_SESSION['pass']=$pass;
		//header('Location:login.php');
  //}
?>   