<?php

include "koneksi.php";
$id = $_GET['id'];
$jumlah = $_POST['jumlah'];
$update = mysqli_query($mysqli, "update stock set jumlah='$jumlah', tanggal=now() where idStock='$id' ");
if($update){
    echo "<script>alert('proses edit berhasil');window.location.href='index.php?p=historistock'</script>";
}else{
    echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
}

?>