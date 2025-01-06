<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Dokter Anak</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }
        .header {
            background-color: #2d2f59;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 30px;
        }
        .profile-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 600px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .profile-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .profile-card .info {
            width: 100%;
        }
        .profile-card button {
            background-color: #2d2f59;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 5px;
            font-size: 16px;
        }
        .profile-card button:hover {
            background-color: #4a4c82;
        }
        .profile-card .field {
            margin: 10px 0;
            text-align: left;
        }
        .profile-card .field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .profile-card .field input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        .actions {
            display: flex;
            justify-content: center;
        }

        /* New styling for button and profile picture */
        .back-button {
            position:absolute;
            left: 340px;
            top: 120px;
            background-color: #2d2f59;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            z-index: 10;
        }

        .profile-picture-container {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .profile-picture {
            position: relative;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .edit-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .profile-picture:hover .edit-overlay {
            opacity: 1;
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
</head>
<body>
    <div class="header">Profil Anak Sehat</div>
    <div class="container">
        <div class="profile-card">
            <!-- Back Button -->
            <button class="back-button" onclick="window.history.back()">Kembali</button>

                        <!-- Profile Picture Container -->
                        <div class="profile-picture-container">
                            <div class="profile-picture">
                                <img src="{{ asset('storage/' . $user->fotoProfil) }}" alt="Profile Picture" id="profilePicture">
                                <input type="file" id="fileInput" style="display: none;" onchange="submitForm()">
                            </div>
                        </div>

            <!-- Profile Info -->
            <div class="info">
                <table class="styled-table">
                    <thead>
                        <tr style="border: 2px solid black;">
                            <th>Hari</th>
                            <th>Jam Buka</th>
                            <th>Jam Tutup</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwals as $jadwal)
                        <tr>
                            <td>{{ $jadwal->umur }}</td>
                            <td>{{ $jadwal->tinggiBadan }}</td>
                            <td>{{ $jadwal->beratBadan }}</td>
                            <td>{{ $jadwal->lingkarKepala }}</td>
                            <td>
                                <div style="display: flex; justify-content: center; gap: 20px; align-items: center;">
                                    <a href="{{ route('perkembangan.edit', $jadwal->id) }}" style="text-decoration:none;" class="btn submit-btn">Edit</a>
                                    <form action="{{ route('perkembangan.destroy', $jadwal->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>                
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="form-actions">
                    <a href="{{ route('jadwal.create', ['id' => $jadwals->id]) }}" class="submit-btn" style="text-decoration:none">Tambah</a>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>
