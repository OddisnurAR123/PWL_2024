<!DOCTYPE html>
<html>
<head>
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        h1 {
            color: #333;
        }
        .profile {
            background: #f9f9f9;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
        }
        .profile p {
            font-size: 1.1em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="profile">
        <h1>Profil Pengguna</h1>
        <p>ID: {{ $id }}</p>
        <p>Nama: {{ $name }}</p>
    </div>
</body>
</html>