<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Dokter Anak</title>
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
            left: 320px;
            top: 100px;
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
        .form-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }
    .submit-btn {
    background-color: #004c70;
    color: white;
    border: none;
    padding: 20px;
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
    <div class="header">Profil Anak Sehat</div>
    <div class="container">
        <div class="profile-card">
            <!-- Back Button -->
            <button class="back-button" onclick="window.history.back()">Kembali</button>

            <!-- Profile Picture Container -->
            <div class="profile-picture-container">
                <div class="profile-picture">
                    <img src="{{ asset('storage/' . $user->fotoProfil) }}" alt="Profile Picture" id="profilePicture">
                    <div class="edit-overlay" onclick="triggerFileInput()">Edit</div>
                    <input type="file" id="fileInput" style="display: none;" onchange="submitForm()">
                </div>
            </div>

            <!-- Profile Info -->
            <div class="info">
                <div class="field">
                    <label>Full Name</label>
                    <input type="text" value="{{ $user->name }}" disabled>
                </div>
                <div class="field">
                    <label>Email</label>
                    <input type="email" value="{{ $user->email }}" disabled>
                </div>
                <div class="field">
                    <label>Jenis Kelamin</label>
                    <input type="text" value="{{ $user->gender }}" disabled>
                </div>
                <div class="field">
                    <label>No. Telpon</label>
                    <input type="text" value="{{ $user->phone }}" disabled>
                </div>
                <div class="field">
                    <label>Alamat</label>
                    <input type="text" value="{{ $user->address }}" disabled>
                </div>
                <div class="form-actions">
                    <button>Edit</button>
                    <a href="{{ route('jadwal_dokter', ['id' => $user->id]) }}" class="submit-btn" style="text-decoration:none">Jadwal</a>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Form for uploading the file -->
    <form id="uploadForm" action="{{ route('profil_update_dokter') }}" method="POST" enctype="multipart/form-data" style="display: none;">
        @csrf
        <input type="file" name="fotoProfil" id="hiddenFileInput">
    </form>
    
    <script>
        function triggerFileInput() {
            document.getElementById('fileInput').click();
        }
    
        function submitForm() {
            // Copy the selected file to the hidden form and submit it
            const fileInput = document.getElementById('fileInput');
            const hiddenFileInput = document.getElementById('hiddenFileInput');
            hiddenFileInput.files = fileInput.files;
            document.getElementById('uploadForm').submit();
        }
    </script>
    

</body>
</html>
