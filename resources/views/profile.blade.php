<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        .profile {
            text-align: center;
        }
        .profile img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 2px solid #ccc;
        }
        .info {
            background-color: #eee;
            padding: 12px;
            margin: 8px 0;
            border-radius: 6px;
            width: 220px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="profile">
        <!-- Bisa ganti dengan gambar dari public/images -->
        <img src="{{ asset('images/profile.png') }}" alt="Foto Profil">
        
        <div class="info">Allisya Syakdari</div>
        <div class="info">D</div>
        <div class="info">2317051017</div>
    </div>
</body>
</html>
