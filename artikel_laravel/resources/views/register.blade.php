<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
<div class="card" style="width: 30rem; height: auto; padding: 20px;">
<br>
<form action="<?= url('/processRegister') ?>" method="POST">
    @csrf <!-- {{ csrf_field() }} -->
  <div class="form-row">
    <div class="form-group col-md-9">
      <label for="namalengkap">Masukkan Nama Lengkap</label>
      <input type="text" class="form-control" id="namalengkap" name="nama" placeholder="Nama lengkap" required>
    </div>
    <div class="form-group col-md-9">
      <label for="tanggallahir">Masukkan Tanggal Lahir</label>
      <input type="date" class="form-control" id="tanggallahir" name="tanggal_lahir" placeholder="Tanggal lahir" required>
    </div>
  </div>
  <div class="form-group col-md-9">
    <label for="inputemail">Masukkan Email</label>
    <input type="email" class="form-control" id="inputemail" name="email" placeholder="Email" required>
  </div>
  <div class="form-group col-md-9">
    <label for="inputpw">Masukkan Password</label>
    <input type="password" class="form-control" id="inputpw" name="password" placeholder="Password" required>
    <input type="hidden" class="form-control" id="inputpw" name="role" value="user" placeholder="Password" required>
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Register</button>
  <a href="<?= url('/') ?>" class="btn btn-warning">Back To Home</a>
</form>
<br>
</div></center>

</body>
</html>