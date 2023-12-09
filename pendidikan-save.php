<?php
require_once('required/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO pendidikan(nama, mulai, selesai, deskripsi, alamat) VALUES('{$nama}', '{$mulai}','{$selesai}','{$deskripsi}','{$alamat}')";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:manajemen-pendidikan.php?tambah=sukses');
    } else {
        header('location:manajemen-pendidikan.php?tambah=gagal');
    }
} else {
    header('location:manajemen-pendidikan.php');
}