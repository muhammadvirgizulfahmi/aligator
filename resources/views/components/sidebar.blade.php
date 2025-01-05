@use(App\Models\User)
<style>
  .custom-egg-blue {
    background-color: #17a2b8; 
    color: black; 
    height: 35px; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    padding: 5px; 
    margin-bottom: 25px;
  }

  .custom-egg-blue-d {
    background-color: #17a2b8; 
    color: black; 
    height: 56px; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    padding: 5px; 
    border-bottom: 1.5px solid #000;  
  }

  .brand-text {
    font-size: 12px; 
    font-weight: bold; 
  }

  .brand-text-d {
    font-size: 14px; 
    font-weight: bold; 
  }

  .no-radius {
    border-radius: 0 !important;  
  }

  .with-underline-full {
    text-decoration: none;  
    border-bottom: 2px solid #000;  
  }

  .with-underline-d {
    background-color: #17a2b8; 
    color: black; 
    text-decoration: none;  
    border-bottom: 2px solid #000;  
  }

.nav-icon {
  margin-right: 10px; /* Beri jarak antara ikon dan teks */
}

.nav-link {
  color: black; /* Warna teks default */
}

.nav-link:hover {
  background-color: #f4f4f4; /* Warna latar belakang saat hover */
  color: #17a2b8; /* Warna teks saat hover */
}

.sidebar {
  padding: 10px; /* Menambah ruang di dalam sidebar */
}
</style>


<aside class="main-sidebar sidebar-white-primary elevation-4">
  <!-- Admin Header -->
  <div class="brand-link custom-egg-blue">
    <span class="brand-text font-weight-dark">{{Auth::user()->name}}</span>
  </div>

  <!-- Dashboard Header -->
  <div class="brand-link custom-egg-blue-d">
    <span class="brand-text-d font-weight-dark">Dashboard</span>
  </div>

  <!-- Sidebar Navigation -->
  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
          <a href="/dashboard" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- Pengguna -->
        <li class="nav-item">
          <a href="/dashboard/pengguna" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Pengguna</p>
          </a>
        </li>
        <!-- Data Dokter -->
        <li class="nav-item">
          <a href="/dashboard/dokter" class="nav-link">
            <i class="nav-icon fas fa-heartbeat"></i>
            <p>Data Dokter</p>
          </a>
        </li>
        <!-- Parameter -->
        <li class="nav-item">
          <a href="/dashboard/parameter" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>Parameter</p>
          </a>
        </li>
        <!-- Logout -->
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>