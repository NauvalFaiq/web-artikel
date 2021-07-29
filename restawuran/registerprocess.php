<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = $_POST['password'];
   $sql = "SELECT * FROM user WHERE username = '$username'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username cant be used! <a href=register.php'>Back</a></div>";
   } else {
     if(!$username || !$pass) {
       echo "<div align='center'>Fill! <a href='register.php'>Back</a>";
     } else {
       $data = "INSERT INTO user VALUES (NULL, '$username', '$pass')";
       $simpan = $db->query($data);
       if($simpan) {
         echo "<div align='center'>Successful, Silahkan <a href='login.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>