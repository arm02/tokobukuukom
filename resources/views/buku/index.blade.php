@extends('layouts.home')
@section('title')
Buku
@endsection
@section('content')
<div class="container">
<div class="row">
<center>
<a href="{{url('buku/add')}}">
<button class="btn btn-success pull-right fa fa-plus-square" style="width: 70px"></button>
<br>
</a>
</center>
<br>

<div class="panel panel-default">
  <table class="table">
  <thead class="thead-dark">
  <tr>
  	<th style="text-align: center;">Judul</th>
  	<th style="text-align: center;">No ISBN</th>
  	<th style="text-align: center;">Penulis</th>
  	<th style="text-align: center;">Penerbit</th>
  	<th style="text-align: center;">Tahun</th>
  	<th style="text-align: center;">Stok</th>
  	<th style="text-align: center;">Harga Pokok</th>
  	<th style="text-align: center;">Harga Jual</th>
  	<th style="text-align: center;">PPN</th>
  	<th style="text-align: center;">Diskon</th>
  	<th style="text-align: center;">Action</th>
  	</tr>
  </thead>
  <tbody>
  	@foreach($buku as $key)
  <tr>
  	<td style="text-align: center;">{{$key->judul}}</td>
  	<td style="text-align: center;">{{$key->noisbn}}</td>
  	<td style="text-align: center;">{{$key->penulis}}</td>
  	<td style="text-align: center;">{{$key->penerbit}}</td>
  	<td style="text-align: center;">{{$key->tahun}}</td>
  	<td style="text-align: center;">{{$key->stok}}</td>
  	<td style="text-align: center;">{{$key->harga_pokok}}</td>
  	<td style="text-align: center;">{{$key->harga_jual}}</td>
  	<td style="text-align: center;">{{$key->ppn}}</td>
  	<td style="text-align: center;">{{$key->diskon}}</td>
  	<td>
    <a class="btn btn-success fa fa-pencil-square-o" href="{{url('buku/edit/'.$key->id)}}"></a>
  	<a class="btn btn-warning fa fa-trash-o" href="{{url('buku/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"></a>
    </td>

  	</tr>
  	@endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection