<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NamaTandatanganController extends Controller
{
    public function index(){
        return view('nama_tandatangan.index');
    }
}
