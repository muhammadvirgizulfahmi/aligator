<x-layout>
    <x-slot name='page_name'>Halaman Pembina / Create</x-slot>
    <x-slot name='page_content'>
        <form class="forms-sample" action="{{ url('dashboard/pembina/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pembina</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Pembina">
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="radio_0" type="radio" class="custom-control-input" value="L" required="required">
                    <label for="radio_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="radio_1" type="radio" class="custom-control-input" value="P" required="required">
                    <label for="radio_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                    placeholder="Masukkan Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="keahlian" class="col-sm-4 col-form-label">Keahlian</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="keahlian" name="keahlian"
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

{{-- <a href="{{ route('pengguna.create') }}" class="btn btn-primary btn-sm"> Tambah data </a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Profile Picture</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->noTelp }}</td>
            <td>{{ $user->jenisKelamin }}</td>
            <td>
              @if($user->fotoProfil)
              <img src="{{ asset('storage/' . $user->fotoProfil) }}" alt="Profile Photo" width="50">
              @else
                <span>No photo</span>
              @endif
            </td>
            <td>
            <!-- Actions: View, Edit, Delete -->
              <a href="{{ route('pengguna.show', $user->id) }}" class="btn btn-info btn-sm"><i class="far fa-eye"></i> View</a>
              <a href="{{ route('pengguna.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete {{ $user->nama }}?')"><i class="far fa-trash-alt"></i> Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table> --}}