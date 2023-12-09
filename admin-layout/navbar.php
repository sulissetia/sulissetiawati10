<!-- start navbar -->
<nav class="navbar navbar-expand-lg fixed-top  bg-white mb-5 mb-5" id="navbar">
        <div class="container">
            <a href="#" class="navbar-brand">
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
                        <a class="nav-link active" href="admin.php">Home</a>
                    </li>
                    <?php if(checkLogin()): ?>
                    <!--end nav-item-->
                    <li class="nav-item">
                    <a class="nav-link" href="manajemen-pendidikan.php">pendidikan</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                    <a class="nav-link" href="manajemen-bukutamu.php">Bukutamu</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                    <a class="nav-link" href="manajemen-user.php">User</a>
                    </li>
                    <!--end nav-item-->
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <!--end nav-item-->
                    <?php endif; ?>
                    <!--end nav-item-->
                </ul>
                <!--end navbar-nav-->

            </div><!-- end #navbarNav -->
        </div><!-- end container -->
    </nav>