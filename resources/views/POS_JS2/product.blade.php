<!DOCTYPE html>
<html>
<head>
    <title>Halaman Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f4f4f4;
            margin: 5px 0;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Daftar Produk: {{ $category }}</h1>
    <p>Temukan berbagai produk menarik dalam kategori ini. Pilih produk yang sesuai dengan kebutuhan Anda.</p>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product }}</li>
        @endforeach
    </ul>
</body>
</html>
