<x-layout>
    <x-slot name='page_name'>Halaman Kategori UMKM</x-slot>
    <x-slot name='page_content'>
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{ url('dashboard/kategori/create') }}" class="btn btn-primary mb-2">+ Tambah Kategori</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
            @foreach ($kategori_umkms as $kategori_umkm)
            <tr>
                <td>{{ $kategori_umkm->id }}</td>
                <td> {{ $kategori_umkm->nama }}</td>
                <td>
                    <a href="{{ url('dashboard/kategori/show', $kategori_umkm->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{ url('dashboard/kategori/edit', $kategori_umkm->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form class="forms-sample d-inline" action="{{ url('dashboard/kategori/destroy', $kategori_umkm->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">
                            <i class="far fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </td>
            @endforeach
        </table>
    </x-slot>
</x-layout>