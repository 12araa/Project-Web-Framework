<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');

        $barang = Barang::query()
            ->when($search, function ($query) use ($search) {
                $query->where('kode', 'like', "%{$search}%")
                      ->orWhere('nama', 'like', "%{$search}%");
            })
            ->paginate(15);

        return view('pages.barang.index', compact('barang', 'search'));
    }

    public function create()
    {
        return view('pages.barang.create');
    }

    public function store(Request $request)
    {
        Barang::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

        return redirect()->route('barang_index')->with('created', 'Data barang berhasil ditambahkan!');
    }

    public function edit($barang_id)
    {
        // cara 1
        $barang = Barang::findOrFail($barang_id);

        // // cara 2
        // $barang = Barang::find($barang_id);

        // // cara 3
        // $barang = Barang::where('id', $barang_id)->first();

        // // cara 3=4
        // $barang = Barang::where('id', $barang_id)->firstOrFail();

        return view('pages.barang.edit', compact('barang'));
    }

    public function update(Request $request, $barang_id)
    {
        Barang::where('id', $barang_id)->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

        return redirect()->route('barang_index')->with('created', 'Data barang berhasil diubah!');
    }

    public function show($barang_id)
    {
        $barang = Barang::where('id', $barang_id)->first();

        return view('pages.barang.show', compact('barang'));
    }

    public function destroy($barang_id)
    {
        $barang = Barang::where('id', $barang_id)->delete();

        return redirect()->route('barang_index')->with('deleted', 'Data berhasil dihapus!');

    }


}
