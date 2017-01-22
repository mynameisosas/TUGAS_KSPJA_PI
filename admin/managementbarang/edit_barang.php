<?php
  if(!defined("INDEX")) die("---");
?>

<!-- /.di atas itu heder dan navigasi sidebar -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Management Barang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
			<?php
                if(isset($_POST['submit'])){
                    if (editBarang($_POST['nama'],$_POST['ukuran'],$_POST['jenis'],$_POST['kategori'],$_POST['harga'],$_FILES['gambar'],$_GET['id'])) {
                        echo "Update Berhasil";
                        echo"<meta http-equiv='refresh' content='1; url=?tampil=managementbarang'>";
                    }
                }
        

                global $con;
                    
                $query = "Select * from barang where id_barang = '$_GET[id]'";
                $result = mysqli_query($con, $query);

                while ($data= mysqli_fetch_assoc($result)){

            ?>
			    <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">Edit Barang</div>
                            <div class="panel-body pan">
                                <form method="post" name="form1" enctype="multipart/form-data">
                                    <div class="form-body pal">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                    </div>
                                                    <input id="inputName" type="hidden" name="id" value="<?php echo $data['id_barang']; ?>" />                            
                                                    <input id="inputName" type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Ukuran</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                    <input id="inputName" type="text" name="ukuran" class="form-control" value="<?php echo $data['ukuran']; ?>" />    
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputPassword" class="control-label">Jenis</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <select id="inputName" type="text" name="jenis" class="form-control" required>
                                                    <option><?php echo $data['jenis']?></option>
                                                    <?php
                                                        global $con;
                                                        $query = "SELECT * FROM Jenis";
                                                        $result = mysqli_query($con,$query);

                                                        while ($data1 = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <option> 
                                                      <?php 
                                                        echo $data1['nama'];
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
                                                    <option><?php echo $data['kategori']?></option>
                                                    <?php
                                                        global $con;
                                                        $query = "SELECT * FROM kategori";
                                                        $result = mysqli_query($con,$query);

                                                        while ($data2 = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                    <option> 
                                                      <?php 
                                                        echo $data2['nama'];
                                                      ?>    
                                                    </option>
                                                    <?php } ?>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <input id="inputName" type="number" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" />    
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputPassword" class="control-label">Gambar</label>
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    &nbsp&nbsp&nbsp<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto
                                                    <input id="inputName" type="file" name="gambar" value="<?php echo $data['gambar']['name'];?>" class="form-control" />
                                            </div>
                                        </div> 
                                                                                         
                               
                                    </div>
                                <div class="form-actions text-right pal">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </form>
                            <?php } //endwhile ?> 

                            </div>
                    </div>
                   
                </div>
                <!-- /.col-lg-12 -->
			</div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include('footer.php'); ?>
