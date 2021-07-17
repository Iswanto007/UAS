<?php
require 'function.php';
    $id = $_GET['idmustahiq'];
    $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_mustahiq WHERE idmustahiq='$id'");
    $data = mysqli_fetch_array($ambildata);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Mustahiq</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="style.css" rel="stylesheet" />
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
                            <a class="nav-link" href="index.php">
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
               
                    
<section class="formulir">
<div class="container">
<form method="post">
<!-- formulir -->
<!-- Data Sekolah -->
<div class="row mt-5 mb-5">
<div class="col-12">
   <div class="card card-content-page shadow-sm">
       <div class="card-body">
           <div class="d-sm-flex justify-content-between align-items-center">
               <h2>Edit data </h2>
           </div>
           <div class="market-status-table mt-4">
               <div class="table-responsive" style="overflow-x:hidden;">
                   
                   <div class="row">
                       <div class="col">
                       <div class="form-group">
                       <label>Zakat</label> 
                       <select class="form-select" aria-label="Default select example" name="jenis" required>

                       <option selected>---Pilih jenis Zakat----</option>
                        <?php
                        $getmustahiq = mysqli_query($koneksi,"select * from jeniszakat");

                        while($mustahiq=mysqli_fetch_array($getmustahiq)){
                            $idmustahiq = $mustahiq['idzakat'];
                            $jeniszakat = $mustahiq['namazakat'];


                            ?>
                            
                            <option value="<?=$jeniszakat;?>"><?=$jeniszakat;?></option>

                            <?php
                            }
                            ?>
                        <!-- // <option selected>---Pilih jenis Zakat-----</option>
                        // <option value="Zakat Penghasilan">Zakat Penghasilan</option>
                        // <option value="Zakat Maal">Zakat Maal</option>
                        // <option value="Zakat Fitrah">Zakat Fitrah</option> -->
                        </select>
                       </div>
                       </div>
                       <div class="col">
                       <div class="form-group">
                           <label>Masukan Nominal</label>
                           <input name="nominal" type="num" class="form-control" placeholder="nominal" maxlength="40" required>
                       </div>
                       </div>
                   </div>
                   <div class="row mt-2">
                       <div class="col">
                       <div class="form-group">
                       <label>Nama</label>
                       <input name="nama" type="text" class="form-control" placeholder="masukan nama" maxlength="40"  required>
                       </div>
                       </div>
                       <div class="col">
                       <div class="form-group">
                           <label>No.Telepon</label>
                           <input name="telpon" type="text" class="form-control" placeholder="masukan no.telepon" maxlength="40" required>
                       </div>
                       </div>
                   </div>
                   <div class="row mt-2">
                       <div class="col">
                       <div class="form-group">
                       <label>Email</label>
                       <input name="email" type="text" class="form-control" placeholder="masukan Email" maxlength="40" required>
                       </div>
                       </div>
                       <div class="col">
                       <div class="form-group">
                           <label>Bank</label>
                           <input name="bank" type="text" class="form-control" placeholder="masukan nama bank" maxlength="40"required>
                       </div>
                       </div>
                   </div>
                   <div class="row mt-2">
                       <div class="col">
                       <div class="form-group">
                       <label>No.Rekening Bank</label>
                       <input name="norek" type="num" class="form-control" placeholder="masukan no.rekening bank" maxlength="40" required>
                       </div>
                       </div>
                   </div>

                       

                   <div class="modal-footer mt-2">
                       <input type="submit" name="tambahmustahiq" class="btn btn-primary" value="Simpan">
                   </div>
               
               </div>
           </div>
       </div>
   </div>
</div>
</div>

</form>
</div>
</section>

                </main>
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
