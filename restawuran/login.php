<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title>Form Login</title>
<div align='center'>
  <form action="loginproccess.php" method="post">
  <h1>Masuk</h1>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Login" type="submit"> <input value="Cancel" type="Reset"></td></tr>
  <tr><td colspan="2" align="center">Create account. <a href="register.php"><b>Register</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>