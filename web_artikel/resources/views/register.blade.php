<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM REGISTER</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body{
        background-color:#6610f2;
    }
</style>
<body>
    <br>
    <br>
    <br>
<center><h1><b>SIGN UP</b></h1>
    <br>
    <br>
<div class="card" style="width: 30rem;">
<br>
<form action="login.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-9">
      <label for="namalengkap">Masukkan Nama Lengkap</label>
      <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Nama lengkap">
    </div>
    <div class="form-group col-md-9">
      <label for="tanggallahir">Masukkan Tanggal Lahir</label>
      <input type="text" class="form-control" id="tanggallahir" name="tanggallahir" placeholder="Tanggal lahir">
    </div>
  </div>
  <div class="form-group col-md-9">
    <label for="inputemail">Masukkan Email</label>
    <input type="email" class="form-control" id="inputemail" name="inputemail" placeholder="Email">
  </div>
  <div class="form-group col-md-9">
    <label for="inputpw">Masukkan Password</label>
    <input type="password" class="form-control" id="inputpw" name="inputpw" placeholder="Password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
<br>
</div></center>

</body>
</html>