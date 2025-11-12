<?php
session_start();
$_SESSION["nim"] = $_POST["txtNIM"];
$_SESSION["namalengkap"] = $_POST["txtNamaLengkap"];
$_SESSION["tempatlahir"] = $_POST["txtTempat"];
header("Location: index.php");
?>