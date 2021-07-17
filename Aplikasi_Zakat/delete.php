
<?php
include 'koneksi.php';

$id = $_GET['id'];
$hapus = "DELETE FROM tb_mustahiq WHERE id='$id'";
if($koneksi->query($hapus))
{
    header("location:EditMustahiq.php");
}

?>