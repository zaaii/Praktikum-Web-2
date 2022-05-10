<?php 
require "Koneksi.php";
require "Model.php";

$nama = $nomor = $alamat = $tgl_terakhir_bayar = "";

if (isset($_GET['id_member'])) {
    $id = $_GET['id_member'];
    $member = new Model();
    $result = $member->getMemberById($id);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14edc419b7.js"></script>
    <title>Peminjaman Buku</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3">
                <h1>Peminjaman Buku</h1>
                <hr>
                <a class="btn btn-danger my-2" href="Member.php"><i class="fa fa-arrow-left"></i> Kembali</a>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                        <div class="card-header bg-primary text-white">
                            <?php
                                if (isset($_GET['id_member'])) {
                                    echo "Edit Data Member";
                                    } else {
                                echo "Tambah Data Member";
                                }
                            ?>
                        </div>
                            <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama_member">Nama Member</label>
                                <input type="text" class="form-control" name="nama_member" id="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value = '" . $row[0]["nama_member"] . "'" : "value = '' "; ?> placeholder="Nama Member" required>
                            </div>
                            <div class="form-group">
                                <label for="nomor_member">Nomor Member</label>
                                <input type="text" class="form-control" name="nomor_member" id="nomor_member" <?php echo (isset($_GET['id_member']) ) ?  "value = '" . $row[0]["nomor_member"] . "'" : "value = '' "; ?> placeholder="Nomor Member" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" rows="3" required><?php echo (isset($_GET['id_member'])) ? $row[0]["alamat"] : ""; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tgTerakhirBayar">Tanggal Terakhir Bayar</label>
                                <input type="date" class="form-control" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $row[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> placeholder="Tanggal Terakhir Bayar" required>
                            </div>
                            <?php
                            if (isset($_GET['id_member'])) {
                                echo " <button type=\"submit\" name=\"update\" class=\"btn btn-secondary my-2\">Update</button>";
                            } else {
                                echo " <button type=\"submit\" name=\"submit\" class=\"btn btn-primary my-2\">Tambah</button>";
                            }
                            ?>
                        </form>
                        <?php
                        if(isset($_POST['submit'])){
                            $nama = $_POST['nama_member'];
                            $nomor = $_POST['nomor_member'];
                            $alamat = $_POST['alamat'];
                            $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
                            $member = new Model();
                            $member->setMember($nama, $nomor, $alamat, $tgl_terakhir_bayar);
                            header("Location: Member.php");
                        }
                        
                        if(isset($_POST['update'])){
                            $nama = $_POST['nama_member'];
                            $nomor = $_POST['nomor_member'];
                            $alamat = $_POST['alamat'];
                            $tgl_terakhir_bayar = $_POST['tgl_terakhir_bayar'];
                            $member = new Model();
                            $member->editMember($id, $nama, $nomor, $alamat, $tgl_terakhir_bayar);
                            header("Location: Member.php");
                        }
                        ?>
                    </div>
                        </div>
</body>
</html>