<!DOCTYPE html>
  <html>
  <head>
    <title>Pasok - Laporan</title>
  </head>
  <body>
  <?php
  $i = 1;
  ?>
  <h1>Laporan Pasok</h1>
  @foreach($pasok as $key)
    <hr>
    <h5>No : {{$i++}}</h5>
    <h5>ID Distributor : {{$key->id_distributor}}</h5>
    <h5>ID Buku : {{$key->id_buku}}</h5>
    <h5>Jumlah Stok : {{$key->jumlah}}</h5>
    <h5>Dibuat : {{$key->created_at}}</h5>

    <hr>
    @endforeach
  
  </body>
  </html>