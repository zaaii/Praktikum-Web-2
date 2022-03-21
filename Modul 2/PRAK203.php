<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203 - Konversi Suhu</title>
</head>
<body>
    <form action="" method="post">
        Nilai <input type="number" name="suhu"></input></br>
        Dari : </br>
        <input type="radio" name="darisuhu" value="Celcius">Celcius</br>
        <input type="radio" name="darisuhu" value="Fahrenheit">Fahrenheit</br>
        <input type="radio" name="darisuhu" value="Reamur">Reamur</br>
        <input type="radio" name="darisuhu" value="Kelvin">Kelvin</br>
        Ke : </br>
        <input type="radio" name="kesuhu" value="Celcius">Celcius</br>
        <input type="radio" name="kesuhu" value="Fahrenheit">Fahrenheit</br>
        <input type="radio" name="kesuhu" value="Reamur">Reamur</br>
        <input type="radio" name="kesuhu" value="Kelvin">Kelvin</br>
        <input type="submit" name="submit" value="Konversi"></input>
    </form>
</body>
</html>
<?php
if (isset($_POST["submit"])) {
    $suhu = $_POST['suhu'];
    $darisuhu = $_POST['darisuhu'];
    $kesuhu = $_POST['kesuhu'];
    if ($darisuhu == "Celcius") {
        if ($kesuhu == "Celcius") {
            echo "<h2>Hasil Konversi : $suhu &deg;C</h2>";
        } elseif ($kesuhu == "Fahrenheit") {
            echo "<h2>Hasil Konversi : " . ($suhu * 1.8 + 32) . " &deg;F</h2>";
        } elseif ($kesuhu == "Reamur") {
            echo "<h2>Hasil Konversi : " . ($suhu * 0.8) . " &deg;R</h2>";
        } elseif ($kesuhu == "Kelvin") {
            echo "<h2>Hasil Konversi : " . ($suhu + 273.15) . " &deg;K</h2>";
        }
    } elseif ($darisuhu == "Fahrenheit") {
        if ($kesuhu == "Celcius") {
            echo "<h2>Hasil Konversi : " . ($suhu - 32) / 1.8 . " &deg;C</h2>";
        } elseif ($kesuhu == "Fahrenheit") {
            echo "<h2>Hasil Konversi : $suhu &deg;F</h2>";
        } elseif ($kesuhu == "Reamur") {
            echo "<h2>Hasil Konversi : " . ($suhu - 32) / 2.25 . " &deg;R</h2>";
        } elseif ($kesuhu == "Kelvin") {
            echo "<h2>Hasil Konversi : " . ($suhu + 459.67) / 1.8 . " &deg;K</h2>";
        }
    } elseif ($darisuhu == "Reamur") {
        if ($kesuhu == "Celcius") {
            echo "<h2>Hasil Konversi : " . ($suhu * 1.25) . " &deg;C</h2>";
        } elseif ($kesuhu == "Fahrenheit") {
            echo "<h2>Hasil Konversi : " . ($suhu * 2.25 + 32) . " &deg;F</h2>";
        } elseif ($kesuhu == "Reamur") {
            echo "<h2>Hasil Konversi : $suhu &deg;R</h2>";
        } elseif ($kesuhu == "Kelvin") {
            echo "<h2>Hasil Konversi : " . ($suhu + 273.15) / 0.8 . " &deg;K</h2>";
        }
    } elseif ($darisuhu == "Kelvin") {
        if ($kesuhu == "Celcius") {
            echo "<h2>Hasil Konversi : " . ($suhu - 273.15) . " &deg;C</h2>";
        } elseif ($kesuhu == "Fahrenheit") {
            echo "<h2>Hasil Konversi : " . ($suhu * 1.8 - 459.67) . " &deg;F</h2>";
        } elseif ($kesuhu == "Reamur") {
            echo "<h2>Hasil Konversi : " . ($suhu - 273.15) * 0.8 . " &deg;R</h2>";
        } elseif ($kesuhu == "Kelvin") {
            echo "<h2>Hasil Konversi : $suhu &deg;K</h2>";
        }
    }
}