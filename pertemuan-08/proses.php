<?php
session_start();
$sesnama = $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$sesnim = $_POST["txtNIM"];
$sesnamalengkap = $_POST["txtNamaLengkap"];
$sestempatlahir = $_POST["txtTempat"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;
$_SESSION["sesnim"] = $sesnim;
$_SESSION["sesnamalengkap"] = $sesnamalengkap;
$_SESSION["sestempatlahir"] = $sestempatlahir;
header("location: index.php");
?>