@extends('layouts.home')
@section('title')
Add Pasok
@endsection
@section('content')

<div class="container">
<div class="row">
<form method="POST" action="{{url('pasok/save')}}">
  <center>
  <label style="font-size: 30px;">Pasok Stok Buku ,{{$buku2->judul}}</label>
  </center>
  <div class="form-group">
    <label for="nama_barang">Nama Distributor</label>
    <select class="form-control" name="id_distributor" required="Harap Masukan" oninvalid="this.setCustomValidity('Isi Nama Distributor')"
    oninput="setCustomValidity('')">
      <option selected disabled></option>
      @foreach($dist as $key)
      <option value="{{$key->id}}">{{$key->nama_distributor}}</option>
      @endforeach
    </select>
    </div>
      <input type="hidden" name="id_buku" value="{{$buku2->id}}">
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
     <input id="jumlah" type="number" 
    class="form-control" name="jumlah" required="Harap Masukan" oninvalid="this.setCustomValidity('Masukan Jumlah yang akan dibeli disini')"
    oninput="setCustomValidity('')">
    </div>
    <input type="hidden" name="id" value="{{$buku2->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
    <button style="width: 200px;" type="submit" class="btn btn-success pull-right">Save</button>
    </center>
</form>
<br>
 </div>
 </div>

@endsection