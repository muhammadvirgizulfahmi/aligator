<x-layout>
    <x-slot name='judul_halaman'>Parameter</x-slot>
    <x-slot name='nama_halaman'>Edit Parameter</x-slot>
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

        <form action="{{ url('dashboard/parameter/update', $parameter->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <!-- Menggunakan Grid System -->
            <div class="form-group row">
                <label for="umur" class="col-sm-3 col-form-label">Umur</label>
                <div class="col-sm-9">
                    <input type="number" name="umur" id="umur" class="form-control" value='{{ $parameter->umur }}' required>
                </div>
            </div>

            <div class="form-group row">
                <label for="tinggiBadan" class="col-sm-3 col-form-label">Tinggi Badan</label>
                <div class="col-sm-9">
                    <input type="number" name="tinggiBadan" id="tinggiBadan" class="form-control" value='{{ $parameter->tinggiBadan }}' required>
                </div>
            </div>

            <div class="form-group row">
                <label for="beratBadan" class="col-sm-3 col-form-label">Berat Badan</label>
                <div class="col-sm-9">
                    <input type="number" name="beratBadan" id="beratBadan" class="form-control" value='{{ $parameter->beratBadan }}'required>
                </div>
            </div>

            <div class="form-group row">
                <label for="lingkarKepala" class="col-sm-3 col-form-label">Lingkar Kepala</label>
                <div class="col-sm-9">
                    <input type="number" name="lingkarKepala" id="lingkarKepala" class="form-control" value='{{ $parameter->beratBadan }}' required>
                </div>
            </div>

        <div class="col-sm-9 offset-sm-3">
        <button type="submit" class="btn btn-info btn-sm">Update</button>
        <button type="button" class="btn btn-danger btn-sm" onclick="window.history.back()">Batal</button>
        </div>
        </form>
    </x-slot>
</x-layout>