<?php

$produk = [
    ["nama" => "Buku Pemrograman Web", "harga" => 85000, "stok" => 15],
    ["nama" => "Mouse Wireless Logitech", "harga" => 120000, "stok" => 5],
    ["nama" => "Keyboard Mekanik", "harga" => 450000, "stok" => 0],
    ["nama" => "Flashdisk SanDisk 64GB", "harga" => 75000, "stok" => 20]
];


function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}


function cekStatusStok($stok) {
    if ($stok > 10) {
        return "<span style='color: green; font-weight: bold;'>Stok Aman</span>";
    } elseif ($stok > 0) {
        return "<span style='color: orange; font-weight: bold;'>Stok Menipis</span>";
    } else {
        return "<span style='color: red; font-weight: bold;'>Habis</span>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 13 - Penerapan Array & Function PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { width: 60%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #007BFF; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Aplikasi Manajemen Stok Produk</h2>
    <p>Penerapan Array Multidimensi dan Function pada PHP.</p>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga Satuan</th>
            <th>Status Ketersediaan</th>
        </tr>
        
        <?php
        
        $no = 1;
        foreach ($produk as $item) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . $item['nama'] . "</td>";
            echo "<td>" . formatRupiah($item['harga']) . "</td>"; 
            echo "<td>" . cekStatusStok($item['stok']) . "</td>"; 
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>