<?php
include('koneksi.php');

$tanggal = $_GET['tanggal'];
$waktu = $_GET['waktu'];
$lokasi = $_GET['lokasi'];
$suhutubuh = $_GET['suhutubuh'];

$koneksi = new PDO("mysql:host=localhost;dbname=webb", 'root', '');
$query = $koneksi->query("DELETE FROM `tbregister` value ('$nik')");

if($query){
    header("location:catatan_perjalanan.php");
}
?>