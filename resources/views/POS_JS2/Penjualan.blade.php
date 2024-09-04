<!DOCTYPE html>
<html>
<head>
    <title>Halaman Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .thank-you {
            text-align: center;
            font-size: 1.5em;
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Halaman Penjualan</h1>
    <p>Berikut adalah transaksi yang tercatat:</p>

    <table>
        <tr>
            <th>Item</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        @foreach ($transaksi as $item)
            <tr>
                <td>{{ $item['item'] }}</td>
                <td>{{ $item['qty'] }}</td>
                <td>{{ number_format($item['price'], 0, ',', '.') }} IDR</td>
            </tr>
        @endforeach
    </table>

    <div class="thank-you">
        <p>Terima Kasih Telah berbelanja di Toko Ods_Shop!</p>
    </div>
</body>
</html>