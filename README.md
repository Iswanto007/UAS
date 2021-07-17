# UAS
//fungsi untuk mengkoneksikan database
<?php

$koneksi = mysqli_connect('localhost','root','','zakat');
?>

//fungsi login untuk masuk ke menu utama
<?php
include 'koneksi.php';


    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $cek = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and password='$password'");
    $hitung = mysqli_num_rows($cek);

    if($hitung>0){
        //jika data ditemukan
        //maka berhasil login

        $_SESSION['username'] = $username;
        header('location:dashboard.php');
    }else{
        //data tidak ditemukan
        //gagal login
        echo '
        <script>
        alert(" Username atau password salah");
        window.location.href="login.php"
         </script>
        ';
?>

//fungsi merubah update data
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
//fungsi untuk logout
<?php
session_start();
session_destroy();
header('location:login.php');

?>
//fungsi untuk menghapus data

<?php
include 'koneksi.php';

$id = $_GET['id'];
$hapus = "DELETE FROM tb_mustahiq WHERE id='$id'";
if($koneksi->query($hapus))
{
    header("location:EditMustahiq.php");
}

?>
