<?php
session_start();
if(isset($_SESSION['nomor_member'])){
    header("Location: FormLogin.php");
}
else
{
    header("Location: Dashboard.php");
}
?>