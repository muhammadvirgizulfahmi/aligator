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