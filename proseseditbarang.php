<?php

include "koneksi.php";

$id = $_GET['id'];
$namabarang = $_POST['namabarang'];
$jenisbarang = $_POST['jenisbarang'];
$hargamodal = $_POST['hargamodal'];
$hargajual = $_POST['hargajual'];
$stock = $_POST['stock'];


$insert = mysqli_query($mysqli,"update barang set namabarang='$namabarang', jenisbarang='$jenisbarang', hargamodal='$hargamodal', hargajual='$hargajual', stock='$stock'  where idBarang='$id'" );
if($insert){
    echo "<script>alert('proses edit berhasil');window.location.href='index.php?p=databarang'</script>";
}else{
    echo "<script>alert('proses edit gagal');window.history.go(-1);</script>";
}

?>