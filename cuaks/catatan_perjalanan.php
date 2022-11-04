<?php
session_start();

if(!isset($_SESSION['nik'])){
	header('location:login.php');
}


?>



<?php

$db = new PDO("mysql:host=localhost;dbname=webb",'root','');
$query = $db->query("SELECT * FROM tbperjalanan");
?>
<div class="container-sm">
<!--<a href="proses_tambah.php">update</a>!-->
<table border="1" cellpadding="10" cellspacing="0" class="table-primary table-striped">

<table border="align"="center" width="100%" height="20%"> 
    <td> 
        <table align="center" border="60" style="background-color:grey;" width="100%" height="200%"> 
            <tr> 
                <style>
                    body{
                        background-image: url("sunset.jpg") ;
                        background-size: cover;
                    }
                    table{
                        background-color:grey;
                    }
                    </style>
                    <h1 class ="text-white text-center">Catatan Perjalanan</h1>
                <th>tanggal</th>
                <th>waktu</th>
                <th>lokasi</th>
                <th>suhutubuh</th>
                <th>aksi</th>
            </tr>
            <tbody class="table-group-divider bg-info">
                    <?php
                    foreach($query as $querys){
                     
                        echo "<tr>";
                        echo "<td>";
                        echo $querys["tanggal"];
                        echo "</td>";
                        echo "<td>";
                        echo $querys["waktu"];
                        echo "</td>";
                        echo "<td>";
                        echo $querys["lokasi"];
                        echo "</td>";
                        echo "<td>";
                        echo $querys["suhutubuh"];
                        echo "</td>";
                        echo "<td>";
                        echo "<a href='edit.php?id=".$querys["id"]."'class=btn btn-danger'>UPDATE</a> | ";
                        echo "<a href='proses_hapus2.php?id=".$querys["id"]."'class=btn btn-danger'>HAPUS</a>";
                        echo "</td>";
                        echo "</td>";
                    }
                    ?>
            </tbody>
             <?php while($data =$query->fetch()) : ?>
             <tr> 
                 <td><?= $data['tanggal']?></td>
                 <td><?=$data['waktu']?></td>
                 <td><?= $data['lokasi']?></td>
                 <td><?= $data['suhutubuh']?></td>
             </tr>
            <?php endwhile; ?>