<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('layouts.navpetugas')
<div class="container">
   <center> <h1>TANGGAPI PENGADUAN</h1> </center>
    <h2>isi pengaduan: {{$pengaduan->isi_laporan}}</h2>
    <img src='{{asset("storage/image/" .$pengaduan->foto)}}' width= "140px" style= "border-radius: 15px"/> 
    <p>tanggal pengaduan:  {{$pengaduan->tgl_pengaduan}} </p>
    <form method="post" enctype="multipart/form-data">
    <label for="exampleFormControlTextarea1" class="form-label">tanggapi</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" ></textarea >
      @error('isi_laporan')
          <div>{{ $message }}</div>
      @enderror
    <select name="status">
        <option>proses</option>
        <option>selesai</option>
</select>   
<button type="submit" class="btn btn-outline-dark">kirim</button>


</div>
</body>
</html>