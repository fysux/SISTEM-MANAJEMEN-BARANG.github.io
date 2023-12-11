<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Password Reset - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../inventarisbarang/vendors/boxicons/css/boxicons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link rel="stylesheet" type="text/css" href="../inventarisbarang/styles/style.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <section class="login-section" id="login">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6">
                        <p class="text-orange fw-semibold">FORGOT PASSWORD</p>
                        <h2 class="section-title text-uppercase mb-5">Check Your Email</h2>

                        <div class="col-md-5">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <img src="../inventarisbarang/images/login.jpg">
                            </div>
                        </div>
                    </div>
                        <div class="col-md-6">
                            <p class="header-title text-orange fw-bold">LUPA PASSWORD</p>
                            <?php 
                            require_once '../inventarisbarang/inven/koneksi/koneksi.php';

                            if(isset($_POST['email'], $_POST['new-password'])) {
                                $email = $_POST['email'];
                                $password = $_POST['new-password'];

                                $cek_email = "SELECT * FROM login WHERE email = '$email'";
                                $result_email = $koneksi->query($cek_email);

                                if ($result_email->num_rows > 0) {
                                    $sql = "UPDATE login SET password = '$password' WHERE email = '$email'";
                                    if ($koneksi->query($sql) === TRUE) {
                                        echo "PASSWORD TELAH DI UBAH";
                                    } else {
                                        echo "Error: " . $sql . "\n" . $koneksi->error;
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
                                        <label for="inputPassword3" class="col-sm-4 text-uppercase col-form-label">Password Baru</label>
                                        <div class="col-sm-15">
                                            <input type="password" class="form-control" id="inputPassword3" name="new-password">
                                        </div>
                                    </div><br>
                                    <div class="col-12">
                                        <button type="submit" class="btn col-md-5 text-orange btn-dark">RESET PASSWORD</button>
                                    </div>
                                </div>
                            </form><br>
                            <div class="col-12">
                                <a href="index.php" class="col-md-3 text-orange btn-white">
                                    Back <i class="bx bx-right-arrow-alt fs-4"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
    <script src="vendors/bootstrap/js/boostrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </body>
</html>

