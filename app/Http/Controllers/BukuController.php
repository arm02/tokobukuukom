<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Buku;
use PDF;
use DB;

class BukuController extends Controller
{
    public function index()
    {
    	$buku = Buku::paginate(10);
    	return view('buku.index')->with('buku',$buku); 
    }

    public function add()
    {
    	return view('buku.add');
    }

    public function save(Request $r)
    {
    	$buku = new Buku;
    	$buku->judul = $r->input('judul');
    	$buku->noisbn = $r->input('noisbn');
    	$buku->penulis = $r->input('penulis');
    	$buku->penerbit = $r->input('penerbit');
    	$buku->tahun = $r->input('tahun');
    	$buku->harga_pokok = $r->input('harga_pokok');
    	$buku->harga_jual = $r->input('harga_jual');
    	$buku->ppn = $r->input('ppn');
    	$buku->diskon = $r->input('diskon');
    	$buku->save();
    	return redirect(url('buku'));
    }

    public function edit($id)
    {
    	$buku = Buku::find($id);
    	return view('buku.edit')->with('buku',$buku);
    }

    public function update(Request $r)
    {
    	$buku = Buku::find($r->input('id'));
    	$buku->judul = $r->input('judul');
    	$buku->noisbn = $r->input('noisbn');
    	$buku->penulis = $r->input('penulis');
    	$buku->penerbit = $r->input('penerbit');
    	$buku->tahun = $r->input('tahun');
    	$buku->harga_pokok = $r->input('harga_pokok');
    	$buku->harga_jual = $r->input('harga_jual');
    	$buku->ppn = $r->input('ppn');
    	$buku->diskon = $r->input('diskon');
    	$buku->save();
    	return redirect(url('buku'));
    }

    public function delete($id)
    {
    	$buku = Buku::find($id);
    	$buku->delete();
    	return redirect(url('buku'));
    }

   public function pdf()
  {
    $data['buku'] = \App\Buku::all();
    $pdf = PDF::loadview('buku.pdf', $data);
    return $pdf->download('Laporan Buku.pdf');
  }
}
