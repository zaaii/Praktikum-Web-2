<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>
<body>
    <form action="" method="POST">
        Tinggi :<input type="number" name="tinggi"></br>
        Alamat Gambar: <input type="text" name="alamat"></br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    $tinggi = $_POST['tinggi'];
    $alamat = $_POST['alamat'];
    $i=0;
    while( $i<$tinggi ){
        $j=0;
        while( $j < $i ){
            echo "&nbsp ";
            $j++;
        }
        $j=0;
        while ( $j<$tinggi-$i) {
            echo "<img src='$alamat' width='10px' height='10px'>";
            $j++;
        }
        $i++;
        echo "<br>";
    }
}
?>