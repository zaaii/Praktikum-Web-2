<?php
require "Koneksi.php";

function login($nomor_member, $password)
{
    session_start();
    $sql = "SELECT * FROM member WHERE nomor_member = '$nomor_member' AND password = '$password'";
    $result = mysqli_query($GLOBALS['koneksi'], $sql);
    if (mysqli_num_rows($result) > 0)
    {
        $_SESSION['nomor_member'] = $nomor_member;
        $_SESSION['password'] = $password;
        header("Location: Dashboard.php");
    }
    else
    {
        header("Location: FormLogin.php?pesan=gagal");
    }
    return $result;
}
?>