<?php
 include 'koneksi.php';

 
$id = $_POST['id'];
 $jenis = $_POST['jenis'];
 $nominal = $_POST['nominal'];
 $nama = $_POST['nama'];
 $telpon = $_POST['telpon'];
 $email = $_POST['email'];
 $bank = $_POST['bank'];
 $norek = $_POST['norek'];

$update= mysqli_query($koneksi,"UPDATE tb_mustahiq SET jeniszakat='$jenis',nominal='$nominal', nama='$nama', notelp='$telpon', email='$email', bank='$bank', norek='$norek' WHERE id='$id'");
 
header('location:dashboard.php');



?>