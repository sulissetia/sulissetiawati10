<?php
require_once('required/database.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO user(username, password) VALUES('{$username}', '{$password}')";
    $result = mysqli_query($connectDb, $query);
    mysqli_close($connectDb);

    if ($result) {
        header('location:manajemen-user.php?tambah=sukses');
    } else {
        header('location:manajemen-user.php?tambah=gagal');
    }
} else {
    header('location:manajemen-user.php');
}