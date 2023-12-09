<?php
require_once('required/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM pendidikan WHERE id='{$id}'";
    $result = mysqli_query($connectDb, $query);
    
    if ($result) {
        header('location:manajemen-pendidikan.php?delete=sukses');
    } else {
        header('location:manajemen-pendidikan.php?delete=gagal');
    }
}
else {
    header('location:manajemen-pendidikan.php');
}