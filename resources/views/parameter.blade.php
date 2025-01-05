@use(App\Models\Parameter)
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
                    <th>Umur Anak (Tahun)</th>
                    <th>Tinggi Badan (cm)</th>
                    <th>Berat Badan (kg)</th>
                    <th>Lingkar Kepala (cm)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($parameter as $parameters)
                <tr>
                    {{-- <td>{{ $loop->iteration }}</td> --}}
                    <td>{{ $parameters->umur }}</td>
                    <td>{{ $parameters->tinggiBadan }}</td>
                    <td>{{ $parameters->beratBadan }}</td>
                    <td>{{ $parameters->lingkarKepala }}</td>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>

@include('home.footer')