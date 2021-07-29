<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Login Succcess</title>
<div align='center'>
   Welcome <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>