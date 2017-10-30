<!DOCTYPE html>
  <html>
  <head>
    <title>Buku - Laporan</title>
  </head>
  <body>
  <?php
  $i = 1;
  ?>
  <h1>Laporan Buku</h1>
  @foreach($buku as $key)
    <hr>
    <h5>No : {{$i++}}</h5>
    <h5>Judul : {{$key->judul}}</h5>
    <h5>No ISBN : {{$key->noisbn}}</h5>
    <h5>Penulis : {{$key->penulis}}</h5>
    <h5>Penerbit : {{$key->penerbit}}</h5>
    <h5>Tahun : {{$key->tahun}}</h5>
    <h5>Stok : {{$key->stok}}</h5>
    <h5>Harga Pokok : {{$key->harga_pokok}}</h5>
    <h5>Harga Jual : {{$key->harga_jual}}</h5>
    <h5>PPN : {{$key->ppn}}</h5>
    <h5>Diskon : {{$key->diskon}}</h5>
    <h5>Dibuat : {{$key->created_at}}</h5>

    <hr>
    @endforeach
  
  </body>
  </html>