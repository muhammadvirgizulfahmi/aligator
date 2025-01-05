<x-layout>
    <x-slot name='page_name'>Halaman Provinsi / Detail</x-slot>
    <x-slot name='page_content'>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id Provinsi</th>
                <th>Nama Provinsi</th>
                <th>Nama IbuKota</th>
                <th>Latitude</th>
                <th>Longtitude</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $provinsis->id }}</td>
                <td>{{ $provinsis->nama }}</td>
                <td>{{ $provinsis->ibukota }}</td>
                <td>{{ $provinsis->latitude }}</td>
                <td>{{ $provinsis->longtitude }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>