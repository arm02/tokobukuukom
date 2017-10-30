@extends('layouts.home')
@section('title')
Edit Distributor
@endsection
@section('content')

<div class="container">
<div class="row">
<form method="POST" action="{{url('distributor/update')}}">
	
	<div class="form-group">
      <label for="nama_distributor">Nama Distributor</label>
     <input id="nama_distributor" type="text" 
    class="form-control" name="nama_distributor" required="Harap Masukan" oninvalid="this.setCustomValidity('Isi Nama Distributor')"
    oninput="setCustomValidity('')" value="{{$dist->nama_distributor}}">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
     <textarea id="alamat" type="text" 
    class="form-control" name="alamat" required="Harap Masukan" oninvalid="this.setCustomValidity('Isi Alamat Distributor')"
    oninput="setCustomValidity('')">{{$dist->alamat}}</textarea>
    </div>
    <div class="form-group">
      <label for="telepon">Telepon</label>
     <input id="telepon" type="number" 
    class="form-control" name="telepon" required="Harap Masukan" oninvalid="this.setCustomValidity('Isi Nomor Telepon Distributor')"
    oninput="setCustomValidity('')" value="{{$dist->telepon}}">
    </div>
    <input type="hidden" name="id" value="{{$dist->id}}">
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