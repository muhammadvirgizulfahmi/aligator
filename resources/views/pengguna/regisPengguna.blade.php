@include('home.navbar')
<style>
                .container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #064663;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input, .form-group .radio-group {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group .radio-group {
            display: flex;
            gap: 15px;
        }

        .form-group .radio-group label {
            font-weight: normal;
        }

        .form-group input[type="file"] {
            border: none;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
        }

        .form-actions button {
            padding: 10px 20px;
            background-color: #064663;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-actions button:hover {
            background-color: #04637b;
        }

        .form-actions a {
            padding: 10px 20px;
            text-decoration: none;
            background-color: #ccc;
            color: black;
            border-radius: 5px;
        }

        .form-actions a:hover {
            background-color: #bbb;
        }
    </style>
    <!-- Registrasi Form -->

  <div class="container">
      <h2>Registrasi Pengguna</h2>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
      <form method="POST" action="{{ route('register.pengguna') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Lengkap *</label>
            <input type="text" id="nama" name="name" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin *</label>
            <div class="radio-group">
                <label><input type="radio" name="jenisKelamin" value="Laki-laki" required> Laki-Laki</label>
                <label><input type="radio" name="jenisKelamin" value="Perempuan" required> Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="username">Username *</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="form-group">
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" placeholder="Masukkan email" required>
        </div>

        <div class="form-group">
            <label for="no_hp">No HP *</label>
            <input type="number" id="noTelp" name="noTelp" placeholder="Masukkan No HP" required>
        </div>

        <div class="form-group">
            <label for="password">Password *</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Konfirmasi Password *</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Masukkan konfirmasi password" required>
        </div>


        <div class="form-actions">
            <a href="{{ url()->previous() }}">Kembali</a>
            <button type="submit">Kirim</button>
        </div>
      </form>
  </div>
@include('home.footer')
