<!-- resources/views/product-form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Information</title>
    <style>
        body {
            background-color: #e0eaf0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px; /* Adjust the width as needed */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #1565c0; /* Blue color for labels */
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #1565c0; /* Blue color for borders */
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #1565c0; /* Blue color for the submit button */
            color: #ffffff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #003c8f; /* Darker blue color on hover */
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('process-product') }}">
        
        @csrf
        <label for="KodeBarang">Kode Barang:</label>
        <input type="text" name="KodeBarang" required>
        <br>
        <label for="NamaBarang">Nama Barang:</label>
        <input type="text" name="NamaBarang" required>
        <br>
        <label for="JenisVarian">Jenis Varian:</label>
        <input type="text" name="JenisVarian" required>
        <br>
        <label for="Qty">Qty:</label>
        <input type="number" name="Qty" required>
        <br>
        <label for="HargaJual">Harga Jual:</label>
        <input type="number" name="HargaJual" required>
        <br>
        <input type="submit" value="Proses">
    </form>
</body>
</html>
