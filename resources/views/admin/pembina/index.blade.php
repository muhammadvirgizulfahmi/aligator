<x-layout>
    <x-slot name='page_name'>Halaman Pembina</x-slot>
    <x-slot name='page_content'>
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{ url('dashboard/pembina/create') }}" class="btn btn-primary mb-2">+ Tambah Pembina</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Keahlian</th>
                <th>Aksi</th>
            </tr>
            @foreach ($pembinas as $pembina)
            <tr>
                <td>{{ $pembina->id }}</td>
                <td> {{ $pembina->nama }}</td>
                <td>{{ $pembina->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                <td>{{ $pembina->tgl_lahir }}</td>
                <td>{{ $pembina->tmp_lahir }}</td>
                <td>{{ $pembina->keahlian }}</td>
                <td>
                    <a href="{{ url('dashboard/pembina/show', $pembina->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{ url('dashboard/pembina/edit', $pembina->id) }}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form class="forms-sample d-inline" action="{{ url('dashboard/pembina/destroy', $pembina->id) }}" method="POST">
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