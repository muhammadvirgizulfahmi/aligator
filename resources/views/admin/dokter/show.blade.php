<x-layout>
    <x-slot name='judul_halaman'>Dokter</x-slot>
    <x-slot name='nama_halaman'>Detail Dokter</x-slot>
    <x-slot name='konten_halaman'>
        <h4 class="text-center mb-4">Informasi Dokter</h4>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Name:</strong></div>
                        <div class="col-md-9">{{ $user->name }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Username:</strong></div>
                        <div class="col-md-9">{{ $user->username }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Email:</strong></div>
                        <div class="col-md-9">{{ $user->email }}</div>
                    </div> 
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Foto Sertifikat:</strong></div>
                        <div class="col-md-9">{{ $user->fotoSertifikat }}</div>
                    </div>  
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Jenis Kelamin:</strong></div>
                        <div class="col-md-9">{{ $user->jenisKelamin }}</div>
                    </div>          
    </x-slot>
</x-layout>