<?php
require 'config.php';
$result = all();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Daftar Karyawan</title>
</head>

<body>
    <div class="header">
        <h1>Daftar Karyawan</h1>
        <p>Tugas Pemrograman Web 10 : Ahmad Afdhal</p>
    </div>

    <div class="tambah">
        <a href="tambah_data.php" class="btn btn-success">Tambah Data</a>
    </div>

    <div class="wrapper">
        <table class="table table-dark table-striped">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            foreach ($result as $row) :
            ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['address']; ?></td>
                    <td><?= $row['gender']; ?></td>
                    <td><?= $row['position']; ?></td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <a href="edit_data.php?id=<?= $row['id']; ?>" class="btn btn-primary option">Edit Data</a>
                        <a href="delete_data.php?id=<?= $row['id']; ?>" class="btn btn-danger option">Delete Data</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>