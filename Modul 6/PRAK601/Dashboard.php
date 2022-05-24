<?php
require "Login.php";

session_start();
if (isset($_SESSION['nomor_member'])):
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
                <a class="btn btn-danger" href="Logout.php" style="float:right;"><i class="fas fa-sign-out-alt"></i> logout</a>
                <h1>Peminjaman Buku</h1>
                <hr>
                
                <div class="text-center" style="padding-bottom: 10px;">
                    <h2> Selamat Datang, <?= $_SESSION['nomor_member']; ?></h2>
                    <p> Silahkan pilih menu yang tersedia </p></br>
                    <a class="btn btn-primary" href="Member.php">Member</a>
                    <a class="btn btn-success" href="Buku.php">Buku</a>
                    <a class="btn btn-danger" href="Peminjaman.php">Peminjaman</a>
            </div>
            <div class="card mx-auto" style="max-width: 10cm;">
                <div class="card-header" style="font-weight: bold;"><i class="fa fa-circle-info"></i> INFORMASI</div>
                <div class="card-body">
                    Tombol <b>Member</b> Untuk Cek List Member<br>
                    Tombol <b>Buku</b> Untuk Cek List Buku<br>
                    Tombol <b>Peminjaman</b> Untuk Cek Peminjaman<br>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
else:
    header("location:FormLogin.php");
endif;
?>