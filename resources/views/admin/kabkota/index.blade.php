<x-layout>
    <x-slot name='page_name'>Halaman Kabupaten/Kota</x-slot>
    <x-slot name='page_content'>
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{ url('dashboard/kabkota/create') }}" class="btn btn-primary mb-2">+ Tambah Kabupaten/kota</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Nama</th>
                <th>Latitude</th>
                <th>Longtitude</th>
                <th>Provinsi Id</th>
                <th>Aksi</th>
            </tr>
            @foreach ($kabkotas as $kabkota)
            <tr>
                <td>{{ $kabkota->id }}</td>
                <td> {{ $kabkota->nama }}</td>
                <td>{{ $kabkota->latitude }}</td>
                <td>{{ $kabkota->longtitude }}</td>
                <td>{{ $kabkota->provinsi_id }}</td>
                <td>
                    <a href="{{ url('dashboard/kabkota/show', $kabkota->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{ url('dashboard/kabkota/edit', $kabkota->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form class="forms-sample d-inline" action="{{ url('dashboard/kabkota/destroy', $kabkota->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data?')">
                            <i class="far fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>