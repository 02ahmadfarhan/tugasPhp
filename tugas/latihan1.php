<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan if,elseif,else</title>
</head>
<body>
    <h1>Contoh If, Else If, Else</h1>
    <?php 
    $usia = 25;

    if($usia < 13){
        echo "<p>Kamu masih anak-anak.</p>";
    }elseif($usia >= 13 && $usia < 20){
        echo "<p>Kamu masih remaja.</p>";
    }else{
        echo "<p>Kamu sudah dewasa.</p>";
    }
    ?>
</body>
</html>