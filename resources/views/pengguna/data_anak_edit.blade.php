@use(App\Models\User)
@use(App\Models\Anak)
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
    .button-container {
        display: flex;
        justify-content: flex-start;
        gap: 20px; /* Increased space between buttons */
        margin-top: 10px; /* Space between form and buttons */
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
    .styled-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        border: 2px solid black;
    }
    .styled-table th,
    .styled-table td {
        border: 2px solid black;
        padding: 10px;
        text-align: center;
    }
    .styled-table th {
        background-color: #004c70;
        color: white;
    }
    .styled-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .styled-table tr:nth-child(odd) {
        background-color: white;
    }
    .edit-btn {
        background-color: #004c70;
        color: white;
        border: none;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        display: inline-block;
        text-align: center;
    }
    .edit-btn:hover {
        background-color: #003a52;
    }
</style>


<div class="container">
    <div class="section">
        <h2>Biodata Diri Anak</h2>
        <form action="{{ url('data-anak/update', $anak->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="nama-anak">Nama Anak:</label>
                <input type="text" id="nama-anak" name="nama" value="{{ $anak->nama }}">
            </div>
            <div class="form-group">
                <label for="tanggal-lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal-lahir" name="tgl_lahir" value="{{ \Carbon\Carbon::parse($anak->tgl_lahir)->format('Y-m-d') }}">
            </div>            
            <div class="form-group">
                <label for="jenis-kelamin">Jenis Kelamin:</label>
                <input type="text" id="jenis-kelamin" name="jenisKelamin" value="{{ $anak->jenisKelamin }}">
            </div>
            @auth
            @if (Auth::user()->role == User::ROLE_PENGGUNA)
            <div class="form-actions">
                <button type="submit" class="submit-btn">Update</button>
            </div>
            @endif
        </form>
    </div>

    <div class="section">
        <h2>Biodata Perkembangan Anak</h2>
            <table class="styled-table">
                <thead>
                    @if (Auth::user()->role == User::ROLE_PENGGUNA)
                    <tr style="border: 2px solid black;">
                        <th>Umur</th>
                        <th>Tinggi Badan</th>
                        <th>Berat Badan</th>
                        <th>Lingkar Kepala</th>
                        <th>Aksi</th>
                    </tr>
                    @else
                    <tr style="border: 2px solid black;">
                        <th>Umur</th>
                        <th>Tinggi Badan</th>
                        <th>Berat Badan</th>
                        <th>Lingkar Kepala</th>
                    </tr>
                    @endif
                </thead>
                <tbody>
                    @foreach ($perkembangan as $perkembangans)
                    <tr>
                        <td>{{ $perkembangans->umur }}</td>
                        <td>{{ $perkembangans->tinggiBadan }}</td>
                        <td>{{ $perkembangans->beratBadan }}</td>
                        <td>{{ $perkembangans->lingkarKepala }}</td>
                        @if (Auth::user()->role == User::ROLE_PENGGUNA)
                        <td>
                            <div style="display: flex; justify-content: center; gap: 20px; align-items: center;">
                                <a href="{{ route('perkembangan.edit', $perkembangans->id) }}" style="text-decoration:none;" class="btn submit-btn">Edit</a>
                                <form action="{{ route('perkembangan.destroy', $perkembangans->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                        @endif                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if (Auth::user()->role == User::ROLE_PENGGUNA)
            <div class="form-actions">
                <a href="{{ route('perkembangan.create', ['id' => $anak->id]) }}" class="submit-btn" style="text-decoration:none">Tambah</a>
            </div>
            @endif
    </div>
    
    <div class="section">
        <h2>Rekomendasi Kesehatan</h2>
    
        <!-- System Recommendations -->
        <table class="table">
            <thead>
                <tr>
                    <th>Rekomendasi Sistem</th>
                </tr>
            </thead>
            <tbody>
                @if (!empty($systemRecommendations))
                    @foreach ($systemRecommendations as $recommendation)
                    <tr>
                        <td>{{ $recommendation }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="1">Tidak ada rekomendasi kesehatan dari sistem.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    
        <!-- Doctor Recommendations -->
        <table class="table">
            <thead>
                <tr>
                    <th>Rekomendasi Dokter Anak</th>
                </tr>
            </thead>
            <tbody>
                @if ($doctorRecommendations->isNotEmpty())
                    @foreach ($doctorRecommendations as $recommend)
                    <tr>
                        <td>{{ $recommend->recommendation }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="1">Belum ada rekomendasi dari dokter anak.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    
        <!-- Button to trigger modal -->

        
        @if (Auth::user()->role == User::ROLE_DOKTER)
        <!-- Modal -->
        <div class="modal fade" id="addRecommendationModal" tabindex="-1" aria-labelledby="addRecommendationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('recommendations.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_anak" value="{{ $anak->id }}">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="recommendation">Rekomendasi:</label>
                                <textarea id="recommendation" name="recommendation" class="form-control" rows="4" required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="submit-btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
    

    </div>
</div>
@endauth
@include('home.footer')
