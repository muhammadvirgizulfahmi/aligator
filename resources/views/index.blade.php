@use(App\Models\User)
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Medilab Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    /* Navbar Styling */
        /* Navbar Styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #064663;
            color: white;
            padding: 8px 15px;
        }
        .navbar .logo {
            display: flex;
            align-items: center;
        }
        .navbar .logo img {
            height: 50px;
            margin-right: 10px;
        }
        .navbar h1 {
        margin: 0;
        font-size: 1.5em;
        color: #5BC0DE;
        }

        .navbar h1 span {
        color: white;
        font-weight: bold;
        }
        .navbar .menu {
            display: flex;
            gap: 10px;
        }
        .navbar .menu a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .navbar .menu a:hover {
            text-decoration: underline;
        }
        .navbar .user {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .navbar .user img {
            height: 20px;
            border-radius: 50%;
        }

    /* Buttons (Login & Registrasi) */
    .buttons {
      display: flex;
    }

    .buttons a {
      text-decoration: none;
      color: white;
      padding: 8px 15px;
      border: 1px solid #5BC0DE;
      border-radius: 5px;
      margin-left: 10px;
      transition: 0.3s;
    }

    .buttons a:hover {
      background-color: #5BC0DE;
      color: #00334E;
    }

    /* Hero Section */
    .hero {
      background: url('hero-image.jpg') center/cover no-repeat;
      height: 400px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
      background-color: #222;
      margin-top: 0.5px;
    }

    /* Footer Media Sosial */
    .social-media {
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #444;
      padding: 20px 10px;
      gap: 80px;
      color: #fff;
    }

    .social-item {
      text-align: center;
    }

    .social-item img {
      width: 60px;
      height: 60px;
      margin-bottom: 10px;
      object-fit: contain;
    }

    .social-item p {
      font-size: 14px;
      font-weight: 500;
      margin: 0;
    }

    /* Styling Berita Terbaru */
    .news-section {
      text-align: center;
      background-color: #f9f9f9;
      padding: 40px 20px;
    }

    .section-title {
      font-size: 2em;
      margin-bottom: 10px;
      color: #00334E;
    }

    .section-subtitle {
      font-size: 1.1em;
      color: #666;
      margin-bottom: 30px;
    }

    .news-container {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .news-card {
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 300px;
      text-align: left;
    }

    .news-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .news-card h3 {
      font-size: 1.2em;
      margin: 15px;
      color: #00334E;
    }

    .news-card p {
      font-size: 0.95em;
      margin: 0 15px 15px;
      color: #555;
    }

    .news-card .read-more {
      display: inline-block;
      margin: 0 15px 15px;
      text-decoration: none;
      color: #007BFF;
      font-weight: 600;
    }

    .news-card .read-more:hover {
      text-decoration: underline;
    }

    /* Reset CSS */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #f8f9fa;
      color: #333;
      line-height: 1.6;
    }

    /* Section Wrapper */
    .download-section {
      width: 90%;
      max-width: 1100px;
      margin: 50px auto;
      text-align: center;
    }

    .download-section h2 {
      font-size: 2rem;
      margin-bottom: 10px;
      position: relative;
      display: inline-block;
    }

    .download-section h2::after {
      content: '';
      width: 60px;
      height: 3px;
      background-color: #007bff;
      position: absolute;
      bottom: -5px;
      left: 50%;
      transform: translateX(-50%);
    }

    /* Download Container */
    .download-container {
      display: flex;
      flex-direction: column;
      gap: 40px;
      margin-top: 20px;
    }

    .book-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    /* Image Styling */
    .book-item img {
      width: 240px;
      height: auto;
      border-radius: 8px;
    }

    /* Book Details */
    .book-details {
      flex: 1;
      padding: 0 20px;
      text-align: left;
    }

    .book-details h3 {
      font-size: 1.3rem;
      color: #333;
      margin-bottom: 10px;
    }

    .book-details p {
      font-size: 0.95rem;
      color: #555;
      margin-bottom: 10px;
    }

    .book-details ul {
      list-style: none;
      margin-bottom: 15px;
    }

    .book-details ul li {
      margin-bottom: 5px;
      display: flex;
      align-items: center;
    }

    .book-details ul li::before {
      content: '✓';
      color: #28a745;
      margin-right: 8px;
    }

    .book-details a {
      display: inline-block;
      padding: 8px 12px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 5px;
      font-weight: 600;
    }

    .book-details a:hover {
      background-color: #0056b3;
    }
    .surveilans-section {
    text-align: center;
    background-color: #2A9D8F;
    padding: 30px 0;
    color: white;
}

