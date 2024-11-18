@extends('layouts.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <h1>Detail Data Pelanggan</h1>
                <div>
                    <hr>
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label"><strong>Kode</strong></label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $pelanggan->kode }}</p>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label"><strong>Nama Pelanggan</strong></label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $pelanggan->nama_pelanggan }}</p>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label"><strong>Alamat</strong></label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ $pelanggan->alamat }}</p>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label"><strong>Jenis Kelamin</strong></label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">
                                {{ $pelanggan->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                            </p>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label"><strong>Tanggal Lahir</strong></label>
                        <div class="col-sm-10">
                            <p class="form-control-plaintext">{{ date('d F Y', strtotime($pelanggan->tanggal_lahir)) }}</p>
                        </div>
                    </div>

                    <hr>
                    <div class="text-center">
                        <a href="{{ route('pelanggan_index')}}" class="btn btn-danger">Kembali</a>
                        <a href="{{ route('pelanggan_edit', $pelanggan->id) }}" class="btn btn-warning">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
