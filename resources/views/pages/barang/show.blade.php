@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <h1>Form Detail Data Barang</h1>
                </div>
                <hr>
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <th>Kode</th>
                            <th>:</th>
                            <th>{{ $barang->kode }}</th>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <th>:</th>
                            <th>{{ $barang->nama }}</th>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <th>:</th>
                            <th>{{ $barang->harga }}</th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
