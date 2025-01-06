<x-layout>
    <x-slot name='judul_halaman'>Dokter</x-slot>
    <x-slot name='nama_halaman'>Tambah Dokter</x-slot>
    <x-slot name='konten_halaman'>
        <!-- Display Validation Errors -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ url('dashboard/dokter/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Menggunakan Grid System Bootstrap -->

            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama pengguna" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="username" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username pengguna" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email pengguna" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="fotoSertifikat" class="col-sm-3 col-form-label">Foto Sertifikat</label>
                <div class="col-sm-9">
                    <input type="file" name="fotoSertifikat" id="fotoSertifikat" class="form-control-file">
                </div>
            </div>

            <div class="form-group row">
                <label for="jenisKelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                    <select name="jenisKelamin" id="jenisKelamin" class="form-control" required>
                        <option value='' disabled selected>Pilih jenis kelamin Dokter</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>


        <div class="col-sm-9 offset-sm-3">
        <button type="submit" class="btn btn-info btn-sm">Tambah</button>
        <button class="btn btn-danger btn-sm" onclick="window.history.back()">Batal</button>
        </div>
        </form>
    </x-slot>
</x-layout>