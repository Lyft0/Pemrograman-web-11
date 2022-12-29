<?php
require "config.php";

$id = $_GET['id'];
$query = "SELECT * FROM karyawan where id = $id";
$data = mysqli_query($con, $query);
$data = mysqli_query($con, $query);
$temp = [];
while ($i = mysqli_fetch_assoc($data)) {
    $temp[] = $i;
}

if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {
        if (update($_POST, $id) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Diupdate');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Diupdate');
                    document.location.href = 'index.php';
                </script>   
            ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style_tambah.css">
    <title>Tambah Data | Data Karyawan</title>
</head>

<body>
    <div class="header">
        <h2>Update Data Karyawan</h2>
    </div>
    <form method="POST">
        <p>Nama :</p><input name="name" class="input form-control" value="<?= $temp[0]['name']; ?>">
        <p>Email :</p><input name="email" class="input form-control" value="<?= $temp[0]['email']; ?>">
        <p>Address :</p><input name="address" class="input form-control" value="<?= $temp[0]['address']; ?>">
        <p>Gender :</p>
        <select name="gender">
            <?php
            $male = '';
            $female = '';
            if ($temp[0]['gender'] == 'Male') {
                $male = 'selected';
            } else {
                $female = 'selected';
            }
            ?>
            <option selected hidden value="">Choose Your Gender</option>
            <option <?= $male; ?> value="Male">Male</option>
            <option <?= $female; ?> value="Female">Female</option>
        </select>
        <p>Position :</p><input name="position" class="input form-control" value="<?= $temp[0]['position']; ?>">
        <p>Status :</p>
        <select name="status">
            <?php
            $status_full = '';
            $status_part = '';
            if ($temp[0]['status'] == 'Fulltime') {
                $status_full = 'selected';
            } else {
                $status_part = 'selected';
            }
            ?>
            <option <?= $status_full; ?> value="Fulltime">Fulltime</option>
            <option <?= $status_part; ?> value="Parttime">Parttime</option>
        </select><br>
        <button type="submit" name="submit" class="btn btn-success">Update</button>
    </form>
</body>

</html>