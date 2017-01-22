<?php
  if(!defined("INDEX")) die("---");
?>

<!-- /.di atas itu heder dan navigasi sidebar -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Management Kategori</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<div class="row">
			    <div class="col-lg-12">
			    	<?php

					if(isset($_GET['id'])){
						if(hapusKategori($_GET['id'])){
							echo "Data Berhasil Dihapus";
							echo "<meta http-equiv='refresh' content='1; url=?tampil=managementkategori'>";
						}
						else{
							echo "Hapus data gagal";
						}
					}
					?>

                </div>
                <!-- /.col-lg-12 -->
			</div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include('footer.php'); ?>
