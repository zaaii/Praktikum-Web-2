<?php 
require "Koneksi.php";
require "Model.php";

$tglPinjam = $tglKembali = "";

if (isset($_GET['id_peminjaman'])) {
    $id = $_GET['id_peminjaman'];
    $peminjaman = new Model();
    $result = $peminjaman->getPeminjamanById($id);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

session_start();
if (isset($_SESSION['nomor_member'])) :
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
                <a class="btn btn-danger my-2" href="Peminjaman.php"><i class="fa fa-arrow-left"></i> Kembali</a>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                        <div class="card-header bg-primary text-white">
                            <?php
                                if (isset($_GET['id_peminjaman'])) {
                                    echo "Edit Data Peminjaman";
                                    } else {
                                echo "Tambah Data Peminjaman";
                                }
                            ?>
                        </div>
                            <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="tgl_peminjaman">Tanggal Peminjaman</label>
                                <input type="date" class="form-control" name="tgl_peminjaman" id="tgl_peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $row[0]["tgl_peminjaman"] . "" : "value = '' "; ?> placeholder="Tanggal Peminjaman" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_kembali">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" <?php echo (isset($_GET['id_peminjaman']) ) ?  "value = " . $row[0]["tgl_kembali"] . "" : "value = '' "; ?> placeholder="Tanggal Pengembalian" required>
                            </div>

                            <?php
                            if (isset($_GET['id_peminjaman'])) {
                                echo " <button type=\"submit\" name=\"update\" class=\"btn btn-secondary my-2\">Update</button>";
                            } else {
                                echo " <button type=\"submit\" name=\"submit\" class=\"btn btn-primary my-2\">Tambah</button>";
                            }
                            ?>
                        </form>
                        <?php
                        if(isset($_POST['submit'])){
                            $tglPinjam = $_POST['tgl_peminjaman'];
                            $tglKembali = $_POST['tgl_kembali'];
                            $peminjaman = new Model();
                            $peminjaman->setPeminjaman($tglPinjam, $tglKembali);
                            header("Location: Peminjaman.php");
                        }
                        
                        if(isset($_POST['update'])){
                            $tglPinjam = $_POST['tgl_peminjaman'];
                            $tglKembali = $_POST['tgl_kembali'];
                            $peminjaman = new Model();
                            $peminjaman->editPeminjaman($id, $tglPinjam, $tglKembali);
                            header("Location: Peminjaman.php");
                        }
                        ?>
                    </div>
                        </div>
</body>
</html>
<?php
else :
    header("Location: ErrorPage.php");
endif;
?>