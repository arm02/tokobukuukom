@extends('layouts.home')
@section('title')
Home
@endsection
@section('content')

<div class="container">
	<div class="row">
	
<div class="col-md-4">
<nav class="panel" >
  <p class="panel-heading">
    Show info data buku
  </p>
  <div class="panel-block">
    <p class="control has-icons-left">
      <input class="input is-small" type="text" placeholder="search">
      <span class="icon is-small is-left">
        <i class="fa fa-search"></i>
      </span>
    </p>
  </div>
  <p class="panel-tabs">
    <a class="is-active" style="text-decoration: none;">all</a>
    <a style="text-decoration: none;">populer</a>
    <a style="text-decoration: none;">rating</a>
  </p>
  @foreach($data as $key)
  <a class="panel-block is-active" style="text-decoration: none;">
    <span class="panel-icon">
      <i class="fa fa-book"></i>
    </span>
    {{$key->judul}}
  </a>
  @endforeach
  <label class="panel-block">
    <input type="checkbox">
    remember me
  </label>
  <div class="panel-block">
    <a href="{{url('buku')}}" style="text-decoration: none;">
    <button class="button is-link is-outlined is-fullwidth">
      form buku
    </button>
    </a>
  </div>
</nav>
</div>
	<div class="col-md-8">
	@foreach($informasi as $key)
	<article class="message is-success">
  <div class="message-header">
    <p>{{$key->judul}}</p>
  </div>
  <div class="message-body">
    {{$key->isi}}
  </div>
</article>
@endforeach
<br>
</div>
</div>
</div>
@endsection