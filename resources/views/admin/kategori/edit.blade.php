<x-layout>
    <x-slot name='page_name'>Halaman Kategori UMKM / Edit</x-slot>
    <x-slot name='page_content'>
        <form class="forms-sample" action="{{ url('dashboard/kategori/update', $kategori_umkms->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Kategori</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $kategori_umkms->nama }}"
                        placeholder="Masukkan Nama Kategori UMKM">
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