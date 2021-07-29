<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>Artikel</title>

</head>



<body>

  <div class="container">
    <header class="blog-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <a href="<?= url('/') ?>" style="color: black;"><h2 class="mb-0">Website Artikel Sederhana</h3></a>
        </div>
        <div class="col-3"></div>
        <div class="col-3 d-flex justify-content-end align-items-center">
          <form action="/searchArtikel" method="post" class="d-flex">
            @csrf
            <input class="form-control me-2" type="search" name="judul_artikel" placeholder="Search Artikel" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          
        </div>
        <div class="col-2 d-flex justify-content-end align-items-center">
          &nbsp;
          <a class="btn btn-sm btn-outline-secondary" href="<?= url('/register') ?>">Sign up</a>
          &nbsp;
          <a class="btn btn-sm btn-outline-secondary" href="<?= url('/login') ?>">Login</a>
        </div>
      </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 link-secondary" href="#">BIOGRAFI</a>
        <a class="p-2 link-secondary" href="#">GEOGRAFI</a>
        <a class="p-2 link-secondary" href="#">ILMU</a>
        <a class="p-2 link-secondary" href="#">SEJARAH</a>
        <a class="p-2 link-secondary" href="#">KIMIA</a>
        <a class="p-2 link-secondary" href="#">TEKNOLOGI</a>
        <a class="p-2 link-secondary" href="#">KOMUNITAS</a>
        <a class="p-2 link-secondary" href="#">SENI</a>
      </nav>
    </div>
  </div>


  <br>


  <main class="container">

    <!-- <div class="jumbotron">
      <br>
      <h1 class="display-4 fst-italic"><b>&nbsp;&nbsp;Mana yang Lebih Baik?</h1></b>
      <h1 class="display-4 fst-italic"><b>&nbsp;&nbsp;Imunitas dari Vaksin</h1></b>
      <h1 class="display-4 fst-italic"><b>&nbsp;&nbsp;COVID-19 atau Infeksi</h1></b>
      <h1 class="display-4 fst-italic"><b>&nbsp;&nbsp;Alami</h1></b>


      <p class="lead my-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ketua Perhimpunan Alergi Imunologi Indonesia Profesor Dr</p>
      <p class="lead my-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dr Iris Rengganis, SpPD-KAI, menjelaskan sederhananya</p>
      <p class="lead my-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ada banyak bagian dari sistem imun di dalam tubuh.</p>
      <p class="lead my-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagian-bagian tersebut bekerja sebagai 'tentara'</p>
      <p class="lead my-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mempertahankan tubuh dari serangan...</p>


      <p class="lead">
        &nbsp;&nbsp; <a class="btn btn-primary btn-lg" href="#" role="button">Teruskan Membaca...</a>
      </p>
      <br>

    </div> -->

    <br>



    <div class="row mb-2">
      @foreach ($data as $key => $value)
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Seni</strong>
              <h3 class="mb-0">{{ $value->judul_artikel }}</h3>
              <div class="mb-1 text-muted">{{ $value->tanggal_posting }}</div>
              <a href="#" class="thumbnail">
                <center><img src="{{ asset($value->gambar_artikel) }}" width="50%"></center>
              </a>
              <p class="card-text mb-auto">{{ $value->isi_artikel }}</p>
              <a href="#" class="stretched-link">Teruskan Membaca...</a>
            </div>                  
          </div>
        </div>
      @endforeach
      


      <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Teknologi</strong>
            <h3 class="mb-0">Apple Perkenalkan SignTime untuk Pelanggan Disabilitas Mengakses Bahasa Isyarat</h3>
            <div class="mb-1 text-muted">22 Mei 2021</div>
            <a href="#" class="thumbnail">
              <center><img src="{{ asset('uploads/4.jpg') }}" width="93%"></center>
            </a>
            <p class="mb-auto">Perusahaan teknologi Apple memperkenalkan beberapa fitur perangkat lunak yang semuanya
              dirancang untuk membuat penggunaan...</p>
            <a href="#" class="stretched-link">Teruskan Membaca...</a>
          </div>
        </div>
      </div>
    </div>



</body>

</html>