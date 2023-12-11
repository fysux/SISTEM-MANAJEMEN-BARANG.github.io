<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BARANG KELUAR</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">INVENTARIS BARANG</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Stok Barang
                            </a>
                            <a class="nav-link" href="masuk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Masuk
                            </a>
                            <a class="nav-link" href="keluar.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Barang Keluar
                            </a>
                            <a class="nav-link" href="koneksi/logout.php">
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">BARANG KELUAR</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Tambah Barang
                                </button>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>N0</th>
                                        <th>Nama Barang</th>
                                        <th>Tanggal</th>
                                        <th>Penerima</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
                               
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                    require '../inven/koneksi/koneksi.php';
                                    require '../pbo/tambah.php';
                                    $getdata = mysqli_query($koneksi, "SELECT * FROM keluar m, stock s WHERE s.idbarang = m.idbarang");
                                    $i = 1;
                                    while ($data = mysqli_fetch_array($getdata)){
                                        $idb = $data['idbarang'];
                                        $idk = $data['idkeluar'];
                                        $namabarang = $data['namabarang'];
                                        $deskripsi = $data['penerima'];
                                        $stock = $data['qty'];
                                        $tanggal = $data['tanggal']

                                    ?>
                                    <tr>
                                        <td><?=$i++;?></td>
                                        <td><?=$namabarang;?></td>
                                        <td><?=$tanggal;?></td>
                                        <td><?=$deskripsi;?></td>
                                        <td><?=$stock;?></td>
                                        <td>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?=$idb?>">
                                                Delete
                                            </button>
                                        </td>
                                        
                                        
                                    </tr>
                            
                                    <div class="modal fade" id="delete<?=$idb;?>">
                                        <div class="modal-dialog">
                
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Hapus Barang</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                    <!-- Modal body -->
                                                <div class="modal-body">
                                                    <?php
                                                    if(isset($_POST['hapusbarang'])){
                                                        $tambah = new Barang;
                                                        $tambah->deleteKeluar();
                                                        header('Location: index.php');
                                                    }
                                                    ?>

                                                    <form action="" method="POST">
                                                        Apakah Ingin Menghapus <?=$namabarang;?>?
                                                        <input type="hidden" name="idb" value="<?=$idb;?>">
                                                        <input type="hidden" name="idk" value="<?=$idk;?>">
                                                        <br>
                                                        <br>
                                                        
                                                        <button type="submit" class="btn btn-danger" name="hapusbarang">Hapus</button>
                                                    </form>
                                                </div>
                                                    <!-- Modal footer -->
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
        <?php

        if(isset($_POST['barangkeluar'])){
            $tambah = new Barang;
            $tambah->tambahKeluar();
            header('Location: keluar.php');
        }
        ?>
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title">Barang Keluar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
                <!-- Modal body -->
                <form method="POST">
                <div class="modal-body">
                <select name="barang" class="form-control">
                    <?php
                    $output = mysqli_query($koneksi, "SELECT * FROM stock");
                    while ($fetcharray = mysqli_fetch_array($output)){
                        $idbarang = $fetcharray['idbarang'];
                        $namabarang = $fetcharray['namabarang'];
                    ?>
                            
                <option value="<?=$idbarang;?>"><?=$namabarang;?></option>
                        
                    <?php
                    }
                    ?>
                    </select><br>
                    <input type="number" name="qty" class="form-control" placeholder="Quantity" required><br>
                    <input type="text" name="penerima" placeholder="Penerima" class="form-control" required><br>
                    <button type="submit" class="btn btn-primary" name="barangkeluar">Submit</button>
                </div>
                </form>
                <!-- Modal footer -->
            </div>
        </div>
    </div>
</html>