<x-layout>
    <x-slot name='page_name'>Halaman Provinsi / Edit</x-slot>
    <x-slot name='page_content'>
        <form class="forms-sample" action="{{ url('dashboard/provinsi/update', $provinsis->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Provinsi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Provinsi" value="{{ $provinsis->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="kecamatan_nama" class="col-sm-4 col-form-label">Nama Ibukota</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ibukota" name="ibukota"
                        placeholder="Masukkan Nama Kecamatan" value="{{ $provinsis->ibukota }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="latitude" class="col-sm-4 col-form-label">Latitude</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="latitude" name="latitude"
                        placeholder="Masukkan Latitude" value="{{ $provinsis->latitude }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="longtitude" class="col-sm-4 col-form-label">Longtitude</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="longtitude" name="longtitude"
                        placeholder="Masukkan Longtitude" value="{{ $provinsis->longtitude }}">
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