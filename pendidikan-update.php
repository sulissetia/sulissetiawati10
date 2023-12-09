<?php
require_once('required/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE pendidikan SET nama = '{$nama}',mulai = '{$mulai}',selesai = '{$selesai}',deskripsi = '{$deskripsi}',alamat = '{$alamat}',  WHERE id='{$id}' ";

    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:manajemen-pendidikan.php?update=sukses');
    } else {
        header('location:manajemen-pendidikan.php?update=gagal');
    }
} else {
    header('location:manajemen-pendidikan.php');
}