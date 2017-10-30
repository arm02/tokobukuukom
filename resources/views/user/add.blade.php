@extends('layouts.home')

@section('content')

<div class="container">
<div class="row">
<form method="POST" action="{{url('user/save')}}">
  
  <div class="form-group">
      <label for="nama_barang">Name</label>
     <input id="name" type="text" 
    class="form-control" name="name" required="Harap Masukan" oninvalid="this.setCustomValidity('Enter User Name Here')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="nama_barang">Email</label>
     <input id="email" type="email" 
    class="form-control" name="email" required="Harap Masukan" oninvalid="this.setCustomValidity('Enter User Email Here')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="telepon">Password</label>
     <input id="password" type="password" 
    class="form-control" name="password" required="Harap Masukan" oninvalid="this.setCustomValidity('Enter User Password Here')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="telepon">Alamat</label>
     <textarea id="alamat" type="text" 
    class="form-control" name="alamat" required="Harap Masukan" oninvalid="this.setCustomValidity('Enter User Address Here')"
    oninput="setCustomValidity('')"></textarea>
    </div>
    <div class="form-group">
      <label for="telepon">Telepon</label>
     <input id="telepon" type="number" 
    class="form-control" name="telepon" required="Harap Masukan" oninvalid="this.setCustomValidity('Enter User Telp Here')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="telepon">Status</label>
     <select class="form-control" name="status" required="Harap Masukan" oninvalid="this.setCustomValidity('Enter User Status Here')"
    oninput="setCustomValidity('')">
       <option selected disabled></option>
       <option value="Aktif">Aktif</option>
       <option value="Tidak Aktif">Tidak Aktif</option>
     </select>
    </div>
    <div class="form-group">
      <label for="telepon">Role</label>
     <select class="form-control" name="role" required="Harap Masukan" oninvalid="this.setCustomValidity('Enter User Role Here')"
    oninput="setCustomValidity('')">
       <option selected disabled></option>
       <option value="2">Admin</option>
       <option value="1">Kasir</option>

     </select>
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <center>
    <button style="width: 200px;" type="submit" class="btn btn-success pull-right">Save</button>
    </center>
</form>
<br>
 </div>
 </div>

@endsection