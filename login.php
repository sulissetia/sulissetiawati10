<?php
session_start();
require_once('required/database.php');
require_once('required/auth.php');

if (checkLogin()) {
    header('location:index.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($connectDb, $query);
    $data = mysqli_fetch_array($result);

    if ($data) {
        $_SESSION['is_login'] = true;
        $_SESSION['user'] = $data;
        header('location:admin.php?status=sukses');
        exit;
    } else {
        header('location:login.php?status=gagal');
    }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fontslogin/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="csslogin/style.css">
	</head>

	<body>
    

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="imageslogin/3937.JPG" alt="">
				</div>
				<form autocomplete="off"
                        action="login.php"
                        method="post"
                        class="needs-validation mt-4"
                        novalidate
                        >
					<h3>Login Form</h3>
					<div class="form-wrapper">
						<input type="text"
                              id="username"
                              name="username" placeholder="Username" class="form-control">
						<i class="zmdi zmdi-account"></i>
                    </div>
					<div class="form-wrapper">
						<i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
					</div>
					<div class="form-wrapper">
						<input type="password"
                              id="password"
                              name="password" placeholder="Password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					<button>Login
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		<script type="text/javascript">
        <?php 
        if (isset($_GET['status'])) {
            $status = $_GET['status'];
            if ($status == 'sukses') : ?>
                alert('Login Berhasil.');
            <?php elseif ($status == 'gagal') : ?>
                alert('Login gagal. Username/Password Salah');
            <?php endif;
        }
        ?>
    </script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php 
    mysqli_close($connectDb);