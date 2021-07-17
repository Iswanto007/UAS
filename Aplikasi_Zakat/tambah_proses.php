<?php
    include 'koneksi.php';

    $jenis = $_POST['jenis'];
    $nominal = $_POST['nominal'];
    $nama = $_POST['nama'];
    $telpon = $_POST['telpon'];
    $email = $_POST['email'];
    $bank = $_POST['bank'];
    $norek = $_POST['norek'];

    $insert ="insert into tb_mustahiq(jeniszakat,nominal,nama,notelp,email,bank,norek) values('$jenis','$nominal','$nama','$telpon','$email','$bank','$norek')";
    if($koneksi->query($insert)){

        header('location:tambah.php');
    }else{
        echo '
        <script>
        alert(" Gagal Menambah Data Baru");
        window.location.href="tambah.php"
         </script>
        ';
    }


?>