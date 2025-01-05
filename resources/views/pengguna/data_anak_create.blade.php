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
        <div class="section">
            <h2>Biodata Diri Anak</h2>
            <form>
                <div class="form-group">
                    <label for="nama-anak">Nama Anak:</label>
                    <input type="text" id="nama-anak" name="nama-anak">
                </div>
                <div class="form-group">
                    <label for="tanggal-lahir">Tanggal Lahir:</label>
                    <input type="date" id="tanggal-lahir" name="tanggal-lahir">
                </div>
                <div class="form-group">
                    <label for="jenis-kelamin">Jenis Kelamin:</label>
                    <input type="text" id="jenis-kelamin" name="jenis-kelamin">
                </div>
                <div class="form-group">
                    <label for="umur">Umur:</label>
                    <input type="text" id="umur" name="umur">
                </div>
                    <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>

        <div class="section">
            <h2>Biodata Perkembangan Anak</h2>
            <form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Umur</th>
                            <th>Tinggi Badan</th>
                            <th>Berat Badan</th>
                            <th>Lingkar Kepala</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="number" name="umur"></td>
                            <td><input type="text" name="tinggi-badan"></td>
                            <td><input type="text" name="berat-badan"></td>
                            <td><input type="text" name="lingkar-kepala"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="submit-btn">Submit</button>
            </form>
        </div>
        
        <div class="section">
            <h2>Rekomendasi Kesehatan</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sistem</th>
                            <th>Dokter Anak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>

@include('home.footer')