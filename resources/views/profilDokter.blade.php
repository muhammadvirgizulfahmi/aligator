@include('home.navbar')

    <main class="container mx-auto py-8 px-4">
        <h2 class="text-2xl font-bold text-center text-blue-800 mb-6">Profil Dokter</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="dokter1.png" alt="Profil Dokter" class="w-24 h-24 mx-auto rounded-full">
                <h3 class="text-xl font-semibold text-center text-blue-800 mt-4">Prof. Dr. Ciasy Rahiana Sudjana</h3>
                <p class="text-center text-gray-600">Spesialis Anak</p>
                <p class="text-gray-700 mt-2 text-justify">Prof. Dr. Ciasy adalah pakar di bidang pediatri dengan pengalaman lebih dari 20 tahun...</p>
                <button class="mt-4 bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Selengkapnya</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow">
                <img src="dokter2.png" alt="Profil Dokter" class="w-24 h-24 mx-auto rounded-full">
                <h3 class="text-xl font-semibold text-center text-blue-800 mt-4">Dr. Reguly Pangabean</h3>
                <p class="text-center text-gray-600">Spesialis Anak</p>
                <p class="text-gray-700 mt-2 text-justify">Dr. Reguly memiliki keahlian khusus dalam menangani gangguan tumbuh kembang...</p>
                <button class="mt-4 bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Selengkapnya</button>
            </div>

            <div class="bg-white p-4 rounded-lg shadow">
                <img src="dokter3.png" alt="Profil Dokter" class="w-24 h-24 mx-auto rounded-full">
                <h3 class="text-xl font-semibold text-center text-blue-800 mt-4">Dr. Reguly Pangabean</h3>
                <p class="text-center text-gray-600">Spesialis Anak</p>
                <p class="text-gray-700 mt-2 text-justify">Dr. Reguly memiliki keahlian khusus dalam menangani gangguan tumbuh kembang...</p>
                <button class="mt-4 bg-blue-800 text-white px-4 py-2 rounded hover:bg-blue-700">Selengkapnya</button>
            </div>

            

            <!-- Tambahkan lebih banyak profil dokter sesuai kebutuhan -->
        </div>
    </main>

    @include('home.footer')