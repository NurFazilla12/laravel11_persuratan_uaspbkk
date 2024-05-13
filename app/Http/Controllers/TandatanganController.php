<?php

namespace App\Http\Controllers;

use App\Models\NamaTandatangan;
use Illuminate\Http\Request;

class TandatanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = NamaTandatangan::all();
        return view('nama_tandatangan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nama_tandatangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tandatgn' => 'required',
            'jabatan' => 'required',
            'nip' => 'required',
        ]);

        NamaTandatangan::create($request->all());
        return redirect()->route('tandatangan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = NamaTandatangan::findOrFail($id);
        return view('nama_tandatangan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = NamaTandatangan::findOrFail($id);
        return view('nama_tandatangan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_tandatgn' => 'required',
            'jabatan' => 'required',
            'nip' => 'required',
        ]);
        $data = NamaTandatangan::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('tandatangan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = NamaTandatangan::findOrFail($id);
        $data->delete();
        return redirect()->route('tandatangan.index');
    }
}
