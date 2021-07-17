<?php
include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
    </style>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Aplikasi Zakat</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Data Mustahiq
                            </a>
                            <a class="nav-link" href="tambah.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tambah Mustahiq
                            </a>
                            <a class="nav-link" href="editMustahiq.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Ubah Data
                            </a>
                            <a class="nav-link" href="logout.php">
                                Logout
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <section id="data_mustahiq">
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">DATA MUSTAHIQ</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Selamat datang</li>
                        </ol>
                        <!-- <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i> -->
                                <a href="export.php" class="btn btn-info"><i class="fas fa-print"></i> Cetak semua data</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class=" table table-bordered border-dark">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>No.</th>
                                            <th>Jenis Zakat</th>
                                            <th>Nominal</th>
                                            <th>Nama Lengkap</th>
                                            <th>No.Telepon</th>
                                            <th>Email</th>
                                            <th>Bank</th>
                                            <th>Nomor Rekening</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>


                                    <?php
                                    $get = mysqli_query($koneksi,"select *from tb_mustahiq");
                                    $i = 1;

                                    while($data=mysqli_fetch_array($get)){
                                            $jeniszakat = $data['jeniszakat'];
                                            $nominal = $data['nominal'];
                                            $nama = $data['nama'];
                                            $telpon = $data['notelp'];
                                            $email = $data['email'];
                                            $bank = $data['bank'];
                                            $norek = $data['norek'];
                                    
                                    ?>
                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$jeniszakat;?></td>
                                            <td>Rp.<?=number_format($nominal);?></td>
                                            <td><?=$nama;?></td>
                                            <td><?=$telpon;?></td>
                                            <td><?=$email;?></td>
                                            <td><?=$bank;?></td>
                                            <td><?=$norek;?></td>
                                            

                                        </tr>
                                    <?php
                                    };//akhir dri pengulangan

                                    ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
