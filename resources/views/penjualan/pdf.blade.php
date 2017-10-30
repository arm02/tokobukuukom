<!DOCTYPE html>
  <html>
  <head>
    <title>Penjualan - Laporan</title>
  </head>
  <body>
  <?php
  $i = 1;
  ?>
  <h1>Laporan Penjualan</h1>
  @foreach($penjualan as $key)
    <hr>
    <h5>No : {{$i++}}</h5>
    <h5>ID Buku : {{$key->id_buku}}</h5>
    <h5>ID Kasir : {{$key->id_kasir}}</h5>
    <h5>Jumlah : {{$key->jumlah}}</h5>
    <h5>Total : {{$key->total}}</h5>

    <hr>
    @endforeach
  
  </body>
  </html>