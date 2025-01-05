<x-layout>
    <x-slot name='page_name'>Halaman Pembina / Detail</x-slot>
    <x-slot name='page_content'>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id Pembina</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Keahlian</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $pembinas->id }}</td>
                <td> {{ $pembinas->nama }}</td>
                <td>{{ $pembinas->gender == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                <td>{{ $pembinas->tgl_lahir }}</td>
                <td>{{ $pembinas->tmp_lahir }}</td>
                <td>{{ $pembinas->keahlian }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>