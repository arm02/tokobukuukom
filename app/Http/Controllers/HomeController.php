<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Buku;
use \App\Informasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Buku::all();
        $data['informasi'] = Informasi::all();
        return view('welcome')->with($data);
    }

    public function laporan()
    {
    	return view('laporan.index');
    }
}
