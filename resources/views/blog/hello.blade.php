<!-- <html> 
    <body> 
        <h1>Hello, {{ $name }}</h1> 
    </body> 
</html>  -->

<!-- Mengubah agar dapat menampilkan 2 parameter --> 
{{-- <html> 
 <body> 
     <h1>Hello, {{ $name }}</h1> 
     <h1>You are {{ $occupation }}</h1> 
 </body> 
</html>  --}}

<!-- Membuat view untuk halaman utama soal praktikum-->
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to ODS Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin: 0;
        }
        p {
            color: #555;
            font-size: 18px;
        }
        .highlight {
            color: #ff00e1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang, <span class="highlight">{{ $name }}</span></h1>
        <p>Terima kasih telah mengunjungi ODS Shop. Nikmati berbagai produk terbaik kami!</p>
    </div>
</body>
</html>