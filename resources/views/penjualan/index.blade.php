@extends('layouts.penjualan')

@section('title')
Penjualan
@endsection
@section('content')
<br>
<a href="{{url('logout')}}" class="btn btn-warning" style="margin-left: 1100px;"><i class="fa fa-sign-out"></i>&nbsp;Keluar</a>
@if(Auth::user()->role==2)
<a href="{{url('/')}}" class="btn btn-primary" ><i class="fa fa-sign-in"></i>&nbsp;Admin</a>
@endif
<center>
<h3>Selamat Datang</h3>
<h2>Dengan saya , {{Auth::user()->name}}</h2>
<form class="pure-form" role="form" method="get" 
 action="{{ url('penjualan/search') }}">
&nbsp;&nbsp;&nbsp;
<input type="text" class="form-control" name="query" placeholder="Cari buku yang ingin dijual ..." 
 id="cari" style="width: 250px;text-align: center;">
</form>
</center>
<br>
<div class="container">
<div class="row">
<div class="panel panel-default">
  <table class="table">
  <thread>
  <tr>
    <th style="text-align: center;">Judul</th>
    <th style="text-align: center;">No ISBN</th>
    <th style="text-align: center;">Tahun</th>
    <th style="text-align: center;">Harga</th>
    <th style="text-align: center;">PPN</th>
    <th style="text-align: center;">Diskon</th>
    <th style="text-align: center;">Action</th>
    </tr>
  </thread>
  <tbody>
    @foreach($buku as $key)
  <tr>
    <td style="text-align: center;">{{$key->judul}}</td>
    <td style="text-align: center;">{{$key->noisbn}}</td>
    <td style="text-align: center;">{{$key->tahun}}</td>
    <td style="text-align: center;">{{$key->harga_jual}}</td>
    <td style="text-align: center;">{{$key->ppn}}</td>
    <td style="text-align: center;">{{$key->diskon}}</td>
    <td style="text-align: center;">
      <a class="btn btn-success" href="{{url('penjualan/add/'.$key->id)}}">
    <i class="fa fa-handshake-o"></i>
    &nbsp;Pilih</a>
    </td>

    </tr>
    @endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection