<?php
session_start();
require_once('required/auth.php');

onlyAdmin();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SULIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Mannatthemes" name="author" />

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />

    <!-- colors -->
    <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="80">
    <!-- start navbar -->
    <?php include('admin-layout/navbar.php'); ?>

    <div class="admin-container my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3><span class="text-primary"> Admin</span></h3>

                    <p style="color: #000;">Hallo, <?= getUserLogin('username'); ?> selamat datang di halaman admin</p>
                </div>
            </div>
        </div>  
    </div>
   
</body>

<!-- Mirrored from mannatthemes.com/selfown/default/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 15:10:40 GMT -->

</html>