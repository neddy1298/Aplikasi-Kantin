<?php

include "koneksi.php";

$barang = $_POST['barang'];
$jumlah = $_POST['jumlah'];
$nominal = $_POST['nominal'];

$tampil = mysqli_query($mysqli, "select * from barang where idBarang='$barang'");
$hasil = mysqli_fetch_array($tampil);

if($jumlah <= $hasil['stock']){
    if($nominal >= $hasil['hargajual']){
        $insert = mysqli_query($mysqli, "insert into jualsatuan set 
        idBarang='$barang', 
        hargajual='$hasil[hargajual]',
        jumlah='$jumlah',
        nominalbayar='$nominal',
        totaljual='$nominal*$jumlah',
        tanggal=now()");
        if($insert){
            mysqli_query($mysqli, "update barang set stock=stock-$jumlah where idBarang='$barang' ");
            echo "<script>alert('proses penjualan anda berhasil');window.location.href='index.php?p=databarang'</script>";
        }
        else{
            echo "<script>alert('proses penjualan anda gagal');window.history.go(-1);</script>";
        }
    }else{
        echo "<script>alert('uang anda tidak cukup');window.history.go(-1);</script>";
    }
}else{
    echo "<script>alert('stock tidak cukup');window.history.go(-1);</script>";
}
?>