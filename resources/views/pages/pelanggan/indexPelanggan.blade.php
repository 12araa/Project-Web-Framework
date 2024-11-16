@extends('layouts\master');

@section('content')
<div class="px-5 py-5">
    @if (session('created'))
        <div class="alert alert-success" role="alert">
            {{ session('created') }}
        </div>
    @endif

    @if (session('updated'))
        <div class="alert alert-success" role="alert">
            {{ session('updated') }}
        </div>
    @endif

    @if (session('deleted'))
        <div class="alert alert-success" role="alert">
            {{ session('deleted') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
                <h1>Halaman Data Pelanggan</h1>
                <div>
                    {{-- <a href="{{ route('barang_create') }}" class="btn btn-primary ">Tambah Barang</a> --}}
                </div>
                <div>
                    <table class="table table-boordered">
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
                            @foreach ($pelanggan as $i => $d)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $d->kode }}</td>
                                    <td>{{ $d->nama_pelanggan }}</td>
                                    <td>{{ $d->alamat }}</td>
                                    <td>{{ $d->jenis_kelamin }}</td>
                                    <td>{{ $d->tanggal_lahir }}</td>
                                    <td>
                                        <a href="{{ route("pelanggan_show", $d->id) }}" class="btn btn-sm btn-info">
                                            Detail
                                        </a>
                                        <a href="{{ route('pelanggan_edit', $d->id) }}" class="btn btn-sm btn-warning">
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
                            @endforeach
                            {{ $barang->links() }}
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>


@push('js')
    <script>
        function hapusData(id){
            console.log(id);

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
