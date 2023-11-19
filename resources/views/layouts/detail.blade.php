<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset("bootstrap-5.3.1-dist\css\bootstrap.min.css")}}>
</head>
<body>
@include('layouts.navbar')

@section('content')
<div class="container">
       
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">LAPORAN</th>
      <th scope="col">FOTO</th>
      <th scope="col">STATUS</th>   
    </tr>
  </thead>
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td> <img src='{{asset("storage/image/" .$pengaduan->foto)}}' width= "140px" style= "border-radius: 15px"/></td>
      <td>{{$pengaduan->status}}</td>
      @endforeach
</tbody>
</table>
</body>
</div>
</html>