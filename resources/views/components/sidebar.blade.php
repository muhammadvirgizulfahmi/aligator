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

.nav-item {
    display: flex;
    justify-content: center; /* Centers the button horizontally */
    margin-bottom: 15px; /* Adds space between each item */
  }

  .nav-link {
    background: none;
    border: none;
    padding: 10px 20px; /* Adds some padding for a more comfortable button */
    display: flex;
    align-items: center;
    text-align: left;
    width: 100%;
    justify-content: flex-start; /* Aligns text to the left */
  }

  .nav-item .nav-link .nav-icon {
    margin-right: 10px; /* Keeps margin between icon and text */
  }

  .nav-link:hover {
    background-color: #f4f4f4; /* Add hover effect */
    color: #17a2b8; /* Highlight color on hover */
  }
</style>

<!-- Sidebar Navigation -->
<aside class="main-sidebar sidebar-white-primary elevation-4">
  <div class="brand-link custom-egg-blue">
    <span class="brand-text font-weight-dark">{{ Auth::user()->name }}</span>
  </div>

  <div class="brand-link custom-egg-blue-d">
    <span class="brand-text-d font-weight-dark">Dashboard</span>
  </div>

  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
        <!-- Dashboard -->
        <li class="nav-item">
          <button onclick="window.location.href='/dashboard'" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </button>
        </li>
        <!-- Pengguna -->
        <li class="nav-item">
          <button onclick="window.location.href='/dashboard/pengguna'" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Pengguna</p>
          </button>
        </li>
        <!-- Data Dokter -->
        <li class="nav-item">
          <button onclick="window.location.href='/dashboard/dokter'" class="nav-link">
            <i class="nav-icon fas fa-heartbeat"></i>
            <p>Data Dokter</p>
          </button>
        </li>
        <!-- Parameter -->
        <li class="nav-item">
          <button onclick="window.location.href='/dashboard/parameter'" class="nav-link">
            <i class="nav-icon fas fa-cogs"></i>
            <p>Parameter</p>
          </button>
        </li>
        <!-- Logout -->
        <li class="nav-item">
          <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p style="margin: 0;">Logout</p>
          </button>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </nav>
  </div>
</aside>