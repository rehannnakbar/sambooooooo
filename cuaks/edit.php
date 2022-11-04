<?php
$id = $_GET['id'];
$db = new PDO("mysql:host=localhost;dbname=webb", 'root', '');
$query = $db->query("SELECT* FROM `tbperjalanan` WHERE id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Pasien</title>
</head>
<body>
    <div class="container-sm">
    <form action="proses_edit.php?id=<?= $data['id'] ?>" method="post">
        <input type="hidden" name="id" value="<?= $data['id']?>">
        <div>
            <label for="">tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="<?= $data['tanggal']?>">
        </div>
        <div>
            <label for="">waktu</label>
            <input type="time" name="waktu" class="form-control" value="<?= $data['waktu']?>">
        </div>
        <div>
            <label for="">lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="<?= $data['lokasi']?>">
        </div>
        <div>
            <label for="">suhutubuh</label>
            <input type="text" name="suhutubuh" class="form-control" value="<?= $data['suhutubuh']?>">
        </div>
        </div>
        <br>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </form>
    </div>
</body>
</html>