<!DOCTYPE html>
  <html>
  <head>
    <title>User - Laporan</title>
  </head>
  <body>
  <?php
  $i = 1;
  ?>
  <h1>Laporan User</h1>
  @foreach($user as $key)
    <hr>
    <h5>No : {{$i++}}</h5>
    <h5>Name : {{$key->name}}</h5>
    <h5>Email : {{$key->email}}</h5>
    <h5>Telepon : {{$key->telepon}}</h5>
    <h5>Status : {{$key->status}}</h5>
    <h5>Role : {{$key->role}}</h5>
    <h5>Dibuat : {{$key->created_at}}</h5>

    <hr>
    @endforeach
  
  </body>
  </html>