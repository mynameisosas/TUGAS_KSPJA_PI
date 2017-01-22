<?php
  if(!defined("INDEX")) die("---");
?>

<!-- /.di atas itu heder dan navigasi sidebar -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Tambah Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
                <form method="post" name="form1" action="?tampil=tambah_kategori_proses">
                    <div class="form-body pal">
                        <div class="form-group">
                            <label for="InputName" class="control-label">Nama Kategori</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                        <input id="inputName" type="text" name="nama" placeholder="Nama Kategori" class="form-control" required />
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
