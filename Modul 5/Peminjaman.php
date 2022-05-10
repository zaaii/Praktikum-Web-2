<?php
require "Koneksi.php";
require "Model.php";

$no = 1;
$peminjaman = new Model();
//mengambil data peminjaman
$result = $peminjaman->getPeminjaman();
//mengahapus data peminjaman
if (isset($_GET['id_peminjaman'])) {
    $id = $_GET['id_peminjaman'];
    $peminjaman->deletePeminjaman($id);
    header("Location: Peminjaman.php");
}

if (isset($_GET['id_peminjman'])) {
    $id = $_GET['id_peminjaman'];
    $peminjaman->editPeminjaman($id, $tglPinjam, $tglKembali);
    header("Location: Peminjaman.php");
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
    <title>Peminjaman Buku | Peminjaman</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3">
                <h1>Peminjaman Buku</h1>
                <hr>
                <h3>Daftar Peminjaman</h3></br>
                <a class="btn btn-info my-1" href='index.php'"><i class="fa fa-home"></i> Beranda</a>
                <a class="btn btn-success my-1" href='FormPeminjaman.php'"><i class="fa fa-book-reader"></i> Tambah Data</a>
                <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result))  { ?>
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['tgl_peminjaman'] ?></td>
                    <td><?= $row['tgl_kembali'] ?></td>
                    <td>
                    <a href="FormPeminjaman.php?id_peminjaman=<?= $row['id_peminjaman']; ?>" class='btn btn-warning btn-sm ml-2'><i class="fa fa-pencil"></i> Edit</a>&nbsp;
                    <a href="javascript:confirmDelete('Peminjaman.php?id_peminjaman=<?= $row['id_peminjaman']; ?>')" class='btn btn-danger btn-sm ml-2'><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <script>
            function confirmDelete(url) {
                if (confirm("Apakah anda yakin ingin menghapus data ini?")) {
                    window.location.href = url;
                }
            }
            </script>
            </div>
        </div>
    </div>
</body>
</html>
