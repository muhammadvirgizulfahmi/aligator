@use(App\Models\User)
<x-layout>
    <x-slot name='page_name'>Halaman UMKM</x-slot>
    <x-slot name='page_content'>
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{ url('dashboard/umkm/create') }}" class="btn btn-primary mb-2">+ Tambah umkm</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Nama UMKM</th>
                <th>Nama Pemilik</th>
                <th>Kabkota id</th>
                <th>Kategori UMKM id</th>
                <th>Pembina id</th>
                <th>Aksi</th>
            </tr>
            @foreach ($umkms as $umkm)
            <tr>
                <td>{{ $umkm->id }}</td>
                <td> {{ $umkm->nama }}</td>
                <td>{{ $umkm->pemilik }}</td>
                <td> {{ $umkm->kabkota_id }}</td>
                <td>{{ $umkm->kategori_umkm_id }}</td>
                <td> {{ $umkm->pembina_id }}</td>
                <td>
                    <a href="{{ url('dashboard/umkm/show', $umkm->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a>
                    @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN)
                    | <a href="{{ url('dashboard/umkm/edit', $umkm->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form class="forms-sample d-inline" action="{{ url('dashboard/umkm/destroy', $umkm->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">
                            <i class="far fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                    @endif
                    @endauth
                </td>
            @endforeach
        </table>
    </x-slot>
</x-layout>