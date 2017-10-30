<!DOCTYPE html>
  <html>
  <head>
    <title>Distributor - Laporan</title>
  </head>
  <body>
  <?php
  $i = 1;
  ?>
  <h1>Laporan Distributor</h1>
  @foreach($dist as $key)
    <hr>
    <h5>No : {{$i++}}</h5>
    <h5>Nama Distributor : {{$key->nama_distributor}}</h5>
    <h5>Alamat : {{$key->alamat}}</h5>
    <h5>Telepon : {{$key->telepon}}</h5>
    <h5>Dibuat : {{$key->created_at}}</h5>

    <hr>
    @endforeach
  
  </body>
  </html>