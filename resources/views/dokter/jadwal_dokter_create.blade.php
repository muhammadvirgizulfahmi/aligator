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

    
    .submit-btn:hover {
        background-color: #003a52;
    }
    </style>
</head>
<body>
    <div class="header">Tambah Jadwal</div>
    <div class="container">
        <div class="profile-card">
            <!-- Back Button -->
            <button class="back-button" onclick="window.history.back()">Kembali</button>

                        <div class="info">
                            <div class="field">
                                <label>Hari</label>
                                <input type="date" value="hari" required>
                            </div>
                            <div class="field">
                                <label>Jam Buka</label>
                                <input type="jamBuka" value="jamBuka" required>
                            </div>
                            <div class="field">
                                <label>Jam Tutup</label>
                                <input type="time" value="jamTutup" required>
                            </div>
                            <div class="field">
                                <label>ID Dokter</label>
                                <input type="number" value="id_dokter" required hidden>
                            </div>
                            <div class="-form-actions">
                                <button>Edit</button>
                                <a href="{{ route('jadwal_dokter') }}">Jadwal</a>
                            </div>
                        </div>
        </div>
    </div>
    

</body>
</html>
