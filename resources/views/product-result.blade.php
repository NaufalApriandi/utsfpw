<!-- resources/views/product-result.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Result</title>
    <style>
        body {
            background-color: #3498db; /* Warna biru */
            color: #fff; /* Warna teks putih */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            border-bottom: 2px solid #fff; /* Garis bawah pada judul */
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #fff; /* Garis pada sel tabel */
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #2980b9; /* Warna latar belakang kolom header */
        }

        tr:nth-child(even) {
            background-color: #3498db; /* Warna latar belakang baris genap */
        }
    </style>
</head>
<body>
    <h2>Hasil Pengolahan Data Barang</h2>

    <table>
        <tr>
            <th>Kode Barang</th>
            <td>{{ $product->KodeBarang }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $product->NamaBarang }}</td>
        </tr>
        <tr>
            <th>Jenis Varian</th>
            <td>{{ $product->JenisVarian }}</td>
        </tr>
        <tr>
            <th>Qty</th>
            <td>{{ $product->Qty }}</td>
        </tr>
        <tr>
            <th>Harga Jual</th>
            <td>{{ $product->HargaJual }}</td>
        </tr>
        <tr>
            <th>Total Harga Jual</th>
            <td>{{ $totalHargaJual }}</td>
        </tr>
        <tr>
            <th>Potongan Harga (%)</th>
            <td>{{ $diskon * 100 }}</td>
        </tr>
        <tr>
            <th>Harga Setelah Diskon</th>
            <td>{{ $hargaSetelahDiskon }}</td>
        </tr>
    </table>
</body>
</html>
