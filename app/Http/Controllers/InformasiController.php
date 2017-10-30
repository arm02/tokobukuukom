<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Informasi;

class InformasiController extends Controller
{
    public function index()
    {
    	$informasi = Informasi::all();
    	return view('informasi.index')->with('informasi',$informasi);
    }

    public function add()
    {
    	return view('informasi.add');
    }

    public function save(Request $r)
    {
    	$informasi = new Informasi;
    	$informasi->judul = $r->input('judul');
    	$informasi->isi = $r->input('isi');
    	$informasi->save();
    	return redirect(url('informasi'));
    }

    public function edit($id)
    {
    	$informasi = Informasi::find($id);
    	return view('informasi.edit')->with('informasi',$informasi);
    }

    public function update(Request $r)
    {
    	$informasi =  Informasi::find($r->input('id'));
    	$informasi->judul = $r->input('judul');
    	$informasi->isi = $r->input('isi');
    	$informasi->save();
    	return redirect(url('informasi'));
    }

    public function delete($id)
    {
    	$informasi = Informasi::find($id);
    	$informasi->delete();
    	return redirect(url('informasi'));
    }
}