.apps-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    max-width: 600px;
    margin: 0 auto;
}

.app-item {
    width: 100px;
    text-align: center;
}

.app-item img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.app-item p {
    font-size: 14px;
    margin: 0;
}
.pengaduan-section {
    background-color: #f8f9ff;
    padding: 30px 10px;
    text-align: center;
}

.pengaduan-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
}

.pengaduan-item {
    background: white;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 10px;
    flex: 1 1 300px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.pengaduan-item form input,
.pengaduan-item form select,
.pengaduan-item form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.pengaduan-item form button {
    background-color: #3b82f6;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.whistleblowing-system img {
    width: 100%;
    max-width: 800px;
    margin-top: 20px;
    border-radius: 10px;
}
* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #3D5A80;
            color: #fff;
            line-height: 1.6;
        }

        .container {
            width: 90%;
            margin: 20px auto;
            padding: 20px;
        }

        h1 {
            text-align: left;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .box {
            background-color: #fff;
            color: #f5eeee;
            border-radius: 8px;
            text-align: center;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(241, 238, 238, 0.1);
            flex: 1 1 calc(25% - 20px);
            max-width: calc(25% - 20px);
        }

        .box img {
            max-width: 100%;
            border-radius: 8px;
        }

        .box h3 {
            font-size: 1.1em;
            margin: 10px 0;
        }

        .download-btn {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #0077b6;
            color: #fff;
            font-weight: bold;
        }

        .download-btn:hover {
            background-color: #023e8a;
        }

        .note {
            text-align: center;
            font-size: 0.9em;
            margin-top: 20px;
            color: #ddd;
        }

         /* Footer Styles */
         footer {
            background-color: #121414;
            color: white;
            padding: 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .footer-container {
            display: flex;
            justify-content: space-between;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .footer-left {
            display: flex;
            align-items: center;
        }
        .footer-left img {
            width: 120px;
            height: 120px;
            margin-right: 100px;
            margin-left: 90px;
        }
        .footer-right {
            text-align: left;
        }
        .footer-right h3 {
            margin-bottom: 20px;
        }
        .footer-right ul {
            list-style-type: none;
            padding: 0;
        }
        .footer-right ul li {
            margin-bottom: 20px;
        }
        .footer-right ul li a {
            color: white;
            text-decoration: none;
        }
        .footer-right ul li a:hover {
            text-decoration: underline;
        }
        .user {
      position: relative;
      display: inline-block;
      cursor: pointer;
  }

  /* Style for the dropdown */
  .dropdown-menu {
      display: none; /* Hidden by default */
      position: absolute;
      top: 100%; /* Below the user container */
      right: 0; /* Align to the right */
      background-color: #ffffff;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      z-index: 1000;
      min-width: 150px;
  }

  /* Dropdown item styles */
  .dropdown-menu a {
      display: block;
      padding: 10px;
      text-decoration: none;
      color: #333;
  }

  .dropdown-menu a:hover {
      background-color: #f0f0f0;
  }
</style>

</head>

<body class="index-page">

  <!-- Navbar Section -->
  <div class="navbar">
        <div class="logo">
            <img src="{{ asset('admin/dist/homepage/logo1.png')}}" alt="Logo Anak Sehat">
            <h1><span>Anak</span> Sehat</h1>
            {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Hell Yeah</button>
            </form>             --}}
        </div>
        <div class="menu">
            <a href="{{ route('index') }}">🏠 Home</a>
            <a href="{{ route('data_anak') }}">👶 Data Anak</a>
            <a href="{{ route('profilDokter') }}">🩺 Dokter</a>
            <a href="{{ route('parameter') }}">📆 Parameter</a>
            <a href="{{ route('konsulPengguna') }}">💬 Konsultasi</a>
        </div>
        @if (Route::has('login'))
      
    @auth
    <div class="user" id="userDropdown">
        <span>{{ Auth::user()->username }}</span>
        <img src="{{ asset('admin/dist/homepage/user.jpg')}}" alt="User">
        <!-- Dropdown menu -->
        <div class="dropdown-menu">
            
          @auth  
          @if (Auth::user()->role == User::ROLE_DOKTER)
          <a href="{{ url('profil-pengguna/' . Auth::user()->id) }}">Profile</a> <!-- Link to the profile page -->
          @else 
          <a href="{{ url('profil-pengguna/' . Auth::user()->id) }}">Profile</a> <!-- Link to the profile page -->
          @endif
          @endauth

            <form method="POST" action="{{ route('logout') }}" style="margin: 0; padding: 0;">
                @csrf
                <button type="submit" style="background: none; border: none; padding: 10px; width: 100%; text-align: left; cursor: pointer; color: #333;">Logout</button>
            </form>
        </div>
    </div>
      
      @else
      <div class="buttons">
        <a href="{{ route('login') }}" class="login">Login</a>
        <a href="{{ route('register') }}" class="register">Registrasi</a>
      </div>

      @endauth
      @endif
    </div>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-content">
      <img src="{{ asset('admin/dist/homepage/foto1.png')}}" alt="Logo">
    </div>
  </section>

  <!-- Footer Media Sosial -->
  <footer class="footer">
    <div class="social-media">
      <div class="social-item">
        <img src="{{ asset('admin/dist/homepage/instagram.jpg')}}" alt="Instagram">
        <p>6.064 Followers</p>
      </div>
      <div class="social-item">
        <img src="{{ asset('admin/dist/homepage/facebook.png')}}" alt="Facebook">
        <p>1.595 Friends</p>
      </div>
      <div class="social-item">
        <img src="{{ asset('admin/dist/homepage/internet.jpg')}}" alt="Website">
        <p>415.000 Visitors</p>
      </div>
      <div class="social-item">
        <img src="youtube.png" alt="YouTube">
        <p>54.200 Subscribers</p>
      </div>
    </div>
  </footer>

  <!-- Berita Terbaru Section -->
  <section class="news-section">
    <h2 class="section-title">Berita Terbaru</h2>
    <p class="section-subtitle">Berita Sekitar Direktorat Gizi dan KIA</p>
    <div class="news-container">
      <div class="news-card">
        <img src="VitA.jpg.png" alt="Berita 1">
        <h3>Pemberian Vitamin A Rutinitas</h3>
        <p>Setelah kebutuhan gizi harian anak terpenuhi, maka sistem kekebalan tubuh akan meningkat...</p>
        <a href="#" class="read-more">Baca Selengkapnya</a>
      </div>
      <div class="news-card">
        <img src="hari_pangan.jpg.png" alt="Berita 2">
        <h3>Hari Pangan Sedunia</h3>
        <p>Peringatan Hari Pangan Sedunia mengingatkan kita pentingnya memenuhi asupan makanan sehat...</p>
        <a href="#" class="read-more">Baca Selengkapnya</a>
      </div>
      <div class="news-card">
        <img src="Cegah_Stunting.jpg.png" alt="Berita 3">
        <h3>Dua Pesan Himbauan Stunting</h3>
        <p>Masalah stunting dapat dicegah dengan dua pesan kunci, yakni pemenuhan nutrisi seimbang...</p>
        <a href="#" class="read-more">Baca Selengkapnya</a>
      </div>
    </div>
  </section>
  
  <section class="download-section">
    <h2>Download Buku</h2>
    <div class="download-container">
        <!-- Buku 1 -->
        <div class="book-item">
            <img src="buku.jpg.png" alt="Buku KIA Kesehatan Ibu dan Anak">
            <div class="book-details">
                <h3>Buku KIA Kesehatan Ibu dan Anak</h3>
                <p>Lembar informasi dan catatan pelayanan kesehatan serta catatan khusus selama kehamilan.</p>
                <ul>
                    <li>Materi kesehatan ibu</li>
                    <li>Materi kesehatan anak</li>
                </ul>
                <a href="#">Download Buku</a>
            </div>
        </div>
        <!-- Buku 2 -->
        <div class="book-item">
            <div class="book-details">
                <h3>Pedoman Pelayanan Kesehatan Anak Usia Sekolah dan Remaja Di Masa Pandemi Covid-19</h3>
                <p>Dalam upaya pemenuhan kebutuhan informasi dan layanan kesehatan bagi anak usia sekolah dan remaja.</p>
                <a href="#">Download Buku</a>
            </div>
            <img src="buku2.jpg.png" alt="Pedoman Pelayanan Kesehatan">
        </div>
        <!-- Buku 3 -->
        <div class="book-item">
            <img src="foto 3.png" alt="Pedoman Pencegahan Balita Gizi Buruk">
            <div class="book-details">
                <h3>Pedoman Pencegahan Dan Tatalaksana Balita Gizi Buruk Pada Masa Pandemi Covid-19</h3>
                <p>Panduan lengkap untuk pencegahan dan penanganan kasus gizi buruk pada balita selama pandemi Covid-19.</p>
                <ul>
                    <li>Langkah pencegahan gizi buruk</li>
                    <li>Tata laksana cepat dan tepat</li>
                </ul>
                <a href="#">Download Buku</a>
            </div>
        </div>
    </div>
</section>
<!-- Bagian Baru: Aplikasi Surveilans Gizi dan KIA -->
<section class="surveilans-section">
  <h2>Aplikasi Surveilans Gizi dan KIA</h2>
  <div class="apps-container">
      <!-- Aplikasi 1 -->
      <div class="app-item">
          <img src="1.png" alt="SIGIZI TERPADU">
          <p>SIGIZI TERPADU</p>
      </div>
      <!-- Aplikasi 2 -->
      <div class="app-item">
          <img src="2.png" alt="Klog KB">
          <p>Klog KB</p>
      </div>
      <!-- Aplikasi 3 -->
      <div class="app-item">
          <img src="3.png" alt="SIMATNEO">
          <p>SIMATNEO</p>
      </div>
      <!-- Aplikasi 4 -->
      <div class="app-item">
          <img src="4.png" alt="MPDN">
          <p>MPDN</p>
      </div>
      <!-- Aplikasi 5 -->
      <div class="app-item">
          <img src="5.png" alt="Belajar Kesga">
          <p>Belajar Kesga</p>
      </div>
      <!-- Aplikasi 6 -->
      <div class="app-item">
          <img src="6.png" alt="MTBS">
          <p>MTBS</p>
      </div>
      <!-- Aplikasi 7 -->
      <div class="app-item">
          <img src="7.png" alt="Komdat Kesmas">
          <p>Komdat Kesmas</p>
      </div>
      <!-- Aplikasi 8 -->
      <div class="app-item">
          <img src="8.png" alt="E-Kohort KIA">
          <p>E-Kohort KIA</p>
      </div>
  </div>
</section>

<!-- Bagian Baru: Pengaduan Orang Tua -->
<section class="pengaduan-section">
  <h2>Pengaduan Orang Tua</h2>
  <p>Orang Tua dapat menyampaikan pengaduan kepada Direktorat Kesehatan Gizi dan KIA melalui surat, datang langsung, telepon, faksimile, SMS, atau Whistleblower’s System. Tindak lanjut penanganan laporan tersebut sangat bergantung pada kualitas laporan yang disampaikan.</p>
  
  <div class="pengaduan-container">
      <!-- Alamat -->
      <div class="pengaduan-item">
          <h3>Alamat</h3>
          <p>Gedung Adhyatma Ruang 712-713<br>Jl. H.R. Rasuna Said Blok X-5 Kav. 4-9 Jakarta 12950</p>
      </div>
      <!-- Form Pengaduan -->
      <div class="pengaduan-item form">
          <form>
              <input type="text" placeholder="Name" required>
              <input type="email" placeholder="Email" required>
              <select required>
                  <option value="" disabled selected>-- pilih subjek --</option>
                  <option value="gizi">Masalah Gizi</option>
                  <option value="kia">KIA</option>
                  <option value="lainnya">Lainnya</option>
              </select>
              <textarea placeholder="Message" rows="5" required></textarea>
              <button type="submit">Send Message</button>
          </form>
      </div>
      <!-- Email Kami -->
      <div class="pengaduan-item">
          <h3>Email Kami</h3>
          <p>info.gizikia@gmail.com<br>pengaduan.gizikia@gmail.com</p>
      </div>
      <!-- Kontak Kami -->
      <div class="pengaduan-item">
          <h3>Kontak Kami</h3>
          <p>021-5221227<br>Fax: 021-5203884</p>
      </div>
  </div>

  <!-- Gambar Whistleblowing System -->
  <div class="whistleblowing-system">
      <img src="logoo.png" alt="Whistleblowing System">
  </div>
</section>

<div class="container">
  <h1>Download Media</h1>
  <div class="content">
      <div class="box">
          <img src="features-2.jpg.png" alt="Infografis Kesehatan">
          <h3>Kumpulan Infografis Kesehatan Gizi dan KIA</h3>
          <a href="#" class="download-btn">Download</a>
      </div>
      <div class="box">
          <img src="7-185x136.jpg.png" alt="Video Kesehatan">
          <h3>Kumpulan Video Kesehatan Gizi dan KIA</h3>
          <a href="#" class="download-btn">Download</a>
      </div>
      <div class="box">
          <img src="10-185x140.jpg (1).png" alt="Pedoman Kesehatan">
          <h3>Kumpulan Pedoman Kesehatan Gizi dan KIA</h3>
          <a href="#" class="download-btn">Download</a>
      </div>
      <div class="box">
          <img src="4.png" alt="Perundangan Kesehatan">
          <h3>Kumpulan Perundangan Kesehatan Gizi dan KIA</h3>
          <a href="#" class="download-btn">Download</a>
      </div>
  </div>
  <div class="note">
      Download Informasi dan Publikasi Lengkap Tentang Kesehatan Gizi dan KIA
  </div>
</div>

 <!-- Footer -->
 <footer>
    <div class="footer-container">
        <div class="footer-left">
            <img src="{{ asset('admin/dist/homepage/logo1.png')}}" alt="Gambar Direktorat">
            <div>
                <h2>Direktorat Gizi dan KIA</h2>
                <p>Jl. H.R. Rasuna Said Blok X-5 Kav. 4-9<br>Jakarta 12950, Indonesia</p>
                <p><strong>Phone:</strong> 021-5221227<br><strong>Fax:</strong> 021-5203984</p>
            </div>
        </div>
        <div class="footer-right">
            <h3>Link Terkait</h3>
            <ul>
                <li><a href="#">> Sesditjen Kesehatan Masyarakat</a></li>
                <li><a href="#">> Direktorat Gizi Masyarakat</a></li>
                <li><a href="#">> Direktorat Kesehatan Lingkungan</a></li>
            </ul>
        </div>
    </div>
</footer>
<script>
    // JavaScript to toggle the dropdown
    document.getElementById('userDropdown').addEventListener('click', function () {
        const dropdownMenu = this.querySelector('.dropdown-menu');
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

    // Optional: Close the dropdown if clicking outside
    document.addEventListener('click', function (event) {
        const userDropdown = document.getElementById('userDropdown');
        if (!userDropdown.contains(event.target)) {
            const dropdownMenu = userDropdown.querySelector('.dropdown-menu');
            dropdownMenu.style.display = 'none';
        }
    });
</script>
</body>
</html>
