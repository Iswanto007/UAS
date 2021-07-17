<?php
if(isset($_POST['login'])){

    //initiate variable
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $cek = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and password='$password'");
    $hitung = mysqli_num_rows($cek);

    if($hitung>0){
        //jika data ditemukan
        //maka berhasil login

        $_SESSION['login'] = 'True';
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
    }
}

?>