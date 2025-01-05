<x-layout>
    <x-slot name='judul_halaman'>Pengguna</x-slot>
    <x-slot name='nama_halaman'>Detail Pengguna</x-slot>
    <x-slot name='konten_halaman'>
        <h4 class="text-center mb-4">Informasi Pengguna</h4>
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
                        <div class="col-md-3"><strong>Phone:</strong></div>
                        <div class="col-md-9">{{ $user->noTelp }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Gender:</strong></div>
                        <div class="col-md-9">{{ $user->jenisKelamin }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Role:</strong></div>
                        <div class="col-md-9">{{ $user->role }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3"><strong>Profile Picture:</strong></div>
                        <div class="col-md-9">
                            <img src="{{ asset('storage/' . $user->fotoProfil) }}" alt="Profile Picture" class="img-thumbnail" style="width: 150px; height: 150px;">
                        </div>
                        </div>
                        <div class="card-footer text-center bg-light">
                        <button class="btn btn-danger btn-sm" onclick="window.history.back()">Kembali</button>
                    </div>
    </x-slot>
</x-layout>