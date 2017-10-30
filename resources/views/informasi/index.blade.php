@extends('layouts.home')
@section('title')
Informasi
@endsection
@section('content')
<div class="container">
<div class="row">
<center>
<a href="{{url('informasi/add')}}">
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
    <th style="text-align: center;">Isi</th>
    <th style="text-align: center;">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($informasi as $key)
  <tr>
    <td style="text-align: center;">{{$key->judul}}</td>
    <td style="text-align: center;">{{substr(strip_tags($key->isi),0,100)}} . . .</td>
    <td>
    <a class="btn btn-success fa fa-pencil-square-o" href="{{url('informasi/edit/'.$key->id)}}"></a>
    <a class="btn btn-warning fa fa-trash-o" href="{{url('informasi/delete/'.$key->id)}}" onclick="return confirm('are u sure to delete ?')"></a>
    </td>

    </tr>
    @endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection