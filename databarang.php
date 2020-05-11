
<div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Table Data Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stock</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                  
                    include "koneksi.php";
                    $tampil = mysqli_query($mysqli, "select * from barang");
                    $no =1;
                    while($hasil = mysqli_fetch_array($tampil)){
                  ?>
                  <tbody>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $hasil['namabarang']; ?></td>
                    <td><?php echo $hasil['jenisbarang']; ?></td>
                    <td><?php echo "Rp ".number_format($hasil['hargamodal']); ?></td>
                    <td><?php echo "Rp ".number_format($hasil['hargajual']); ?></td>
                    <td><?php echo $hasil['stock']; ?></td>
                    <td>
                      <a href="index.php?p=editbarang&id=<?php echo $hasil['idBarang']; ?>"><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i></button></a>
                      <a onclick="return confirm('apakah anda yakin? ');" href="deletebarang.php?id=<?php echo $hasil['idBarang']; ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                    </td>
                  </tr>
                  <?php
                  
                    }

                  ?>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>