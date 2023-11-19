<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>
<body>
    @include('layouts.navpetugas')
    <div class="container">
        <br><br>
       <h2 style="text-align: center">{{$df}}</h2>
       <br><br>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">nik</th>
      <th scope="col">Nama</th>
      <th scope="col">nomer telpon</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach ($masyarakat as $masyarakat)
    <tr>
      <td>{{$masyarakat->nik}}</td>
      <td>{{$masyarakat->nama}}</td>
      <td>{{$masyarakat->telp}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>