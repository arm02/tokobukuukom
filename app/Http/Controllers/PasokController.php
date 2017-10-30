<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pasok;
use \App\Buku;
use \App\Distributor;
use DB;
use PDF;

class PasokController extends Controller
{
    public function index()
    {
    	$buku = Buku::paginate(10);
    	return view('pasok.index')->with('buku',$buku);
    }

    public function add($id)
    {
    	$dist = Distributor::get();
    	$buku = Buku::all();
    	$buku2 = Buku::find($id);
    	return view('pasok.add')->with('dist',$dist)->with('buku',$buku)->with('buku2',$buku2);
    }

    public function save(Request $r)
    {
    	$pasok = new Pasok;
    	$pasok->id_distributor = $r->input('id_distributor');
    	$pasok->id_buku = $r->input('id_buku');
    	$pasok->jumlah = $r->input('jumlah');
    	$pasok->save();
    	$stok = Buku::find($r->input('id'));
    	$a = $stok->stok + $r->input('jumlah');
    	$stok->stok = $a;
    	$stok->save();
    	return redirect(url('pasok'));
    }
    public function pdf()
  {
    $data['pasok'] = \App\Pasok::all();
    $pdf = PDF::loadview('pasok.pdf', $data);
    return $pdf->download('Laporan Pasok.pdf');
  }
}
