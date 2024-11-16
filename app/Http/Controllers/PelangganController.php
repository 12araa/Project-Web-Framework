<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan2301010068;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan2301010068::all();

        return view('pages.pelanggan.indexPelanggan', [
            'pelanggan' => $pelanggan
        ]);

        return view('pages.pelanggan.indexPelanggan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.pelanggan.createPelanggan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan2301010068::create([
            'kode'=> $request->kode,
            'nama_pelanggan'=> $request->nama_pelanggan,
            'alamat'=> $request->alamat,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'tanggal_lahir'=>$request->tanggal_lahir
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
