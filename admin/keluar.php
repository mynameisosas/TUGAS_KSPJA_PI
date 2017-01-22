<?php
  if(!defined("INDEX")) die("---");
?>

<!-- /.di atas itu heder dan navigasi sidebar -->
        <div id="page-wrapper">
            <!-- /.row -->
			<div class="row">
				<?php
					if(!defined("INDEX")) die("---");
					
					session_destroy();
					
					echo "<h3 style='color:red'>Anda telah keluar</h3>";
					echo "<meta http-equiv='refresh' content='1; url=login.php'>";
				?>
			</div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
