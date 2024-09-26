<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contoh percabangan bersarang - Diskon Pembelian</h1>

    <?php
    $jenisPelanggan = "Member";
    $totalBelanja = 750000;

    echo "<p>Jenis pelanggan: $jenisPelanggan</p>";
    echo "<p>Total belanja: Rp " . number_format($totalBelanja, 0, ',', '.') . "</p>";

    if ($jenisPelanggan == "Member") {
        if ($totalBelanja > 1000000) {
            echo "<p>Anda mendapatkan diskon 20%.</p>";
        } elseif ($totalBelanja >= 500000) {
            echo "<p>Anda mendapatkan diskon 10%.</p>";
        } else {
            echo "<p>Anda mendapatkan diskon 5%.</p>";
        }
    } elseif ($jenisPelanggan == "Non-Member") {
        if ($totalBelanja > 1000000) {
            echo "<p>Anda mendapatkan diskon 10%.</p>";
        } elseif ($totalBelanja >= 500000) {
            echo "<p>Anda mendapatkan diskon 5%.</p>";
        } else {
            echo "<p>Anda tidak mendapatkan diskon.</p>";
        }
    } else {
        echo "<p>Jenis pelanggan tidak valid.</p>";
    }
    ?>
</body>
</html>
