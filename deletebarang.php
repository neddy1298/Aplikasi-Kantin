<?php
include "koneksi.php";

$id = $_GET['id'];

$delete = mysqli_query($mysqli, "delete from barang where idBarang='$id' ");
if($delete){
    echo "<script>alert('proses delete berhasil');window.location.href='index.php?p=databarang'</script>";
}else{
    echo "<script>alert('proses delete gagal');window.history.go(-1);</script>";
}

?>