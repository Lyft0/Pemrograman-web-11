<?php
require "config.php";
if (isset($_POST['submit'])) {
    if (isset($_POST['submit'])) {
        if (tambah($_POST) > 0) {
            echo "
                <script>
                    alert('Data Berhasil Dimasukkan');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Dimasukkan');
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
        <h2>Tambah Data Karyawan</h2>
    </div>
    <form method="POST">
        <p>Nama :</p><input name="name" class="input form-control">
        <p>Email :</p><input name="email" class="input form-control">
        <p>Address :</p><input name="address" class="input form-control">
        <p>Gender :</p>
        <select name="gender">
            <option selected hidden value="">Choose Your Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <p>Position :</p><input name="position" class="input form-control">
        <p>Status :</p>
        <select name="status">
            <option selected hidden>Choose Your Status</option>
            <option value="Fulltime">Fulltime</option>
            <option value="Parttime">Parttime</option>
        </select><br>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</body>

</html>