<x-layout>
    <x-slot name='page_name'>Halaman Kabupaten/Kota / Edit</x-slot>
    <x-slot name='page_content'>
        <form class="forms-sample" action="{{ url('dashboard/kabkota/update', $kabkotas->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Kabupaten/Kota</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Kabupaten/Kota" value="{{ $kabkotas->nama }}">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="latitude" class="col-sm-4 col-form-label">Latitude</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="latitude" name="latitude"
                        placeholder="Masukkan Latitude" value="{{ $kabkotas->latitude }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="longtitude" class="col-sm-4 col-form-label">Longtitude</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="longtitude" name="longtitude"
                        placeholder="Masukkan Longtitude" value="{{ $kabkotas->longtitude }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="provinsi_id" class="col-sm-4 col-form-label">Provinsi Id</label>
                <div class="col-sm-8">
                    <select class="form-control" id="provinsi_id" name="provinsi_id">
                        <option disabled selected value="">Pilih Provinsi</option>
                        @foreach ($provinsis as $provinsi)
                            <option value="{{ $provinsi->id }}"{{ $kabkotas->provinsi_id == $provinsi->id ? 'selected' : '' }}>
                                {{ $provinsi->nama }}
                            </option>
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