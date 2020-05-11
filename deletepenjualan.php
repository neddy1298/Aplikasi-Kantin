<?php

include "koneksi.php";

//$idBarang = $_GET['idBarang'];
$id = $_GET['id'];
//$stok = $_GET['stok'];

$delete = mysqli_query($mysqli, "delete from jualsatuan where idjual='$id'");
if($delete){
    //mysqli_query($mysqli, "update barang set stock=stock-$stok where idBarang='$idBarang' ");
    echo "<script>alert('proses delete berhasil');window.location.href='index.php?p=datapenjualan'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>