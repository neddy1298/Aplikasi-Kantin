<?php

    include "koneksi.php";
    $id = $_GET['id'];
    $tampil = mysqli_query($mysqli, "select * from barang where idBarang='$id'");
    $hasil = mysqli_fetch_array($tampil);

?>
<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM EDIT BARANG</h3>
            <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-info pull-right"><i class="fa fa-info"></i></button>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="proseseditbarang.php?id=<?php echo $id;?>">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NAMA BARANG</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="namabarang" value="<?php echo $hasil['namabarang']; ?>" placeholder="NAMA BARANG" required>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-2 control-label">JENIS BARANG</label>
                    
                    <div class="col-sm-10">

                        <input type="radio" name="jenisbarang" <?php if($hasil['jenisbarang']=="makanan"){ echo "checked"; } ?> value="makanan" >MAKANAN
                        <input type="radio" name="jenisbarang" <?php if($hasil['jenisbarang']=="minuman"){ echo "checked"; } ?> value="minuman" >MINUMAN

                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">HARGA MODAL</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $hasil['hargamodal'];?>" name="hargamodal" placeholder="HARGA MODAL" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">HARGA JUAL</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $hasil['hargajual']; ?>" name="hargajual" placeholder="HARGA JUAL" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">STOK</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $hasil['stock'];?>" name="stock" placeholder="STOK" required>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            
            <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">UPDATE</button>
            
            </div>
            <!-- /.box-footer -->
        </form>
        </div>
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INFO PENGSISIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        NAMA BARANG DIISI DENGAN TEKS.  
        JENIS BARANG PILIH MAKANAN ATAU MINUMAN
        DAN UNTUK HARGA MODAL, HARGA JUAL DAN STOK DIISI DENGAN ANGKA
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>