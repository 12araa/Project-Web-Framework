@extends('layouts.master')

@section('content')
    @if (session('created'))
        <div class="alert alert-success">
            {{ session('created') }}
        </div>
    @endif

    @if (session('updated'))
        <div class="alert alert-success">
            {{ session('updated') }}
        </div>
    @endif

    @if (session('deleted'))
        <div class="alert alert-success">
            {{ session('deleted') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Halaman Data Pelanggan</h3>
        </div>

        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <a href="{{ route('pelanggan_create') }}" class="btn btn-primary">
                        Tambah Pelanggan
                    </a>
                </div>
                <div class="col-md-6">
                    <form action="{{ route('pelanggan_index') }}" method="GET">
                        <div class="input-group">
                            <input type="text"
                                   class="form-control"
                                   placeholder="Cari berdasarkan kode atau nama..."
                                   name="search"
                                   value="{{ request('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">
                                    Cari
                                </button>
                                @if(request('search'))
                                    <a href="{{ route('pelanggan_index') }}" class="btn btn-outline-danger">
                                        Reset
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pelanggan as $i => $d)
                            <tr>
                                <td>{{ $pelanggan->firstItem() + $i }}</td>
                                <td>{{ $d->kode }}</td>
                                <td>{{ $d->nama_pelanggan }}</td>
                                <td>{{ $d->alamat }}</td>
                                <td>{{ $d->jenis_kelamin }}</td>
                                <td>{{ $d->tanggal_lahir }}</td>
                                <td>
                                    <a href="{{ route('pelanggan_show', $d->id) }}" class="btn btn-info btn-sm">
                                        Detail
                                    </a>
                                    <a href="{{ route('pelanggan_edit', $d->id) }}" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger"
                                        onclick="hapusData(`btndelete{{ $d->id }}`)">
                                        Hapus
                                    </button>
                                    <form action="{{ route('pelanggan_destroy', $d->id) }}" method="POST" style="display:none">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="hidden" style="display: none" id="btndelete{{ $d->id }}"></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $pelanggan->links() }}
            </div>
        </div>
    </div>
@endsection

@push('js')
<script>
    function hapusData(id){
        Swal.fire({
            title: "Apakah ingin menghapus data?",
            text: "Setelah data dihapus data tidak bisa dipulihkan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Iya, hapus!"
        }).then((result) => {
            if (result.isConfirmed){
                document.getElementById(id).click();
            }
        });
    }
</script>
@endpush
