<x-layout>
    <x-slot name='page_name'>Halaman UMKM / Create</x-slot>
    <x-slot name='page_content'>
        <form class="forms-sample" action="{{ url('dashboard/umkm/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama UMKM</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama UMKM">
                </div>
            </div>
            <div class="form-group row">
                <label for="modal" class="col-sm-4 col-form-label">Modal (Rupiah)</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="modal" name="modal"
                        placeholder="Masukkan Modal Usaha">
                </div>
            </div>
            <div class="form-group row">
                <label for="pemilik" class="col-sm-4 col-form-label">Pemilik UMKM</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="pemilik" name="pemilik"
                        placeholder="Masukkan Nama Pemilik UMKM">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col">
                    <textarea name="alamat" id="alamat" placeholder="Masukkan Alamat UMKM" cols="80" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="website" class="col-sm-4 col-form-label">Website UMKM</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="website" name="website"
                        placeholder="Masukkan Website UMKM">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email UMKM</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" name="email"
                        placeholder="Masukkan Email UMKM">
                </div>
            </div>
            <div class="form-group row">
                <label for="rating" class="col-sm-4 col-form-label">Rating</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="rating" name="rating" min="1" max="10"
                        placeholder="Masukkan Rating UMKM dari 1-10">
                </div>
            </div>
            <div class="form-group row">
                <label for="kabkota_id" class="col-sm-4 col-form-label">Kabupaten/Kota</label>
                <div class="col-sm-8">
                    <select class="form-control" id="kabkota_id" name="kabkota_id">
                        <option disabled selected value="">Pilih Kabupaten/Kota</option>
                        @foreach ($kabkotas as $kabkota)
                            <option value="{{ $kabkota->id }}">{{ $kabkota->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="kategori_umkm_id" class="col-sm-4 col-form-label">Kategori UMKM</label>
                <div class="col-sm-8">
                    <select class="form-control" id="kategori_umkm_id" name="kategori_umkm_id">
                        <option disabled selected value="">Pilih Kategori UMKM</option>
                        @foreach ($kategori_umkms as $kategori_umkm)
                            <option value="{{ $kategori_umkm->id }}">{{ $kategori_umkm->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="pembina_id" class="col-sm-4 col-form-label">Pembina UMKM</label>
                <div class="col-sm-8">
                    <select class="form-control" id="pembina_id" name="pembina_id">
                        <option disabled selected value="">Pilih Pembina UMKM</option>
                        @foreach ($pembinas as $pembina)
                            <option value="{{ $pembina->id }}">{{ $pembina->nama }} - {{ $pembina->keahlian }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>