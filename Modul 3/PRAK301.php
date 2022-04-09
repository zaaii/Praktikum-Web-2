<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="POST">
       Jumlah Peserta: <input type="number" name="nilai"></br>
         <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    $nilai = $_POST['nilai'];
    $i=1;
    while ($i <= $nilai){
        if ($i%2 == 0){
            echo "<h2><font color='red'>Peserta Ke-$i</font></br>";
        } else {
            echo "<h2><font color='green'>Peserta Ke-$i</font></br>";
        }
        $i++;
    }
}
?>