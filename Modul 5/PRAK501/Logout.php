<?php
session_start();
session_destroy();
header("Location: FormLogin.php?pesan=logout");
?>