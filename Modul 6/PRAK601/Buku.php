<?php
require "Koneksi.php";
require "Model.php";

$no = 1;
$buku = new Model();
//mengambil data buku
$result = $buku->getBuku();
//mengahapus data Buku
if (isset($_GET['id_buku'])) {
    $id = $_GET['id_buku'];
    $buku->deleteBuku($id);
    header("Location: Buku.php");
}

if (isset($_GET['id_buku'])) {
    $id = $_GET['id_buku'];
    $buku->editBuku($id, $judul, $penulis, $penerbit, $tahunTerbit);
    header("Location: Buku.php");
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
        <title>Peminjaman Buku | Buku</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-3">
                    <h1>Peminjaman Buku</h1>
                    <hr>
                    <h3>Daftar Buku</h3></br>
                    <a class="btn btn-info my-1" href='Dashboard.php'"><i class=" fa fa-home"></i> Beranda</a>
                    <a class="btn btn-success my-1" href='FormBuku.php'"><i class=" fa fa-book"></i> Tambah Data</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Penulis Buku</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['judul_buku'] ?></td>
                                    <td><?= $row['penulis'] ?></td>
                                    <td><?= $row['penerbit'] ?></td>
                                    <td><?= $row['tahun_terbit'] ?></td>
                                    <td>
                                        <a href="FormBuku.php?id_buku=<?= $row['id_buku']; ?>" class='btn btn-warning btn-sm ml-2'><i class="fa fa-pencil"></i> Edit</a>&nbsp;
                                        <a href="javascript:confirmDelete('Buku.php?id_buku=<?= $row['id_buku']; ?>')" class='btn btn-danger btn-sm ml-2'><i class="fa fa-trash"></i> Hapus</a>
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
<?php
else :
    header("Location: ErrorPage.php");
endif;
?>