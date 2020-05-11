<?php

include "koneksi.php";

$barang = $_POST['barang'];
$jumlah = $_POST['jumlah'];

$insert = mysqli_query($mysqli, "insert into stock set idBarang='$barang', jumlah='$jumlah', tanggal=now()  ");
if($insert){
    mysqli_query($mysqli, "update barang set stock=stock+$jumlah where idBarang='$barang' ");
    echo "<script>alert('proses tambah stock berhasil');window.location.href='index.php?p=databarang'</script>";
}else{
    echo "<script>alert('proses tambah stock gagal');window.history.go(-1);</script>";
}
?>