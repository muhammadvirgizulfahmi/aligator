<x-layout>
    <x-slot name='page_name'>Halaman UMKM / Detail</x-slot>
    <x-slot name='page_content'>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Id UMKM</th>
                <th>Nama UMKM</th>
                <th>Nama Pemilik</th>
                <th>Modal</th>
                <th>Alamat</th>
                <th>Rating</th>
                <th>Website</th>
                <th>Email</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $umkms->id }}</td>
                <td>{{ $umkms->nama }}</td>
                <td>{{ $umkms->pemilik }}</td>
                <td>{{ $umkms->modal }}</td>
                <td>{{ $umkms->alamat }}</td>
                <td>{{ $umkms->rating }}</td>
                <td>{{ $umkms->website }}</td>
                <td>{{ $umkms->email }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>