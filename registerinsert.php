<?php

require('./comnpages/config.php');
            
	        if(isset($_POST['btn_reg']))
			{
				$name=$_POST['name'];
				$email=$_POST['email'];
				$pass=$_POST['pass'];
				$utype=$_POST['utype'];
				
			
			
			
	echo $sql="INSERT INTO tbl_logindetails(user_name,user_email,user_pass,user_type) 
	VALUES ('$name','$email','$pass','$utype')";				
	$result=mysqli_query($conn,$sql);
	
	header('Location:login.php');
			}
	 


?>