<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventaris Barang</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../inventarisbarang/vendors/boxicons/css/boxicons.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
	<link rel="stylesheet" type="text/css" href="../inventarisbarang/styles/style.css">

</head>
<body>
	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg bg-white fixed-top">
	  <div class="container">
	    <a class="navbar-brand fw-bold" href="#header">INVENTARIS ONLINE</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#header">Home</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#portfolio">Team</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="#login">Login</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- HEADER -->
	<section class="header-section" id="header">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-6">
					<p class="text-orange fw-semibold">Inventaris Barang</p>
					<h1 class="header-title text-uppercase fw-bold">manajemen barang<br class="d-none d-md-block">terbaik di indonesia</h1>

					<a href="#login" class="header-skill d-inline-flex align-items-center gap-2">
						Login Web Inventaris Barang <i class="bx bx-right-arrow-alt fs-4"></i>
					</a>

					<div class="d-flex align-items-center gap-4 mt-5">
						<div class="d-flex align-items-center gap-2">
							<h2 class="header-skill fw-bold mb-3">10+</h2>
							<p class="text-secondary fs-7 mb0">Years of <br/>Experience</p>
						</div>
						<div class="d-flex align-items-center gap-2">
							<h2 class="header-skill fw-bold mb-3">30K+</h2>
							<p class="text-secondary fs-7 mb0">Happy <br/>User</p>
						</div>
					</div>
				</div>
				<div class="col-md-5">
					<img src="images/header-photo.png" class="header-img" alt="">
				</div>
			</div>
		</div>
	</section>

	<!-- PORTOFOLIO -->
	<section class="portfolio-section" id="portfolio">
		<div class="container">
			<p class="text-orange fw-semibold">TEAM</p>
			<h2 class="section-title mb-5">TEAM WORK</h2>

			<div class="swiper portfolio-swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="card">
							<div class="card-body">
								<img src="./images/portfolio-1.jpg" alt="" class="card-img-top rounded mb-3">
								<h6 class="fw-semibold">M. Rafly Alfarizi</h6>
								<h6 class="text-orange">MANAGER</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card">
							<div class="card-body">
								<img src="../inventarisbarang/images/portfolio-2.jpg" alt="" class="card-img-top rounded mb-3">
								<h6 class="fw-semibold">F. Yosua P. Habeahan</h6>
								<h6 class="text-orange">MANAGER</h6>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card">
							<div class="card-body">
								<img src="../inventarisbarang/images/portfolio-3.jpg" alt="" class="card-img-top rounded mb-3">
								<h6 class="fw-semibold">Diamond Panca Lady</h6>
								<h6 class="text-orange">MANAGER</h6>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="card">
							<div class="card-body">
								<img src="../inventarisbarang/images/portfolio-4.jpg" alt="" class="card-img-top rounded mb-3">
								<h6 class="fw-semibold">Pujha Suretno</h6>
								<h6 class="text-orange">MANAGER</h6>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="d-flex align-items-center justify-content-end gap-3 mt-3">
				<button class="btn btn-light d-flex align-items-center justify-content-center btn-next">
					<i class="bx bx-left-arrow-alt fs-5"></i>
				</button>
				<button class="btn btn-light d-flex align-items-center justify-content-center btn-prev">
					<i class="bx bx-right-arrow-alt fs-5"></i>
				</button>

			</div>
		</div>
	</section>

	<!-- LOGIN -->
	<section class="login-section" id="login">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-6">
					<p class="text-orange fw-semibold">SIGN IN</p>
					<h2 class="section-title text-uppercase mb-5">HI, SIGN IN YOUR ACCOUNT</h2>

					<div class="col-md-5">
						<div class="d-flex align-items-center justify-content-between mb-3">
							<img src="../inventarisbarang/images/login.jpg">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<p class="header-title text-orange fw-bold">MASUK AKUN</p>
					<?php
					require_once '../inventarisbarang/inven/koneksi/koneksi.php';

					if (isset($_POST['email'], $_POST['password'])) {
						$email = $_POST['email'];
						$password = $_POST['password'];

						// Pemeriksaan apakah nilai (value) tidak kosong
						if (empty($email) || empty($password)) {
							echo "Semua kolom harus diisi. Silakan coba lagi.";
						} else {
							// Cek apakah email sudah terdaftar
							$result = mysqli_query($koneksi, "SELECT * FROM login WHERE email = '$email' AND password = '$password'");
							
							$cek = mysqli_num_rows($result);

							if($cek > 0){
								$row = mysqli_fetch_assoc($result);
								if ($row['password'] == $password) {
									$_SESSION['log'] = 'True';
									// Password cocok, redirect ke halaman setelah login berhasil
									echo "<script> window.location.href='inven/index.php'; </script>";
								} else {
									echo "Password salah. Silakan coba lagi.";
								}
							}
							if(!isset($_SESSION['log'])){

							}
							else{
								echo "<script> window.location.href='inven/index.php'; </script>";
							}
						}
					}
					?>

					<form action="" method="POST">
					<div class="row mb-2">
						<div class="row mb-3">
						    <label for="inputEmail3" class="col-sm-2 text-uppercase col-form-label">Email</label>
							<div class="col-sm-15">
					      		<input type="email" class="form-control" id="inputEmail3" name="email">
					    	</div>
						</div>
						<div class="row mb-3">
						    <label for="inputPassword3" class="col-sm-2 text-uppercase col-form-label">Password</label>
						    <div class="col-sm-15">
						      	<input type="password" class="form-control" id="inputPassword3" name="password">
						    </div>
						</div><br>
						<div class="col-12">
							<button name="login" type="submit" class="btn col-md-5 text-orange btn-dark">Sign In</button>
						</div>
					</form><br><br>
				</div>
				<div class="col-12">
					<a href="password.php" class="forgot text-orange">Forgot Password</a>
				</div>
				<p class="text-secondary">Don't Have A Account?</p>
				<div class="col-12">
					<a href="#skills" class="btn col-md-5 text-orange btn-white">
						Sign Up
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- SKILL -->
	<section class="skills-section" id="skills">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-md-6">
					<p class="text-orange fw-semibold">SIGN UP</p>
					<h2 class="section-title text-white mb-5">CREATE YOUR ACCOUNT</h2>

					<div class="col-md-5">
						<div class="d-flex align-items-center justify-content-between mb-3">
							<img src="../inventarisbarang/images/portfolio-1.jpg">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<p class="text-orange fw-bold">DAFAR AKUN</p>
					<p class="text-orange">
						<?php
						require_once '../inventarisbarang/inven/koneksi/koneksi.php';

						if(isset($_POST['username'], $_POST['email'], $_POST['password'])){
						    $username = $_POST['username'];
						    $email = $_POST['email'];
						    $password = $_POST['password'];

						    // Pemeriksaan apakah nilai (value) tidak kosong
						    if (empty($username) || empty($email) || empty($password)) {
						        echo "Semua kolom harus diisi. Silakan coba lagi.";
						    } else {
						        // Cek apakah email atau username sudah ada dalam database
						        $cek_email = "SELECT * FROM login WHERE email = '$email'";
						        $cek_username = "SELECT * FROM login WHERE username = '$username'";

						        $result_email = $koneksi->query($cek_email);
						        $result_username = $koneksi->query($cek_username);

						        if ($result_email->num_rows > 0) {
						            echo "Email sudah terdaftar. Silakan gunakan email lain.";
						        } elseif ($result_username->num_rows > 0) {
						            echo "Username sudah terdaftar. Silakan gunakan username lain.";
						        } else {
						            // Jika email dan username belum terdaftar dan nilai tidak kosong, lakukan penyisipan data ke database
						            $sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";

						            if ($koneksi->query($sql) === TRUE) {
						                echo "AKUN BERHASIL DIDAFTARKAN";
						            } else {
						                echo "Error: " . $sql . "\n" . $koneksi->error;
						            }
						        }
						    }
						}
						?>
					</p>
					<form action="#skills" method="POST">
					<div class="row mb-2">
						<div class="row mb-3">
						    <label for="inputEmail3" class="col-sm-2 text-white col-form-label">Username</label>
							<div class="col-sm-15">
					   			<input type="text" class="form-control" aria-label="First name" name="username">
						    </div>
						</div>
						<div class="row mb-3">
						    <label for="inputEmail3" class="col-sm-2 text-white col-form-label">Email</label>
							<div class="col-sm-15">
					      		<input type="email" class="form-control" id="inputEmail3" name="email">
					    	</div>
						</div>
						<div class="row mb-3">
						    <label for="inputPassword3" class="col-sm-2 text-white col-form-label">Password</label>
						    <div class="col-sm-15">
						      	<input type="password" class="form-control" id="inputPassword3" name="password">
						    </div>
						</div>
						<div class="row mb-3">
						    <label for="inputPassword3" class="col-sm-3 text-white col-form-label">Re-Password</label>
						    <div class="col-sm-15">
						      	<input type="password" class="form-control" id="inputPassword3">
						    </div>
						</div><br>
						<div class="col-12">
							<button type="submit" class="btn col-md-5 text-orange btn-dark">Sign Up</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<!-- FOOTER -->

	<script src="vendors/bootstrap/js/boostrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	 <script>
    var swiper = new Swiper(".portfolio-swiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      navigation: {
        nextEl: ".btn-prev",
        prevEl: ".btn-next",
      }
    });
  </script>
</body>
</html>