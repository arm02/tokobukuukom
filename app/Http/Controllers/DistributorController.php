<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Distributor;
use DB;
use PDF;

class DistributorController extends Controller
{
    public function index()
    {
    	$dist = Distributor::paginate(10);
    	return view('distributor.index')->with('dist',$dist);
    }

    public function add()
    {
    	return view('distributor.add');
    }

    public function save(Request $r)
    {
    	$dist = new Distributor;
    	$dist->nama_distributor = $r->input('nama_distributor');
    	$dist->alamat = $r->input('alamat');
    	$dist->telepon = $r->input('telepon');
    	$dist->save();
    	return redirect(url('distributor'));
    }

    public function edit($id)
    {
    	$dist = Distributor::find($id);
    	return view('distributor.edit')->with('dist',$dist);
    }

    public function update(Request $r)
    {
   		 $dist = Distributor::find($r->input('id'));
    	$dist->nama_distributor = $r->input('nama_distributor');
    	$dist->alamat = $r->input('alamat');
    	$dist->telepon = $r->input('telepon');
    	$dist->save();
    	return redirect(url('distributor'));	
    }

    public function delete($id)
    {
    	$dist = Distributor::find($id);
    	$dist->delete();
    	return redirect(url('distributor'));	

    }

    public function pdf()
  {
    $data['dist'] = \App\Distributor::all();
    $pdf = PDF::loadview('distributor.pdf', $data);
    return $pdf->download('Laporan Distributor.pdf');
  }
}
