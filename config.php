<?php
$con = mysqli_connect('localhost', 'root', '', 'praktikum_11');

function all()
{
    global $con;
    $query = "SELECT * FROM karyawan";
    $data = mysqli_query($con, $query);
    $temp = [];
    while ($i = mysqli_fetch_assoc($data)) {
        $temp[] = $i;
    }
    return $temp;
}

function tambah($data)
{
    global $con;
    $name = $data['name'];
    $email = $data['email'];
    $address = $data['address'];
    $gender = $data['gender'];
    $position = $data['position'];
    $status = $data['status'];

    $query = "INSERT INTO karyawan(name,email,address,gender,position,status) VALUES ('$name','$email','$address','$gender','$position','$status')";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}

function hapus($id)
{
    global $con;

    mysqli_query($con, "DELETE FROM karyawan WHERE id = $id");
    return mysqli_affected_rows($con);
}

function update($data, $id)
{
    global $con;
    $name = $data['name'];
    $email = $data['email'];
    $address = $data['address'];
    $gender = $data['gender'];
    $position = $data['position'];
    $status = $data['status'];

    $query =
        "UPDATE karyawan SET 
        name = '$name',
        email = '$email',
        address = '$address',
        gender = '$gender',
        position = '$position',
        status = '$status'
    WHERE
        id = '$id'";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}
