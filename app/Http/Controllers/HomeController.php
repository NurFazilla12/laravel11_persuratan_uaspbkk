<?php

namespace App\Http\Controllers;

use App\Models\NamaTandatangan;
use App\Models\SuratKeluar;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $jumlahSuratKeluar = SuratKeluar::count();
        $jumlahTandatangan = NamaTandatangan::count();
        $jumlahUser = User::count();

        return view('home', compact('jumlahSuratKeluar', 'jumlahTandatangan', 'jumlahUser'));
    }
}
