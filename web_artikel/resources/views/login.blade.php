<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    h1{
        text-align:center;
    }
    body{
        background-color:#FFDE59;
    }
</style>
<body>
    <br>
    <br>
    <br>
<h1><b>SEBELUM MENULIS, LOG IN TERLEBIH DAHULU</b></h1>
    <br>
    <br>
    <br>
<center><div class="card" style="width: 30rem;" >
<br>
<br>
<form action="menulis.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-9">
        <label for="inputemail">Masukkan Email</label>
        <input type="email" class="form-control" id="inputemail" name="inputemail" placeholder="Email">
    </div>
    <div class="form-group col-md-9">
        <label for="inputpw">Masukkan Password</label>
        <input type="password" class="form-control" id="inputpw" name="inputpw" placeholder="Password">
    </div>
  </div>
  
  <br>
  <br>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
<br>
<p>Belum punya akun?
    <a href="register.php">sign up</a>
</p>
</div></center>

</body>
</html>