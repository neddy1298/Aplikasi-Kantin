<?php

include "koneksi.php";

$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$username = $_POST['username'];
$password = md5($_POST['password']);



$cek = mysqli_query($mysqli, "select * from akun where username='$username' ");
if(mysqli_num_rows($cek) < 1){





    $insert = mysqli_query($mysqli,"insert into akun set nama='$nama', jeniskelamin='$jeniskelamin', username='$username', password='$password'  ");
    if($insert){
        echo "<script>alert('proses simpan berhasil');window.location.href='index.php?p=login'</script>";
    }else{
        echo "<script>alert('proses simpan gagal');window.history.go(-1);</script>";
    }




    
}else{
    echo "<script>alert('username sudah dipakai');window.history.go(-1);</script>";
}






?>