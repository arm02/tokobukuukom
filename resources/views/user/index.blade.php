@extends('layouts.home')
@section('title')
User
@endsection
@section('content')
<div class="container">
<div class="row">
<center>
<a href="{{url('user/add')}}">
<button class="btn btn-success pull-right fa fa-plus-square" style="width: 70px"></button>
<br>
</a>
</center>
<br>

<div class="panel panel-default">
  <table class="table">
  <thread>
  <tr>
  	<th style="text-align: center;">No</th>
  	<th style="text-align: center;">Nama</th>
  	<th style="text-align: center;">Email</th>
  	<th style="text-align: center;">Alamat</th>
  	<th style="text-align: center;">Telepon</th>
    <th style="text-align: center;">Status</th>
    <th style="text-align: center;">Role</th>
    <th colspan="2" style="text-align: center;">Action</th>
  	</tr>
  </thread>
  <tbody>
  <?php
  $i = 1;
  ?>
  	@foreach($user as $key)
  <tr>
  	<td style="text-align: center;">{{$i++}}</td>
  	<td style="text-align: center;">{{$key->name}}</td>
  	<td style="text-align: center;">{{$key->email}}</td>
  	<td style="text-align: center;">{{$key->alamat}}</td>
    <td style="text-align: center;">{{$key->telepon}}</td>
    <td style="text-align: center;">{{$key->status}}</td>
    <td style="text-align: center;">@if($key->role == 1) Kasir @else($key->role==2) Admin @endif</td>
  	<td style="text-align: center;">
    <a class="btn btn-success fa fa-pencil-square-o" href="{{url('user/edit/'.$key->id)}}"></a>
  	<a class="btn btn-warning fa fa-trash-o" href="{{url('user/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"></a>
    </td>

  	</tr>
  	@endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection