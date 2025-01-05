<x-layout>
    <x-slot name='page_name'>Halaman Provinsi / Create</x-slot>
    <x-slot name='page_content'>
        <form class="forms-sample" action="{{ url('dashboard/provinsi/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Provinsi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Provinsi">
                </div>
            </div>
            <div class="form-group row">
                <label for="ibukota" class="col-sm-4 col-form-label">Nama Ibukota</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ibukota" name="ibukota"
                        placeholder="Masukkan Nama Ibukota">
                </div>
            </div>
            <div class="form-group row">
                <label for="latitude" class="col-sm-4 col-form-label">Latitude</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="latitude" name="latitude"
                        placeholder="Masukkan Latitude">
                </div>
            </div>
            <div class="form-group row">
                <label for="longtitude" class="col-sm-4 col-form-label">Longtitude</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="longtitude" name="longtitude"
                        placeholder="Masukkan Longtitude">
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