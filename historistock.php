<div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">TABLE DATA HISTORY STOK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nomor</th>
                  <th>Nama Barang</th>
                  <th>STOCK MASUK</th>
                  <th>TANGGAL MASUK</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <?php
                
                  include "koneksi.php";
                  $tampil = mysqli_query($mysqli, "select a.*, b.* from stock a inner join barang  b on a.idBarang=b.idBarang");
                  $no =1;
                  while($hasil = mysqli_fetch_array($tampil)){
                ?>
                <tbody>
                <tr>
                  <td><?php echo $no++;?></td>
                  <td><?php echo $hasil['namabarang']; ?></td>
                  <td><?php echo $hasil['jumlah']; ?></td>
                  <td><?php echo $hasil['tanggal']; ?></td>
                  <td>
                    <a href="index.php?p=editstock&id=<?php echo $hasil['idStock']; ?>"><button class="btn btn-sm btn-info"><i class="fa fa-edit"></i></button></a>
                    <a onclick="return confirm('apakah anda yakin? ');" href="deletestock.php?idBarang=<?php echo $hasil['idBarang']; ?>&idStock=<?php echo $hasil['idStock']; ?>&stok=<?php //echo $hasil['jumlah'];?>"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
                  </td>
                </tr>
                <?php
                
                  }

                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </div>