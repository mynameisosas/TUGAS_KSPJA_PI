<?php
  if(!defined("INDEX")) die("---");
?>

<!-- /.di atas itu heder dan navigasi sidebar -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Management Jenis</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
			<?php

                if(isset($_POST['submit'])){
                    if (editJenis($_POST['nama'],$_GET['id'])) {
                        echo "Update Berhasil";
                        echo"<meta http-equiv='refresh' content='1; url=?tampil=managementjenis'>";
                    }
                }
                //}

                    global $con;
                    
                    $query = "Select * from jenis where id_jenis = '$_GET[id]'";
                    $result = mysqli_query($con, $query);

                while ($data= mysqli_fetch_assoc($result)){

            ?>
			    <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">Edit Jenis</div>
                            <div class="panel-body pan">
                                <form method="post" name="form1">
                                    <div class="form-body pal">
                                        <div class="form-group">
                                            <label>Nama Jenis</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                    </div>
                                                    <input id="inputName" type="hidden" name="id" value="<?php echo $data['id_jenis']; ?>" />                            
                                                    <input id="inputName" type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-actions text-right pal">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </form>
                            <?php } //endwhile ?> 
                            <?php

                            ?>
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
