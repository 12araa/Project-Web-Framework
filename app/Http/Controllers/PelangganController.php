<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan2301010068;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->search;

    $pelanggan = Pelanggan2301010068::query()
        ->when($search, function($query) use ($search) {
            $query->where('nama_pelanggan', 'LIKE', "%{$search}%")
                  ->orWhere('kode', 'LIKE', "%{$search}%")
                  ->orWhere('alamat', 'LIKE', "%{$search}%");
        })
        ->paginate(15);

    return view('pages.pelanggan.indexPelanggan', [
        'pelanggan' => $pelanggan
    ]);
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

        return redirect()->route('pelanggan_index')->with('created', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($pelanggan_id)
    {
        $pelanggan = Pelanggan2301010068::where('id', $pelanggan_id)->first();

        return view('pages.pelanggan.showPelanggan', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($pelanggan_id)
    {
        $pelanggan = Pelanggan2301010068::findOrFail($pelanggan_id);

        return view('pages.pelanggan.editPelanggan', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $pelanggan_id)
    {
        Pelanggan2301010068::where('id', $pelanggan_id)->update([
            'kode'=> $request->kode,
            'nama_pelanggan'=> $request->nama_pelanggan,
            'alamat'=> $request->alamat,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'tanggal_lahir'=>$request->tanggal_lahir
        ]);

        return redirect()->route('pelanggan_index')->with('created', 'Data berhasil ditambahkan!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($pelanggan_id)
    {
        $pelanggan = Pelanggan2301010068::where('id', $pelanggan_id)->delete();

        return redirect()->route('pelanggan_index')->with('deleted', 'Data berhasil dihapus!');
    }
}
