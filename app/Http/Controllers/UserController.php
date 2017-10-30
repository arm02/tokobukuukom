<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use PDF;
use DB;

class UserController extends Controller
{
    public function index()
    {
    	$user = User::get();
    	return view('user.index')->with('user',$user);
    }

    public function add()
    {
    	return view('user.add');
    }

    public function save(Request $r)
    {
    	$user = new User;
    	$password2 = $r->input('password');
    	$user->name = $r->input('name');
    	$user->email = $r->input('email');
    	$user->password = bcrypt($password2);
    	$user->alamat = $r->input('alamat');
    	$user->telepon = $r->input('telepon');
    	$user->status = $r->input('status');
    	$user->role = $r->input('role');
    	$user->save();
    	return redirect(url('user'));
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	return view('user.edit')->with('user',$user);
    }

    public function update(Request $r)
    {
    	$user = User::find($r->input('id'));
    	$user->name = $r->input('name');
    	$user->email = $r->input('email');
    	$user->alamat = $r->input('alamat');
		$user->telepon = $r->input('telepon');    	
    	$user->status = $r->input('status');
    	$user->role = $r->input('role');
    	$user->save();
    	return redirect(url('user'));
    }

    public function delete($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect(url('user'));
    }

    public function pdf()
  {
    $data['user'] = \App\User::all();
    $pdf = PDF::loadview('user.pdf', $data);
    return $pdf->download('Laporan User.pdf');
  }
}
