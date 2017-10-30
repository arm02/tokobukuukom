@extends('layouts.home')
@section('title')
Edit Buku
@endsection
@section('content')

<div class="container">
<div class="row">
<form method="POST" action="{{url('buku/update')}}">
	
	<div class="form-group">
      <label for="nama_barang">Judul</label>
     <input id="judul" type="text" 
    class="form-control" name="judul" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Judul')"
    oninput="setCustomValidity('')" value="{{$buku->judul}}">
    </div>
    <div class="form-group">
      <label for="nama_barang">No ISBN</label>
     <input id="noisbn" type="number" 
    class="form-control" name="noisbn" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi No ISBN')"
    oninput="setCustomValidity('')" value="{{$buku->noisbn}}">
    </div>
    <div class="form-group">
      <label for="nama_barang">Penulis</label>
     <input id="penulis" type="text" 
    class="form-control" name="penulis" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Penulis')"
    oninput="setCustomValidity('')" value="{{$buku->penulis}}">
    </div>
    <div class="form-group">
      <label for="nama_barang">Penerbit</label>
     <input id="penerbit" type="text" 
    class="form-control" name="penerbit" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Penerbit')"
    oninput="setCustomValidity('')" value="{{$buku->penerbit}}">
    </div>
    <div class="form-group">
      <label for="nama_barang">Tahun</label>
     <input id="tahun" type="number" 
    class="form-control" name="tahun" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Tahun')"
    oninput="setCustomValidity('')" value="{{$buku->tahun}}">
    </div>
    <div class="form-group">
      <label for="nama_barang">Harga Pokok</label>
     <input id="harga_pokok" type="number" 
    class="form-control" name="harga_pokok" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Harga Pokok')"
    oninput="setCustomValidity('')" value="{{$buku->harga_pokok}}">
    </div>
    <div class="form-group">
      <label for="nama_barang">Harga Jual</label>
     <input id="harga_jual" type="number" 
    class="form-control" name="harga_jual" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Harga Jual')"
    oninput="setCustomValidity('')" value="{{$buku->harga_jual}}">
    </div>
    <div class="form-group">
      <label for="nama_barang">PPN</label>
     <input id="ppn" type="number" 
    class="form-control" name="ppn" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi PPN')"
    oninput="setCustomValidity('')" value="{{$buku->ppn}}">
    </div>
    <div class="form-group">
      <label for="nama_barang">Diskon</label>
     <input id="diskon" type="number" 
    class="form-control" name="diskon" required="Harap Masukan" oninvalid="this.setCustomValidity('Tolong Isi Diskon')"
    oninput="setCustomValidity('')" value="{{$buku->diskon}}">
    </div>
    <input type="hidden" name="id" value="{{$buku->id}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
    <button style="width: 200px;" type="submit" class="btn btn-success pull-right">Save</button>
    <br>
    <br>
    </center>
</form>
<br>
 </div>
 </div>

@endsection