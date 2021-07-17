<?php
include 'koneksi.php';
?>
<html>
<head>
  <title>Data Pembayaran Zakat</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
        <div class="title text-center">
			<h2>Data Pembayaran Zakat</h2>
			<h4></h4>
            </div>
            <div class="breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Data mustahiq</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cetak</li>
                </ol>
                </nav>
            </div>
				<div class="data-tables datatable-dark">
					
                <table id="datatablesSimple" class=" table table-bordered border-dark ">
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
                                            <td><?php echo $jeniszakat;?></td>
                                            <td>Rp.<?=number_format($nominal);?></td>
                                            <td><?php echo $nama;?></td>
                                            <td><?php echo $telpon;?></td>
                                            <td><?php echo $email;?></td>
                                            <td><?php echo $bank;?></td>
                                            <td><?php echo $norek;?></td>
                                            

                                        </tr>
                                    <?php
                                    };//akhir dri pengulangan

                                    ?>



                                    </tbody>
                                </table>
					
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#datatablesSimple').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>