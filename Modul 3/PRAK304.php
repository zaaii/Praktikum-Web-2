<?php
$star = NULL;
$pict = "bintang.png";

if (isset($_POST['star'])) {
    $star = $_POST['star'];
}
if (isset($_POST['tambah'])){
    $star++;
}
if(isset($_POST['kurang'])){
    $star--;
}

?>
<?php
for($i=0; $i<$star; $i++){
    echo '<img src='.$pict.' width=100 height=100>';
}
?>

<?php 
if($star == 0):
?>
<form action="" method="POST">
    Jumlah bintang <input type ="number" name="star" required><br>
    <button type = "submit">Submit</button><br>
</form>
<?php 
endif; 
if($star != 0):
?>
    <form action="" method="POST">
        <button name="tambah">Tambah</button>
        <input type='hidden' name='star' value='<?= $star; ?>'/>
        <button name="kurang">Kurang</button>
    </form>
<?php endif;?>