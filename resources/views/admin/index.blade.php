<x-layout>
    <x-slot name='judul_halaman'>Dashboard</x-slot>
    <x-slot name='nama_halaman'>Halaman Dashboard</x-slot>
    <x-slot name='konten_halaman'>
        <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>2,359</h3>
                  <p>Total Pengguna</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>420</h3>
                  <p>Kasus Stunting</p>
                </div>
                <div class="icon">
                  <i class="fas fa-chart-bar"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>2,035</h3>
                  <p>Data Dokter</p>
                </div>
                <div class="icon">
                  <i class="fas fa-heartbeat"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>5</h3>
                  <p>Parameter Aktif</p>
                </div>
                <div class="icon">
                  <i class="fas fa-cogs"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
    </x-slot>
</x-layout>