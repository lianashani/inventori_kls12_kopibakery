<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Barang Masuk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            font-size: 12px; /* Font size */
        }
        .receipt {
            padding: 15px;
            max-width: 300px;
            margin: 0 auto;
            background: #fff;
            border: 1px solid #000;
            font-size: 11px; /* Smaller font size for receipts */
        }
        .receipt-header {
            text-align: center;
            margin-bottom: 10px;
        }
        .receipt-header h1 {
            margin: 0;
            font-size: 16px; /* Font size */
            font-weight: bold;
        }
        .receipt-header p {
            margin: 0;
            font-size: 12px;
        }
        .receipt-table {
            width: 100%;
            border-collapse: collapse;
        }
        .receipt-table td {
            padding: 4px 0;
            vertical-align: top;
            border-bottom: 1px dashed #ddd;
        }
        .receipt-table td label {
            display: block;
            font-weight: bold;
            font-size: 12px;
        }
        .receipt-table td.value {
            text-align: right;
            font-size: 12px;
        }
        .receipt-footer {
            text-align: center;
            margin-top: 10px;
        }
        .text-center {
            text-align: center;
        }
        .btn {
            padding: 6px 12px;
            font-size: 12px;
            border-radius: 4px;
            text-decoration: none;
            margin: 5px;
        }
        .btn-info {
            background-color: #17a2b8;
            color: #fff;
        }
        .btn-warning {
            background-color: #ffc107;
            color: #000;
        }
        @media print {
            .btn-back {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="receipt">
        <div class="receipt-header">
            <h1>FastDirect</h1>
            <p>Barang Masuk</p>
        </div>
        <table class="table receipt-table">
            <tbody>
                <!-- ID Barang Masuk and Customer Details -->
                <tr>
                    <td><label>ID Barang Masuk:</label></td>
                    <td class="value">{{ $barangmasuk->id }}</td>
                </tr>
                <tr>
                    <td><label>Nama Supplier:</label></td>
                    <td class="value">{{ $barangmasuk->supplier->nama_supplier }}</td>
                </tr>
                <tr>
                    <td><label>ID Barang:</label></td>
                    <td class="value">{{ $barangmasuk->barang->id }}</td>
                </tr>
                <tr>
                    <td><label>Nama Barang:</label></td>
                    <td class="value">{{ $barangmasuk->barang->nama_barang }}</td>
                </tr>
                <tr>
                    <td><label>Jumlah:</label></td>
                    <td class="value">{{ $barangmasuk->jumlah }}</td>
                </tr>
                <tr>
                    <td><label>Harga per Item:</label></td>
                    <td class="value">{{ 'Rp ' . number_format($barangmasuk->barang->harga_beli, 0, ',', '.') }}</td>
                </tr>

                <!-- Separator Line -->
                <tr>
                    <td colspan="2"></td>
                </tr>

                <!-- Total and Payment Date -->
                <tr>
                    <td><label>Total:</label></td>
                    <td class="value">{{ 'Rp ' . number_format($barangmasuk->jumlah * $barangmasuk->barang->harga_beli, 0, ',', '.') }}</td>
                </tr>
                <tr>
                    <td><label>Tanggal Pembayaran:</label></td>
                    <td class="value">{{ $tgl_pembayaran }}</td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td colspan="2" class="text-center">
                        <strong>Terima Kasih!</strong><br>
                        <small>{{ $barangmasuk->nama_customer }}</small>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <div class="text-center">
        <a class="btn btn-info btn-back" href="/barang_keluar">Kembali</a>
        <a href="javascript:window.print()" class="btn btn-warning btn-back">Cetak Struk</a>
    </div>
</body>
</html>
