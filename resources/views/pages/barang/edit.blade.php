@extends('layouts\master');

@section('content')
<div class="px-5 py-5">
    <div class="card">
        <div class="card-body">
                <h1>Form Edit Data Barang</h1>
                <div>
                <form action="{{ route('barang_update', $barang->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <hr>
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" id="kode" value="{{ old('kode', $barang->kode) }}" class="form-control" placeholder="Masukkan kode barang">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ old('kode', $barang->nama) }}" class="form-control" placeholder="Masukkan nama barang">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" step="0.01" min="0.01" value="{{ old('kode', $barang->harga) }}" class="form-control" placeholder="Masukkan harga barang">
                    </div>
                    <hr>
                    <div class="text-center">
                        <a href="{{ route('barang_index')}}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
                </div>
        </div>
    </div>
</div>
