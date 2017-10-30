@extends('layouts.home')
@section('title')
Add Distributor
@endsection
@section('content')

<div class="container">
<div class="row">
<form method="POST" action="{{url('informasi/save')}}">
	
	<div class="form-group">
      <label for="nama_distributor">Judul</label>
     <input id="nama_distributor" type="text" 
    class="form-control" name="judul" required="Harap Masukan" oninvalid="this.setCustomValidity('Isi Judul Disini')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="alamat">Isi</label>
     <textarea id="alamat" type="text" 
    class="form-control" name="isi" required="Harap Masukan" oninvalid="this.setCustomValidity('Isi Informasi Disini')"
    oninput="setCustomValidity('')"></textarea>
    </div>

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