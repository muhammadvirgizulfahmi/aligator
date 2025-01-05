@include('home.navbar')
<style>
    .hidden {
        display: none;
    }
    .register-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            padding: 40px 20px;
        }

        .register-box {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .register-box h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .register-box form {
            margin: 20px 0;
        }

        .register-box label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .register-box input[type="text"],
        .register-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .register-box .radio-group {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }

        .register-box .radio-group label {
            font-size: 14px;
        }

        .register-box .form-buttons {
            display: flex;
            justify-content: right;
        }

        .register-box button {
            padding: 10px 20px;
            background-color: #009688;
            border: none;
            color: #fff;
            font-size: 15px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .register-box button:hover {
            background-color: #00796b;
        }
</style>
<div class="register-container" id="role-selection">
    <div class="register-box">
        <h2>Registrasi Akun</h2>
        <form>
            <div class="radio-group">
                <label><input type="radio" name="role" value="pengguna"> Pengguna</label>
                <label><input type="radio" name="role" value="dokter"> Dokter Anak</label>
            </div>

            <label for="email">Email *</label>
            <input type="text" id="email" name="email" placeholder="Masukkan email" required>

            <div class="form-buttons">
                <button type="button" id="next-button">Next</button>
            </div>
        </form>
    </div>
</div>

<!-- Form Registrasi Pengguna -->
<div class="container hidden" id="form-pengguna">
    <h2>Registrasi Pengguna</h2>
    <div class="register-box">
    <form method="POST" action="#" enctype="multipart/form-data">
        <!-- Isi form pengguna -->
        <div class="form-group">
            <label for="nama">Nama Lengkap *</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
            <label>Jenis Kelamin *</label>
            <div class="radio-group">
                <label><input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="username">Username *</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="form-group">
            <label for="password">Password *</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>

        <div class="form-group">
            <label for="konfirmasi_password">Konfirmasi Password *</label>
            <input type="password" id="konfirmasi_password" name="konfirmasi_password" placeholder="Masukkan konfirmasi password" required>
        </div>

        <div class="form-group">
            <label for="no_hp">No HP *</label>
            <input type="tel" id="no_hp" name="no_hp" placeholder="Masukkan No HP" required>
        </div>

        <div class="form-actions">
            <a href="#">Kembali</a>
            <button type="submit">Kirim</button>
        </div>
    </form>
    </div>
</div>

<!-- Form Registrasi Dokter -->
<div class="register-container" id="form-dokter">
    <h2>Registrasi Dokter</h2>
    <form method="POST" action="{{ route('register') }}">
        <!-- Isi form dokter -->
        <div class="form-group">
            <label for="nama">Nama Lengkap *</label>
            <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="form-group">
          <label for="email">Email *</label>
          <input type="text" id="email" name="email" placeholder="Masukkan email lengkap" required>
      </div>

        <div class="form-group">
            <label>Jenis Kelamin *</label>
            <div class="radio-group">
                <label><input type="radio" name="jenisKelamin" value="laki-laki" required> Laki-Laki</label>
                <label><input type="radio" name="jenisKelamin" value="perempuan" required> Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="username">Username *</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required>
        </div>

        <div class="form-group">
            <label for="password">Password *</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
        </div>

        <div class="form-group">
            <label for="noTelp">No HP *</label>
            <input type="tel" id="noTelp" name="noTelp" placeholder="Masukkan No HP" required>
        </div>
        <div class="form-group">
          <label for="fotoSertifikat">Sertifikat *</label>
          <input type="file" id="fotoSertifikat" name="fotoSertifikat" accept=".pdf,.jpg,.jpeg,.png" required>
      </div>

        <div class="form-actions">
            <a href="#">Kembali</a>
            <button type="submit">Kirim</button>
        </div>
    </form>
</div>


@include('home.footer')

<script>
    document.getElementById('next-button').addEventListener('click', function () {
        const selectedRole = document.querySelector('input[name="role"]:checked');

        if (selectedRole) {
            const roleValue = selectedRole.value;

            // Sembunyikan pemilihan role
            document.getElementById('role-selection').classList.add('hidden');

            // Tampilkan formulir yang sesuai
            if (roleValue === 'pengguna') {
                document.getElementById('form-pengguna').classList.remove('hidden');
            } else if (roleValue === 'dokter') {
                document.getElementById('form-dokter').classList.remove('hidden');
            }
        } else {
            alert('Silakan pilih jenis akun terlebih dahulu!');
        }
    });

    // Tombol Kembali untuk Pengguna
    document.getElementById('back-button-pengguna').addEventListener('click', function () {
        document.getElementById('form-pengguna').classList.add('hidden');
        document.getElementById('role-selection').classList.remove('hidden');
    });

    // Tombol Kembali untuk Dokter
    document.getElementById('back-button-dokter').addEventListener('click', function () {
        document.getElementById('form-dokter').classList.add('hidden');
        document.getElementById('role-selection').classList.remove('hidden');
    });
</script>