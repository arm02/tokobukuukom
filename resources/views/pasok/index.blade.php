@extends('layouts.home')
@section('title')
List Pasok
@endsection
@section('content')
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
    <th style="text-align: center;">Stok</th>
    <th style="text-align: center;">Harga Pokok</th>
    <th style="text-align: center;">Harga Jual</th>
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
    <td style="text-align: center;">{{$key->stok}}</td>
    <td style="text-align: center;">{{$key->harga_pokok}}</td>
    <td style="text-align: center;">{{$key->harga_jual}}</td>
    <td style="text-align: center;">{{$key->ppn}}</td>
    <td style="text-align: center;">{{$key->diskon}}</td>
    <td style="text-align: center;">
      <a class="btn btn-success fa fa-plus-square" 
    href="{{url('pasok/add/'.$key->id)}}"></a>
    </td>

    </tr>
    @endforeach
  </tbody>
  </table>
</div>
</div>
</div>
@endsection