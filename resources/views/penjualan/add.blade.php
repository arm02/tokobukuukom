@extends('layouts.penjualan')
@section('title')
Transaksi
@endsection
@section('content')
<div class="container">
<div class="row">
  <br>
  <a href="{{url('penjualan')}}">
  <button class="btn btn-success">
    <i class="fa fa-sign-out"></i>
  &nbsp;Kembali ke menu penjualan</button>
  </a>
  <center>
<h3>Ber-Transaksi Dengan saya , {{Auth::user()->name}}</h3>
  </center>
<form method="POST" action="{{url('penjualan/save')}}">
  
  <label for="id_buku">Nama Buku</label>
  <input type="text" name="buku" class="form-control" value="{{$buku->judul}}" disabled>
  <input type="hidden" name="id_buku" value="{{$buku->id}}">
  <label for="Harga" onchange="calculateTax()">Harga</label>
  <input type="number" name="harga" class="form-control" id="Harga" value="{{$buku->harga_jual}}" disabled>
  <label for="Harga" onchange="calculateTax()">PPN</label>
  <input type="number" name="ppn" class="form-control" id="Ppn" value="{{$buku->ppn}}" disabled>
  <label for="Harga" onchange="calculateTax()">Diskon</label>
  <input type="number" name="diskon" class="form-control" id="Diskon" value="{{$buku->diskon}}" disabled>

  <label for="Jumlah" onchange="calculateTax()">Jumlah</label>
  <input type="number" name="jumlah" class="form-control" id="Jumlah">
  <br>
  <button type="button" onclick="calculateTax()" class="btn btn-success pull-right">
  <i class="fa fa-meetup"></i>
  Jumlahkan</button>
  <br>
  <br>
  <label for="total">Total</label>
  <input class="form-control" type="number" id="Total" name="total" Size=8  placeholder="Rp." >

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <br>
    <center>
    <button style="width: 200px;" type="submit" class="btn btn-success pull-right" onclick="return confirm('sudah yakin dengan transaksi ini ?')">
      <i class="fa fa-save"></i>
    &nbsp;Save</button>
    </center>

</form>
<br>
 </div>
 </div>

<script>
function calculateTax() {

  var Harga = document.getElementById("Harga").value;
  var Ppn = document.getElementById("Ppn").value;
  var Diskon = document.getElementById("Diskon").value;
  var Jumlah = document.getElementById("Jumlah").value;
  var totalTax = Harga * Jumlah;
  var ppnTax = totalTax / Ppn;
  var diskonTax = totalTax / Diskon;

  var test = totalTax + ppnTax - diskonTax;

document.getElementById("Total").value=test;
}
</script>

@endsection