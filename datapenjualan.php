<div class="row">
<div class="box">
            <div class="box-header">
              <h3 class="box-title">tABLE DATA PENJUALAN</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Tanggal Penjualan</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Penjualan</th>
                    <th>Pendapatan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php
                  
                    include "koneksi.php";
                    $tampil = mysqli_query($mysqli, "select a.*, b.* from jualsatuan a inner join barang  b on a.idBarang=b.idBarang");
                    $no =1;
                    while($hasil = mysqli_fetch_array($tampil)){
                  ?>
                  <tbody>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $hasil['tanggal']; ?></td>
                    <td><?php echo $hasil['namabarang']; ?></td>
                    <td><?php echo $hasil['jumlah']; ?></td>
                    <td><?php echo "Rp ".number_format($hasil['hargajual']); ?></td>
                    <td><?php echo "Rp ".number_format($hasil['totaljual']); ?></td>
                    <td><?php echo "Rp ".number_format($pendapatan = $hasil['jumlah']*$hasil['hargajual']-$hasil['hargamodal']*$hasil['jumlah']);?></td>
                    <td>
                      <a onclick="return confirm('apakah anda yakin? ');" href="deletepenjualan.php?id=<?php echo $hasil['idjual']; ?>"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
                    </td>
                  </tr>
                  <?php
                  $sum = $sum + $pendapatan;

                    }
                    
                  ?>
                  <?php ?>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>Total Pendapatan</td>
                      <td><?php echo "Rp ".number_format($sum);?></td>
                      <td></td>
                  </tr>
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