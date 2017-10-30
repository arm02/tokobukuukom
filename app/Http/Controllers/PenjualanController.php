<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Penjualan;
use \App\Buku;
use \App\User;
use DB;
use PDF;
use Auth;

class PenjualanController extends Controller
{
    public function pdf()
  {
    $data['penjualan'] = \App\Penjualan::all();
    $pdf = PDF::loadview('penjualan.pdf', $data);
    return $pdf->stream();
  }

    public function struk($id)
  {
    $data['penjualan'] = \App\Penjualan::find($id);
    $pdf = PDF::loadview('penjualan.struk', $data);
    return $pdf->download('struk.pdf');
  }

   public function index()
    {
    	$buku = Buku::get();
    	return view('penjualan.index')->with('buku',$buku);
    }

     public function search(Request $r)
    {
      $query = $r->input('query');
      $buku = Buku::where('judul','like','%'.$query.'%')->orderBy('id','asc')->paginate(20);
      return view('penjualan.index')->with('buku', $buku)->with('query', $query);
    }

    public function add($id)
    {
    	$buku = Buku::find($id);
    	$buku2 = Buku::get();
    	return view('penjualan.add')->with('buku',$buku)->with('buku2',$buku2);
    }

    public function save(Request $r)
    {
    	$pen = new Penjualan;
    	$pen->id_buku = $r->input('id_buku');
    	$pen->id_kasir = Auth::user()->id;
    	$pen->jumlah = $r->input('jumlah');
    	$pen->total = $r->input('total');
    	$pen->save();
    	$stok = Buku::find($r->input('id_buku'));
    	$a = $stok->stok - $r->input('jumlah');
    	$stok->stok = $a;
    	$stok->save();
    	return redirect(url('penjualan/struk/'.$pen->id));

    }
}
