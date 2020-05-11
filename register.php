<section class="content">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">FORM REGISTER</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal" method="post" action="proses.php">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">NAMA</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" placeholder="NAMA" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">JENIS KELAMIN</label>
                    
                    <div class="col-sm-10">
                    <select name="jeniskelamin" class="form-control col-sm-10">
                        <option value="pria" >PRIA</option>
                        <option value="wanita" >WANITA</option>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">USERNAME</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="username" placeholder="USERNAME" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">PASSWORD</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="password" placeholder="PASSWORD" required>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">REGISTER</button>
            </div>
            <!-- /.box-footer -->
        </form>
        </div>
    </div>
</section>