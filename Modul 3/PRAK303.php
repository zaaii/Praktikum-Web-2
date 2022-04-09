<!-- program untuk mencek suatu bilangan pada deret, jika bilangan tersebut  ditambah 7 apakah merupakan bilangan kelipatan 5. Input pertama adalah batas bawah  deret. Input baris kedua adalah batas atas deret bilangan. Output adalah menampilkan deret bilangan dan bilangan yang diminta diganti dengan gambar bintang. do while -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>
<body>
    <form action="" method="POST">
        Batas Bawah : <input type="number" name="bawah"></br>
        Batas Atas : <input type="number" name="atas"></br>
        <input type="submit" value="submit" name="submit"></br>
    </form></br>
</body>
</html>
<?php
if (isset($_POST['submit'])){
    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];
    $i = $bawah;
    do{
        if (($i+7)%5==0){
            echo "<img src='bintang.png' width='15px' height='15px'>";
        }else{
            echo $i;
        }
        echo "&nbsp";
        $i++;
    }while($i<=$atas);
}
?>