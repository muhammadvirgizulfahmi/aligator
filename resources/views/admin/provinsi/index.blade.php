<x-layout>
    <x-slot name='page_name'>Halaman Provinsi</x-slot>
    <x-slot name='page_content'>
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{ url('dashboard/provinsi/create') }}" class="btn btn-primary mb-2">+ Tambah Provinsi</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Nama</th>
                <th>Ibukota</th>
                <th>Latitude</th>
                <th>Longtitude</th>
                <th>Aksi</th>
            </tr>
            @foreach ($provinsis as $provinsi)
            <tr>
                <td>{{ $provinsi->id }}</td>
                <td> {{ $provinsi->nama }}</td>
                <td>{{ $provinsi->ibukota }}</td>
                <td>{{ $provinsi->latitude }}</td>
                <td>{{ $provinsi->longtitude }}</td>
                <td>
                    <a href="{{ url('dashboard/provinsi/show', $provinsi->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{ url('dashboard/provinsi/edit', $provinsi->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form class="forms-sample d-inline" action="{{ url('dashboard/provinsi/destroy', $provinsi->id) }}" method="POST">
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