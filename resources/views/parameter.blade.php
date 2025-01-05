@include('home.navbar')
    <style>
                /* Table Styles */
                .container {
            margin: 20px auto;
            max-width: 1500px;
            text-align: center;
        }
        .table-title {
            background-color: #00a7b3;
            color: white;
            padding: 10px 0;
            font-size: 20px;
            font-weight: bold;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #e0f7f9;
        }
        tr:nth-child(even) {
            background-color: #f0fafa;
        }
    </style>
    <!-- Table Section -->
    <div class="container">
        <div class="table-title">Parameter Stunting Berdasarkan Pertumbuhan Anak</div>
        <table>
            <thead>
                <tr>
                    <th>Tinggi Badan (cm)</th>
                    <th>Berat Badan (kg)</th>
                    <th>Lingkar Kepala (cm)</th>
                    <th>Umur Anak (Tahun)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>130 cm</td>
                    <td>20 kg</td>
                    <td>15 cm</td>
                    <td>12 Tahun</td>
                </tr>
                <tr>
                    <td>-- cm</td>
                    <td>-- kg</td>
                    <td>-- cm</td>
                    <td>-- Tahun</td>
                </tr>
                <tr>
                    <td>-- cm</td>
                    <td>-- kg</td>
                    <td>-- cm</td>
                    <td>-- Tahun</td>
                </tr>
                <tr>
                    <td>-- cm</td>
                    <td>-- kg</td>
                    <td>-- cm</td>
                    <td>-- Tahun</td>
                </tr>
            </tbody>
        </table>
    </div>

@include('home.footer')