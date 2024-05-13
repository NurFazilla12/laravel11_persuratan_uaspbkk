<?php

namespace App\Http\Controllers;

use App\Models\KepalaSurat;
use App\Models\NamaTandatangan;
use App\Models\SuratKeluar;
use App\Models\User;
use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SuratKeluar::with('user', 'tandatangan', 'kepalaSurat')->get();
        return view('surat_keluar.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */ public function create()
    {
        $kepalaSurats = KepalaSurat::all();
        $namaTandatangans = NamaTandatangan::all();
        $users = User::all();

        return view('surat_keluar.create', compact('kepalaSurats', 'namaTandatangans', 'users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_kop' => 'required',
            'tanggal' => 'required',
            'no_surat' => 'required',
            'perihal' => 'required',
            'tujuan' => 'required',
            'isi_surat' => 'required',
            'id_tandatangan' => 'required',
            'id_user' => 'required',
        ]);

        SuratKeluar::create($validatedData);

        return redirect()->route('suratkeluar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = SuratKeluar::with(['user', 'tandatangan', 'kepalaSurat'])->findOrFail($id);
        return view('surat_keluar.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = SuratKeluar::findOrFail($id);
        $data->delete();
        return redirect()->route('suratkeluar.index');
    }
}
