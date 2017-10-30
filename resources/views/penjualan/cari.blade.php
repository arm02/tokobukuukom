@extends('layouts.penjualan')

@section('content')
<center>
<form class="pure-form" role="form" method="get" 
 action="{{ url('penjualan/search') }}">
&nbsp;&nbsp;&nbsp;
<input type="text" class="form-control" name="query" placeholder="Cari bank" 
 id="cari" style="width: 250px;">
<button type="submit" class="btn btn-primary">Cari</button>
</form>
</center>
<br>
<div class="container">
<div class="row">
<div class="panel panel-default">
  <table class="table">
  <thread>
  <tr>
    <th>Judul</th>
    <th>No ISBN</th>
    <th>Tahun</th>
    <th>Harga</th>
    <th>PPN</th>
    <th>Diskon</th>
    <th>Action</th>
    </tr>
  </thread>
  <tbody>
    @foreach($buku as $key)
  <tr>
    <td>{{$key->judul}}</td>
    <td>{{$key->noisbn}}</td>
    <td>{{$key->tahun}}</td>
    <td>{{$key->harga_jual}}</td>
    <td>{{$key->ppn}}</td>
    <td>{{$key->diskon}}</td>
    <td><a class="btn btn-primary" href="{{url('pasok/add/'.$key->id)}}">Pilih</a>
    </td>

    </tr>
    @endforeach
  </tbody>
  </table>
</div>
{!! $buku->appends(['query' => $query])->links() !!}    
</div>
</div>
@endsection