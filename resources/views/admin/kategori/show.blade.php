<x-layout>
    <x-slot name='page_name'>Halaman Kategori UMKM / Detail</x-slot>
    <x-slot name='page_content'>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id Kategori</th>
                <th>Nama</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $kategori_umkms->id }}</td>
                <td> {{ $kategori_umkms->nama }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>