<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Barang Keluar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            color: #333;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .table-header {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        @media print {
            .btn {
                display: none;
            }
        }
    </style>
</head>
<body>


    <div class="table-header">
        <h2>Laporan Barang Keluar</h2>
        <br>
    </div>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Id Barang</th>
                <th>Nama Customer</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangKeluar as $barangkeluar)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barangkeluar->barang->nama_barang }}</td>
                    <td>{{ $barangkeluar->nama_supplier }}</td>
                    <td>{{ $barangkeluar->jumlah }}</td>
                    <td>{{ $barangkeluar->created_at->format('Y-m-d') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="javascript:window.print()" class="btn">Cetak Laporan</a>
</body>
</html>
