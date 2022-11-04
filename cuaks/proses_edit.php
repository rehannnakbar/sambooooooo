<?php
include "koneksi.php";

$id = $_GET['id'];

$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhutubuh = $_POST['suhutubuh'];

$koneksi = new PDO('mysql:host=localhost;dbname=webb','root','');
$query = $koneksi->query("UPDATE tbperjalanan SET tanggal ='$tanggal', waktu ='$waktu',lokasi ='$lokasi',suhutubuh = '$suhutubuh' WHERE id = '$id'");
$data = $query->fetch();

    header("location:catatan_perjalanan.php");

?>