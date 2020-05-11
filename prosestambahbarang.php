<?php

include "koneksi.php";

$namabarang = $_POST['namabarang'];
$jenisbarang = $_POST['jenisbarang'];
$hargamodal = $_POST['hargamodal'];
$hargajual = $_POST['hargajual'];
$stock = $_POST['stock'];


$insert = mysqli_query($mysqli,"insert into barang set namabarang='$namabarang', jenisbarang='$jenisbarang', hargamodal='$hargamodal', hargajual='$hargajual', stock='$stock'  ");
if($insert){
    echo "<script>alert('proses simpan berhasil');window.location.href='index.php?p=tambahbarang'</script>";
}else{
    echo "<script>alert('proses simpan gagal');window.history.go(-1);</script>";
}

?>