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
			    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Tambah Jenis</div>
                            <div class="panel-body pan">
                                <form method="post" name="form1" action="?tampil=tambah_jenis_proses">
                                    <div class="form-body pal">
                                        <div class="form-group">
                                            <label>Nama Jenis</label>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                    </div>
                                                    <input id="inputName" type="hidden" name="id"/>                            
                                                    <input id="inputName" type="text" name="nama" class="form-control" placeholder="Nama Jenis" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-actions text-right pal">
                                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                                </div>
                            </form>
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
