<?php
session_start();
unset($_SESSION["usernamepelanggan"]);
unset($_SESSION["password"]);
header("Location:login.php");
?>
