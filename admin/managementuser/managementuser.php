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
						/* menampilkan User */
						global $con;
						$query = "SELECT * FROM user";
						$result = mysqli_query($con,$query);
						$no = 1; // nomor baris
					?>	
			    <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Tabel User
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">					
								<thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>email</th>
                                        <th>No Telefon</th>
										<th>Aksi</th>
                                    </tr>
                                </thead>
								
                                <tbody>
									<?php 
										$no=0;
										while ($data = mysqli_fetch_assoc($result)) {	
										$no++;
									?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['password']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['no_hp']; ?></td>
										<td>
											<a href="?tampil=edit_user&id=<?php echo $data['id_user'] ?>" class="btn btn-warning"> Edit</a>
											<a href="?tampil=hapus_user&id=<?php echo $data['id_user'] ?>" class="btn btn-danger"> Hapus</a>
										</td>
                                    </tr>
									<?php } ?>
                                </tbody>
								
                            </table>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
			</div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include('footer.php'); ?>
