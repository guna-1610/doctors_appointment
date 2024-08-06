<?php
session_start();
//ob_start();
session_unset();
//unset($_SESSION['emailid']);

header('location:index.php');
//echo '<script type="text/javascript">
         //window.location = "./testlogin.html";
     // </script>';
?>