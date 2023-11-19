<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
</head>
<body>
@extends('layouts.navbar')

@section('content')
    

<div class="container">
        <br>
        <br>
        <h2 style="text-align: center">{{$Judul}}</h2>
        <br>
        <br>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TANGGAL</th>
      <th scope="col">NIK</th>
      <th scope="col">LAPORAN</th>
      <th scope="col">FOTO</th>
      <th scope="col">STATUS</th>
      <th scope="col">UBAH</th>
      
      
    
    </tr>
  </thead>
  
  <tbody>
    @foreach ($pengaduan as $pengaduan)
    <tr>
      <td>{{$pengaduan->id_pengaduan}}</td>
      <td>{{$pengaduan->tgl_pengaduan}}</td>
      <td>{{$pengaduan->nik}}</td>
      <td>{{$pengaduan->isi_laporan}}</td>
      <td> <img src='{{asset("storage/image/" .$pengaduan->foto)}}' width= "140px" style= "border-radius: 15px"/></td>
      <td>{{$pengaduan->status}}</td>
      <td>
        <a href="Update/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-success">update</button></a>
        <a href="hapus_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-success">hapus </button></a>
        <a href="detail_pengaduan/{{$pengaduan->id_pengaduan}}"><button type="button" class="btn btn-outline-success">detail</button></a>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection
</body>
</html>