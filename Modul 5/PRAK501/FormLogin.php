<?php
require "Login.php";

session_start();
if (!isset($_SESSION['nomor_member'])) :
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/14edc419b7.js"></script>
        <title>Peminjaman Buku | Login</title>
    </head>

    <body background="https://images.unsplash.com/photo-1518417688702-e76dd0542d78?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1080" style="background-size: cover;">
        <div class="card text-dark bg-light mx-auto" style="max-width: 18rem; margin-top: 8rem;">
            <div class="card-header fw-bold">Masuk</div>
            <div class="card-body">
                <form method="POST">
                            <?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan'] == "gagal"){
                                    echo " <div class='alert alert-danger d-flex align-items-center' role='alert'>
                                    <div>Login gagal! username dan password salah!</div></div>";
                                }else if($_GET['pesan'] == "logout"){
                                    echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
                                    <div>Anda telah berhasil logout</div></div>";
                                }
                            }
                            ?>
                    <div class="mb-3">
                        <label for="nomor_member" class="form-label">Nomor Member</label>
                        <input type="text" class="form-control" id="nomor_member" name="nomor_member">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <button name="masuk" type="submit" class="btn btn-primary">Masuk <i class="fas fa-sign-in-alt"></i></button>
                </form>
            </div>
        </div>
    </body>

    </html>
<?php
else :
    header("location: Dashboard.php");
endif;
?>

<?php
if (isset($_POST['masuk'])) {
    session_start();
    login($_POST['nomor_member'], $_POST['password']);
    header("location:dashboard.php");
}
?>