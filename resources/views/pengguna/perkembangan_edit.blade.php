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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="{{ route('perkembangan.update', ['id' => $perkembangan->id]) }}" enctype="multipart/form-data">
            @csrf
            @method('put')

                <input type="hidden" name="id_anak" value="{{ $anak->id }}"> <!-- Add this line -->

                <div class="form-group">
                    <label for="umur">Umur (tahun):</label>
                    <input type="number" id="umur" name="umur" required value="{{ $perkembangan->umur }}">
                </div>
                <div class="form-group">
                    <label for="tinggiBadan">Tinggi Badan (cm):</label>
                    <input type="number" id="tinggiBadan" name="tinggiBadan" required value="{{ $perkembangan->tinggiBadan }}">
                </div>
                <div class="form-group">
                    <label for="beratBadan">Berat Badan (kg):</label>
                    <input type="number" id="beratBadan" name="beratBadan" required value="{{ $perkembangan->beratBadan }}">
                </div>
                <div class="form-group">
                    <label for="lingkarKepala">Lingkar Kepala (cm):</label>
                    <input type="number" id="lingkarKepala" name="lingkarKepala" required value="{{ $perkembangan->lingkarKepala }}">
                </div>
                <div class="form-actions">
                    <a href="{{ route('anak.edit', $anak->id) }}" style="text-decoration:none" class='submit-btn'>Kembali</a>
                    <button type="submit" class="submit-btn">Submit</button>
                </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            </form>
        </div>
    </div>

@include('home.footer')