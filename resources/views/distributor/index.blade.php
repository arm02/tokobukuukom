@extends('layouts.home')
@section('title')
Distributor
@endsection
@section('content')
<div class="container">
<div class="row">
<center>
<a href="{{url('distributor/add')}}">
<button class="btn btn-success pull-right fa fa-plus-square" style="width: 70px"></button>
<br>
</a>
</center>
<br>

<div class="panel panel-default">
  <table class="table">
  <thread>
  <tr>
  	<th style="text-align: center;">ID Distributor</th>
  	<th style="text-align: center;">Nama Distributor</th>
  	<th style="text-align: center;">Alamat</th>
  	<th style="text-align: center;">Telepon</th>
  	<th style="text-align: center;">Action</th>
  	</tr>
  </thread>
  <tbody>
  	@foreach($dist as $key)
  <tr>
  	<td style="text-align: center;">{{$key->id}}</td>
  	<td style="text-align: center;">{{$key->nama_distributor}}</td>
  	<td style="text-align: center;">{{$key->alamat}}</td>
  	<td style="text-align: center;">{{$key->telepon}}</td>
  	<td style="text-align: center;">
    <a class="btn btn-success fa fa-pencil-square-o" href="{{url('distributor/edit/'.$key->id)}}"></a>
  	<a class="btn btn-warning fa fa-trash-o" href="{{url('distributor/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"></a>
    </td>

  	</tr>
  	@endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection