<?php
session_start();

if(!isset($_SESSION['nik'])){
	header('location:login.php');
}


?>


<?php
include('koneksi.php');

$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost;dbname=webb", 'root', '');
$query = $koneksi->query("DELETE FROM `tbperjalanan` where id='$id'");

if($query){
    header("location:catatan_perjalanan.php");
}
?>