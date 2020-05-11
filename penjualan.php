<div class="row">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM PENJUALANG BARANG</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="prosespenjualan.php">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">PILIH BARANG</label>
                    
                    <div class="col-sm-10">
                    <select name="barang" class="form-control col-sm-10">
                        <option value="">--PILIH BARANG--</option>
                        <?php
                
                  include "koneksi.php";
                  $tampil = mysqli_query($mysqli, "select * from barang");
                  $no =1;
                  while($hasil = mysqli_fetch_array($tampil)){
                ?>
                    <option value="<?php echo $hasil['idBarang']; ?>">
                        <?php echo $hasil['namabarang']; ?>
                    </option>
                <?php
                
                  }

                ?>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">JUMLAH ITEM</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="jumlah" placeholder="JUMLAH ITEM" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NOMINAL PEMBAYARAN</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nominal" placeholder="NOMINAL PEMBAYARAN" required>
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
    </div>