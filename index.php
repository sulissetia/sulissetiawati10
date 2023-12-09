<?php 
session_start();
require_once('required/database.php');
require_once('required/auth.php');
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
    <nav class="navbar navbar-expand-lg fixed-top sticky bg-white" id="navbar">
        <div class="container">
            <a href="index-4.html" class="navbar-brand">
                <img src="images/Politeknik_Pertanian_Negeri_Samarinda.png" class="logo-sm" alt="" height="30" />
                <img src="images/Politeknik_Pertanian_Negeri_Samarinda.png" class="logo-light" alt="" height="25" />
                <img src="images/Politeknik_Pertanian_Negeri_Samarinda.png" class="logo-dark" alt="" height="16" />
            </a>
            <!--end navbar-brand-->
            <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
            </a>
            <!--end navbar-toggler-->

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto navbar-center mt-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#resume">Resume</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <!--end nav-item-->
                    <div class="col-12">
                <?php if(checkLogin()) : ?>
                        <a href="admin.php" type="submit" id="admin" name="admin"
                         class="btn btn-primary mt-2" value="admin" >Admin</a>
                         <?php else: ?>
                            <a href="login.php" type="submit" id="login" name="login"
                         class="btn btn-primary mt-2" value="Login" >Login</a>
            <?php endif; ?>
                    </div>
                    <!--end nav-item-->
                </ul>
                <!--end navbar-nav-->

            </div><!-- end #navbarNav -->
        </div><!-- end container -->
    </nav>
    <!-- end navbar -->

    <!-- start hero -->
    <section class="hero-one hero-video position-relative" id="home"
        style="background-image: url(images/personal/main-bg.png); background-size: cover; background-position: center center;">
        <div class="bg-overlay"></div>
        <div id="youtubeEmbed" class="hero_video" data-video-id="LBNDfxjEYlA"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-7 text-center px-0 px-xl-4 mt-5 mt-lg-0 pt-5 pt-lg-0">
                    <h5 class="d-inline-block py-1 px-3 rounded text-muted font-secondary">Hai, Saya Sulis Setiawati
                    </h5>
                    <h6 class="hero-title mb-4 font-secondary fo">Saya Seorang MahaSiswa di POLITANI
                        <div class="position-relative d-inline-block" style="margin-bottom: -20px;" data-delay="2200"
                            data-words>
                            &nbsp;
                            <span class="text-anim-items">
                                <span class="text-anim-item px-2"><span>Jurusan</span></span>
                                <span class="text-anim-item px-2"><span>Prodi </span></span>
                                <span class="text-anim-item px-2"><span>TRPL</span></span>
                            </span>
                            <span class="anim-line bg-orange"></span>
                            </span>
                        </div>
                        TEKNIK INFORMATIKA
                        <div class="logos">
                            <img src="images/personal/logotrpl.png" alt="" class="img-fluid ml-lg-2">

                        </div>
                    </h6>
                    <span class="wrap"></span>


                </div>
                <!--end col-->
                <div class=" logo2 col-lg-5  mx-auto mt-5">
                    <img src="imageslogin/liss.jpeg" alt="" class="img-fluid ml-lg-5 rounded-pill">
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div><!-- end container -->
    </section>
    <!-- end hero -->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- start about -->
    <section class="section" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 align-self-center">
                    <h5 class="fs-24 text-dark fw-medium"><mark>Catatan Pribadi</mark></h5>
                    <h4 class="fw-normal lh-base text-gray-700 mb-4 fs-20">Sudah menjadi fakta lama bahwa saya JOMBLO
                        dari lahir.Bapakku adalah seorang Petani sedangkan Ibuku adalah seorang Ibu rumah tangga yang
                        luar biasa. Saya anak pertama dari 2 bersaudara. saya lahir di bau-bau,sulawesi tenggara,tetapi
                        saya dibesarkan di
                        Lamongan.
                    </h4>
                    <div class="social">
                        <a href="https://www.instagram.com/___sulissss/ ">
                            <i class="lab la-instagram instagram me-1"></i>

                        </a>
                        <a href="https://www.wa.me/6282353209707">
                            <i class="lab la-whatsapp la-whatsapp-square me-1"></i>
                        </a>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-5 ms-auto align-self-center">
                    <div class="mb-5 mb-lg-0">
                    <h6 class="fs-24 text-dark fw-medium"><mark>Biodata Pribadi</mark></h6>
                        <p class="mb-2">
                            <span class="personal-detail-title">Umur</span>
                            <span class="personal-detail-info">19 Tahun</span>
                        </p>
                        <p class="mb-2">
                            <span class="personal-detail-title">Asal </span>
                            <span class="personal-detail-info">Lamongan,Jawa Timur</span>
                        </p>
                        <p class="mb-2">
                            <span class="personal-detail-title">Minat</span>
                            <span class="personal-detail-info">Bulu tangkis,Menari</span>
                        </p>
                        <p class="mb-2">
                            <span class="personal-detail-title">Cita-cita</span>
                            <span class="personal-detail-info">Jadi Orang sugeh</span>
                        </p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-12 mt-5">
                    <div class="d-flex flex-wrap justify-content-center  mt-4 mt-md-5">
                        <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                            <div class="d-flex align-items-center">
                                <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="images/logos/android.svg" alt="" class="" height="34">
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-medium text-gray-700">Android</h6>
                                    <p class="text-muted mb-0 fs-12">2 Year Experience</p>
                                </div>
                            </div>
                        </div>
                        <!--/div-->

                        <!--/div-->
                        <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                            <div class="d-flex align-items-center">
                                <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="images/logos/bootstrap.svg" alt="" class="" height="34">
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-medium text-gray-700">Bootstrap</h6>
                                    <p class="text-muted mb-0 fs-12">3 Year Experience</p>
                                </div>
                            </div>
                        </div>
                        <!--/div-->
                        <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                            <div class="d-flex align-items-center">
                                <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="images/logos/vue.svg" alt="" class="" height="34">
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-medium text-gray-700">Vue</h6>
                                    <p class="text-muted mb-0 fs-12">2 Year Experience</p>
                                </div>
                            </div>
                        </div>
                        <!--/div-->

                        <!--/div-->

                        <!--/div-->
                        <div class="mx-3 ms-sm-0 ms-sm-0 mb-3 card-bg rounded p-1 pe-3 p-md-3 pe-md-4 shadow-sm">
                            <div class="d-flex align-items-center">
                                <div class="thumb-md d-flex flex-wrap justify-content-center align-items-center">
                                    <img src="images/logos/laravel.svg" alt="" class="" height="34">
                                </div>
                                <div class="ms-3">
                                    <h6 class="mb-0 fw-medium text-gray-700">Laravel</h6>
                                    <p class="text-muted mb-0 fs-12">1 Year Experience</p>
                                </div>
                            </div>
                        </div>
                        <!--/div-->

                        <!--/div-->
                    </div><!-- End div -->
                </div><!-- End Col -->
            </div>
            <!--end row-->
        </div><!-- end container -->
    </section>
    <!-- end about -->
    <!-- start services -->
    <section class="section bg-gradient-light-white" id="services">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-md-10 col-lg-7 text-center">
                    <span
                        class="badge badge-lg rounded bg-soft-alt-success fw-normal fs-13 text-uppercase">Service</span>
                    <h2 class="fs-2 fw-medium lh-1 text-dark my-3">My Service</h2>
                    <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 lh-lg">
                        There are many variations of passages ofLorem Ipsum
                        available, but the majority havesuffered alteration in some
                        form, by injected humour,

                    </p>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-4 m-2">
                            <div
                                class="bg-soft-alt-orange d-flex justify-content-center align-items-center thumb-xl  rounded">
                                <i data-feather="shopping-cart" class="align-self-center svg-orange icon-md"></i>
                            </div>
                            <h5 class="text-light fs-22 fw-medium my-4">Digital
                                Marketing </h5>
                            <p class="text-muted pb-4">There are many variations of passages ofLorem Ipsumavailable, but
                                the majority havesuffered
                                alteration in some.
                            </p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card rounded shadow  border-0">
                        <div class="card-body p-4 m-2">
                            <div
                                class="bg-soft-alt-info d-flex justify-content-center align-items-center thumb-xl  rounded">
                                <i data-feather="monitor" class="align-self-center svg-info icon-md"></i>
                            </div>
                            <h5 class="text-light fs-22 fw-medium my-4">Web
                                Devlopment</h5>
                            <p class="text-muted pb-4">There are many variations of passages ofLorem Ipsumavailable, but
                                the majority havesuffered
                                alteration in some .</p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <div class="card rounded shadow  border-0">
                        <div class="card-body p-4 m-2">
                            <div
                                class="bg-soft-alt-success d-flex justify-content-center align-items-center thumb-xl  rounded">
                                <i data-feather="pen-tool" class="align-self-center svg-success icon-md"></i>
                            </div>
                            <h5 class="text-light fs-22 fw-medium my-4">Creative
                                Graphic Design</h5>
                            <p class="text-muted pb-4">There are many variations of passages ofLorem Ipsumavailable, but
                                the majority havesuffered
                                alteration in some .</p>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end services -->


    <!-- start resume -->
    <section class="section" id="resume">
        <div class="container pendidikan">
            <div class="row justify-content-center mb-4 ">
                <div class="col-12 col-md-10 col-lg-7 text-center">
                    <h2 class="fs-2 fw-medium lh-1 text-dark my-3">Pendidikan</h2>
                    <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 lh-lg">
                        Saya ingin menceritakan riwayat Pendidikan yang pernah saya tempuh.
                    </p>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <div class="row">
                <div class="col-12">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-6">
                            <div class="card rounded bg-light h-100 border-0">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <div class="mx-auto text-center">
                                        <img src="images/personal/school.png" alt="" class="vector-dark" height="150">
                                        <img src="images/personal/school-light.png" alt="" class="vector-light"
                                            height="150">
                                        <h5 class="text-dark fs-22 fw-medium my-2">Education</h5>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                        <div class="col-lg-8 col-md-6">
                            <div class="card rounded bg-white  h-100 border-0">
                                <div class="card-body p-0">
                                    <div class="accordion accordion-flush" id="Education_accordion">
                                    <?php
            $queryExp = "SELECT * FROM pendidikan ORDER BY id ASC";
            $resultExp = mysqli_query($connectDb, $queryExp);
            
            while ($data = mysqli_fetch_array($resultExp)) : ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="prime">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#Education_one" aria-expanded="false">
                                                    <?= $data['nama']; ?>
                                                    <span class="fw-medium text-primary ms-auto fs-14"><?= $data['mulai']; ?> -
                                                    <?= $data['selesai']; ?></span>
                                                </button>
                                            </h2>
                                            <div id="Education_one" class="accordion-collapse collapse show"
                                                aria-labelledby="prime" data-bs-parent="#Education_accordion">
                                                <div class="accordion-body">
                                                    <p class="text-muted mb-3"><?= $data['deskripsi']; ?>
                                                    </p>
                                                    <p class="fw-medium"><?= $data['alamat']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                        <!--end accordion-item-->
                                    </div>
                                    <!--end accordion-->
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <hr class="hr-dashed">

                    <!--end row-->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end resume -->

    <div class="position-relative">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M110 105L2160 0H2880V150H0V105H110Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!--what client says -->
    <!-- end what client says -->


    <!-- start projects -->
    <section class="section" id="projects">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-12 col-md-10 col-lg-7 text-center">

                    <h2 class="fs-2 fw-medium lh-1 text-dark my-3">My Protfolio</h2>
                    <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 lh-lg">
                        Perangkat lunak atau peranti lunak adalah istilah khusus untuk data yang diformat dan disimpan
                        secara digital, termasuk program komputer, dokumentasinya, dan berbagai informasi yang bisa
                        dibaca, dan ditulis oleh komputer. Dengan kata lain, bagian sistem komputer yang tidak berwujud.
                </div>
                <!--end col-->
            </div>
            <div class="row justify-content-center gambar">
                <div class="row offset-2 mb-4 colom1">
                    <div class="col-5">
                        <img src="images/personal/12.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-5">
                        <img src="images/personal/11.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <img src="images/personal/13.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-3">
                        <img src="images/personal/16.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-3">
                        <img src="images/personal/17.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-3">
                        <img src="images/personal/15.jpg" class="img-fluid" alt="">
                    </div>

                </div>

            </div>

        </div>


        <!--end row-->

        <!--end row-->
        <!-- end col -->
        </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end projects -->

    <!--end projects-->

    <!-- start contact us -->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card bg-white"
                        style="background: url(images/personal/testi-pet.png); background-repeat: no-repeat; background-size: 15%; background-position: right bottom;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <h2 class="fs-2 fw-normal lh-1 text-dark mb-3">Hubungi Saya!</h2>
                                    <p class="text-gray-700 fs-18 fs-lg mb-4 mb-md-5 ">Always available for freelancing
                                        if the right project <br> comes along, Feel free to contact me.</p>
                                    <form method="post" name="myForm" action="contact-save.php">
                                        <span id="error-msg"></span>
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="fw-medium form-label fs-16" for="name">Name</label>
                                                <input type="text" class="form-control" placeholder="Your name"
                                                id="name"
                                                name="nama" />
                                            </div>
                                            <!-- end col -->
                                            <div class="col-md-6 mb-3">
                                                <label class="fw-medium form-label  fs-16" for="email">Email</label>
                                                <input type="email" class="form-control" placeholder="Your email"
                                                id="email"
                                                name="email"/>
                                            </div>
        
                                            <!-- end col -->
                                            <div class="col-12 mb-3">
                                                <label class="fw-medium form-label  fs-16"
                                                    for="comments">Message</label>
                                                <textarea 
                                                class="form-control"
                                                id="message"
                                                placeholder="Enter your message..."
                                                name="pesan"
                                                     rows="5"></textarea>
                                            </div>
                                            <!-- end col -->
                                            <div class="col-12">
                                                <input type="submit" id="submit" name="send"
                                                    class="btn btn-primary mt-2" value="Send message" />
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!--end row-->
                                    </form><!-- end form -->
                                </div><!-- end col -->

                                <!--end col-->
                            </div><!-- end row -->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <!-- end contact us -->



    <div class="position-relative">
        <div class="shape overflow-hidden bg-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <!-- start footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 border-e-dashed">
                    <a href="layout-one-1.html">
                        <img src="images/Politeknik_Pertanian_Negeri_Samarinda.png" alt="" height="18" />
                        <img src="images/Politeknik_Pertanian_Negeri_Samarinda.png" alt="" height="16" />
                    </a>
                    <p class="my-4">Politeknik Pertanian Negeri Samarinda pada awalnya disebut Politeknik Pertanian
                        Universitas Mulawarman Bidang Studi Kehutanan. Didirikan secara resmi pada tanggal 6 Pebruari
                        1989 oleh Gubernur Kepala Daerah Tingkat I Kalimantan Timur Bpk. Suwandi bersama-sama dengan
                        Rektor Universitas Mulawarman Bpk. Yunus Rasyid. Kemudian dilanjutkan dengan peresmian Kampus
                        Politeknik Pertanian Universitas Mulawarman oleh menteri Pendidikan dan Kebudayaan Indonesia
                        Bpk. Fuad Hasan pada tanggal 19 September 1991.
                    </p>
                    <ul class="list-unstyled footer-social mb-0 mt-sm-0 mt-3">
                        <li class="list-inline-item">
                            <a href="#"> <i class="icon-xs" data-feather="facebook"></i> </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"> <i class="icon-xs" data-feather="twitter"></i> </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"> <i class="icon-xs" data-feather="github"></i> </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"> <i class="icon-xs" data-feather="instagram"></i> </a>
                        </li>
                    </ul>
                </div><!-- end col -->

            </div><!-- end row -->
        </div>
        <!-- end container -->
    </footer>
    <!-- end footer -->

    <!-- start footer alter -->
    <div class="footer-alt">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p> &copy; <script>
                            document.write(new Date().getFullYear())
                        </script> Website Profile Dibuat Oleh <i class="las la-heart text-danger"></i> Sulis Setiawati
                    </p>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end footer alter -->

    <!-- end Style switcher -->
    <script>
        <?php 
        if (isset($_GET['bukutamu'])) {
            $statusBukutamu = $_GET['bukutamu'];
            if ($statusBukutamu == 'sukses') : ?>
                alert('Sukses menambah bukutamu');
            <?php elseif ($statusBukutamu == 'gagal') : ?>
                alert('Gagal menambah bukutamu');
            <?php endif;
        }
        ?>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      ;(() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
          form.addEventListener(
            'submit',
            (event) => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }

              form.classList.add('was-validated')
            },
            false
          )
        })
      })()
    </script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- feather icon -->
    <script src="js/feather.js"></script>
    <script src="js/shuffle.min.js"></script>
    <script src="js/projects.init.js"></script>
    <script src="js/text-roted.js"></script>
    <script src="js/video.init.js"></script>

    <script src="js/app.js"></script>

</body>

<!-- Mirrored from mannatthemes.com/selfown/default/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 15:10:40 GMT -->

</html>