@extends('layouts.home')
@section('title')
Laporan
@endsection
@section('content')
<div class="container">
	<div class="row">

	<div class="jumbotron" style="width: 1150px;">
  <h1>Laporan Distributor</h1><br>
  <p>
  	<a class="btn btn-success btn-lg pull-right" href="{{url('distributor/pdf')}}" role="button">
  	<i class="fa fa-sign-in"></i>
  	Lihat Disini!</a>
  </p>
</div>

<div class="jumbotron" style="width: 1150px;">
  <h1>Laporan Buku</h1><br>
  <p>
  	<a class="btn btn-success btn-lg pull-right" href="{{url('buku/pdf')}}" role="button">
  	<i class="fa fa-sign-in"></i>
  	Lihat Disini!</a>
  </p>
</div>

<div class="jumbotron" style="width: 1150px;">
  <h1>Laporan Pasok</h1><br>
  <p>
  	<a class="btn btn-success btn-lg pull-right" href="{{url('buku/pdf')}}" role="button">
  	<i class="fa fa-sign-in"></i>
  	Lihat Disini!</a>
  </p>
</div>


<div class="jumbotron" style="width: 1150px;">
  <h1>Laporan User</h1><br>
  <p>
  	<a class="btn btn-success btn-lg pull-right" href="{{url('user/pdf')}}" role="button">
  	<i class="fa fa-sign-in"></i>
  	Lihat Disini!</a>
  </p>
</div>

<div class="jumbotron" style="width: 1150px;">
  <h1>Laporan Penjualan</h1><br>
  <p>
  	<a class="btn btn-success btn-lg pull-right" href="{{url('laporan/penjualan/pdf')}}" role="button">
  	<i class="fa fa-sign-in"></i>
  	Lihat Disini!</a>
  </p>
</div>
	

	</div>
</div>
@endsection