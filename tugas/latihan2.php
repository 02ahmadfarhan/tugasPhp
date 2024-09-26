<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Switch Case</title>
</head>
<body>
    <h1>Contoh Switch Case</h1>

    <?php
    $hari = 3;

    switch($hari){
        case 1:
            echo "Hari Senin";
            break;
        case 2:
            echo "<p>Hari Selasa</p>";
            break;
        case 3:
            echo "<p>Hari Rabu</p>";
            break;
        case 4:
            echo "<p>Hari Kamis</p>";
            break;
        case 5:
            echo "<p>Hari Jumat</p>";
            break;
        case 6:
            echo "<p>Hari Sabtu</p>";
            break;
        case 7:
            echo "<p>Hari Minggu</p>";
            break;
        default:
            echo "<p>Hari Tidak Dikenal</p>";
    }
    ?>
</body>
</html>