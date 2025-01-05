@include('home.navbar')
<style>
    .container {
        padding: 20px;
    }
    .section {
        background-color: #cce7ef;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
    }
    .section h2 {
        margin: 0 0 20px 0;
        font-size: 20px;
        color: #004c70;
    }
    .form-group {
        display: flex;
        margin-bottom: 10px;
        align-items: center;
    }
    .form-group label {
        flex: 0 0 150px;
        font-size: 16px;
        color: #333;
    }
    .form-group input {
        flex: 1;
        padding: 8px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    }
    .submit-btn {
    background-color: #004c70;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    }

    .delete-btn {
        background-color: #c90707;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #003a52;
    }

    .delete-btn:hover {
        background-color: #8c0606;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }
    .table th, .table td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }
    .table th {
        background-color: #004c70;
        color: white;
    }
</style>
    <div class="container">
        <div class="buttons">
            <a href="{{ route('data_anak_create') }}" class="submit-btn">Tambah</a>
          </div>
        <div class="section">
            <h2>Anak 1</h2>
            <form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Umur</th>
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                            <th>Lingkar Kepala</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="number" name="umur"></td>
                            <td><input type="text" name="tinggi-badan"></td>
                            <td><input type="text" name="berat-badan"></td>
                            <td><input type="text" name="lingkar-kepala"></td>
                            <td>
                                <a href="#" class="btn submit-btn btn-sm">Detil</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>


        {{-- <table class="table table-bordered">
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
              @foreach($user as $users)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->username }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->noTelp }}</td>
                <td>{{ $users->jenisKelamin }}</td>
                <td>
                  @if($users->fotoProfil)
                  <img src="{{ asset('storage/' . $users->fotoProfil) }}" alt="Profile Photo" width="50">
                  @else
                    <span>No photo</span>
                  @endif
                </td>
                <td>
                <!-- Actions: View, Edit, Delete -->
                  <a href="{{ route('pengguna.show', $users->id) }}" class="btn btn-info btn-sm"><i class="far fa-eye"></i> View</a>
                  <a href="{{ route('pengguna.edit', $users->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                    <form action="{{ route('pengguna.destroy', $users->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete {{ $users->name }}?')"><i class="far fa-trash-alt"></i> Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table> --}}


        <div class="section">
            <h2>Anak 2</h2>
            <form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Umur</th>
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                            <th>Lingkar Kepala</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="number" name="umur"></td>
                            <td><input type="text" name="tinggi-badan"></td>
                            <td><input type="text" name="berat-badan"></td>
                            <td><input type="text" name="lingkar-kepala"></td>
                            <td>
                                <a href="#" class="btn submit-btn btn-sm">Detil</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>

@include('home.footer')