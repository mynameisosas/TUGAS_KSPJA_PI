<?php
  if(!defined("INDEX")) die("---");
?>

<!-- /.di atas itu heder dan navigasi sidebar -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Management User</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
			<?php

                if(isset($_POST['submit'])){
                    if (editUser($_POST['username'],$_POST['password'],$_POST['email'],$_POST['no_hp'],$_GET['id'])) {
                        echo "Update Berhasil";
                        echo"<meta http-equiv='refresh' content='1; url=?tampil=managementuser'>";
                    }
                }
        

                global $con;
                    
                $query = "Select * from user where id_user = '$_GET[id]'";
                $result = mysqli_query($con, $query);

                while ($data= mysqli_fetch_assoc($result)){

            ?>
			    <div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">Edit User</div>
                            <div class="panel-body pan">
                                <form method="post" name="form1">
                                    <div class="form-body pal">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                    </div>
                                                    <input id="inputName" type="hidden" name="id" value="<?php echo $data['id_user']; ?>" />                            
                                                    <input id="inputName" type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-lock"></i>
                                                    </div>
                                                    <input id="inputName" type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>" />    
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-envelope"></i>
                                                    </div>
                                                    <input id="inputName" type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>" />    
                                                </div>    
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>No. Handphone</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                    <input id="inputName" type="text" name="no_hp" class="form-control" value="<?php echo $data['no_hp']; ?>" />    
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
