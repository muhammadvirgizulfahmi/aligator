<x-layout>
    <x-slot name='page_name'>Halaman Kabupaten/Kota / Detail</x-slot>
    <x-slot name='page_content'>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id kabkota</th>
                <th>Nama kabupaten/kota</th>
                <th>Latitude</th>
                <th>Longtitude</th>
                <th>Provinsi Id</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $kabkotas->id }}</td>
                <td> {{ $kabkotas->nama }}</td>
                <td>{{ $kabkotas->latitude }}</td>
                <td>{{ $kabkotas->longtitude }}</td>
                <td>{{ $kabkotas->provinsi_id }}</td>
            </tr>

        </table>
    </x-slot>
</x-layout>