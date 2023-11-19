<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
      body{
        font-family: 'Roboto', sans-serif;
      }
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}

    </style>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #BE3144">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me">
          <li>
            <a class="nav-link active" aria-disabled="true" href="/halpetugas" style="font-size: 20px ;"><b style=" color:#FFFF ">Pengaduan</b><span >masyarakat</span></a>
          </li>
        </ul>
<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
  {{-- @auth --}}
    <li class="nav-item">
        <a class="nav-link active" href="/home" tabindex="-1" aria-disabled="true"><b>home</b></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="/isi_pengaduan" tabindex="-1" aria-disabled="true"><b>buat laporan</b></a>
    </li>
   
    <li class="nav-item">
        <a class="nav-link active" href="/logout" tabindex="-1" aria-disabled="true"><b>logout</b></a>
    </li>
{{-- @endauth --}}

</ul>

        <ul class="navbar-nav ml-auto">
      </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>