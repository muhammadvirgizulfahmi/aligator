<x-layout>
    <x-slot name='page_name'>Halaman Kategori UMKM / Create</x-slot>
    <x-slot name='page_content'>
        <form class="forms-sample" action="{{ url('dashboard/kategori/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Kategori</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
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