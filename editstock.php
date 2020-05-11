<?php
    
    include "koneksi.php";
    $id = $_GET['id'];
    $tampil = mysqli_query($mysqli,"select a.*, b.* from stock a inner join barang  b on a.idBarang=b.idBarang where idStock='$id'");
    $hasil = mysqli_fetch_array($tampil);
?>
<section class="content">
<!-- Horizontal Form -->
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">FORM EDIT STOK BARANG</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="post" action="proseseditstock.php?id=<?php echo $hasil['idStock']; ?>">
        <div class="box-body">
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">PILIH BARANG</label>
                
                <div class="col-sm-10">
                <select name="barang" class="form-control col-sm-10">
                <?php //echo $hasil['idStock']==$id; ?>
                    <?php
                        $barang = mysqli_query($mysqli, "select * from barang");
                        while($hasilbarang = mysqli_fetch_array($barang)){ 
                            if($hasil['namabarang']==$hasilbarang['namabarang']){
                    ?>
                    <option value="<?php echo $hasilbarang['idBarang']; ?>" selected><?php echo $hasilbarang['namabarang']; ?></option>
                            <?php   }else{ ?>
                        <option value="<?php echo $hasilbarang['idBarang']; ?>"><?php echo $hasilbarang['namabarang']; ?></option>
                    <?php } } ?>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">JUMLAH BARANG</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah" placeholder="Jumlah Barang" 
                    value="<?php echo $hasil['jumlah']; ?>" required>
                </div>
            </div>
        </div>
        <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">TAMBAH</button>
        </div>
        <!-- /.box-footer -->
    </form>
    </div>
</div>
</section>