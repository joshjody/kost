<?php
session_start();
unset($_SESSION["usernameadmin"]);
unset($_SESSION["password"]);
header("Location:login.php");
?>