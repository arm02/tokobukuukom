<!DOCTYPE html>
  <html>
  <head>
    <title>Struk Pembelian</title>
  </head>
  <body>
  <?php
  $i = 1;
  ?>
  <?php
  $a = \App\Buku::find($penjualan->id_buku);
  ?>
  <h1>Struk Pembelian</h1>
    <hr>
    <h5>No : {{$i++}}</h5>
    <h5>Nama Buku : {{$a->judul}}</h5>
    <h5>Nama Kasir : {{Auth::user()->name}}</h5>
    <h5>Jumlah : {{$penjualan->jumlah}} Pcs</h5>
    <h5>Total : Rp.{{$penjualan->total}}</h5>

    <hr>
  
  </body>
  </html>