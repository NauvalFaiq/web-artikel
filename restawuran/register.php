<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
?>

<title>REGISTER</title>
<div align='center'>
  <form action="registerprocess.php" method="post">
  <table>
  <tbody>
  <tr><td colspan="2" align="center"><h1>new list</h1></td></tr>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="right"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Already have an account? <a href="login.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>