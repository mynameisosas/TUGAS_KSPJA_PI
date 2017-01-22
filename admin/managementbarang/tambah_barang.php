<?php
  if(!defined("INDEX")) die("---");
?>

<!-- /.di atas itu heder dan navigasi sidebar -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Tambah Barang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                <form method="post" name="form1" enctype="multipart/form-data" action="?tampil=tambah_barang_proses">
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="InputName" class="control-label">Nama</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                        <input id="inputName" type="text" name="nama" placeholder="Nama Barang" class="form-control" required />
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="InputName" class="control-label">Ukuran</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>    
                                    </div>
                                        <input id="inputName" type="text" name="ukuran" placeholder="Ukuran (ml/kg)" class="form-control" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword" class="control-label">Jenis</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <select id="inputName" type="text" name="jenis" class="form-control" required>
                                    <option value=""> == Pilih Jenis == </option>
                                    <?php
                                        global $con;
                                        $query = "SELECT * FROM Jenis";
                                        $result = mysqli_query($con,$query);

                                        while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option> 
                                      <?php 
                                        echo $data['nama'];
                                      ?>    
                                    </option>
                                    <?php } ?>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword" class="control-label">Kategori</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <select id="inputName" type="text" name="kategori" class="form-control" required>
                                    <option value=""> == Pilih Kategori == </option>
                                    <?php
                                        global $con;
                                        $query = "SELECT * FROM kategori";
                                        $result = mysqli_query($con,$query);

                                        while ($data = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option> 
                                      <?php 
                                        echo $data['nama'];
                                      ?>    
                                    </option>
                                    <?php } ?>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword" class="control-label">Harga</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input id="inputName" type="number" name="harga" placeholder="Harga" class="form-control" required />
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="InputPassword" class="control-label">Gambar</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input id="inputName" type="file" name="gambar" placeholder="Gambar" class="form-control" required />
                            </div>
                        </div>            
                    </div>
                    <div class="form-actions text-right pal">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                        <button type="reset" name="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> Reset</button>
                    </div>
                </form>
			</div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include('footer.php'); ?>
