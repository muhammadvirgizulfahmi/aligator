<x-layout>
    <x-slot name='page_name'>Halaman Pembina / Edit</x-slot>
    <x-slot name='page_content'>
        <form class="forms-sample" action="{{ url('dashboard/pembina/update', $pembinas->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pembina</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $pembinas->nama }}"
                        placeholder="Masukkan Nama Pembina">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-4">Gender</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="L" required="required" <?= ($pembinas->gender == 'L' ? 'checked' : ''); ?>>
                    <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P" required="required" <?= ($pembinas->gender == 'P' ? 'checked' : ''); ?>>
                    <label for="radio_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $pembinas->tgl_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="{{ $pembinas->tmp_lahir }}"
                    placeholder="Masukkan Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="keahlian" class="col-sm-4 col-form-label">Keahlian</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="keahlian" name="keahlian" value="{{ $pembinas->keahlian }}"
                    placeholder="Masukkan Keahlian Pembina">
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