<!-- PHP -->
<?php
$Jari=4.2;
$Tinggi=5.4;
$volume=3.14*$Jari*$Jari*$Tinggi; // Rumus volume tabung
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum - no2</title>
</head>
<body>
    Hasil volume dari bangun ruang tabung adalah</br>
    <!-- PHP -->
    <?php
    echo number_format($volume,3)." m3";
    ?>
</body>
</html>