<?php
	if(!defined("INDEX")) die("---");
?>

<!DOCTYPE html>
<html>
<head>
	<title>SMS Gateway | Sent Items</title>
</head>
<body>
<div class="wrapper">

<?php include('header.php'); ?>
      <!-- Left side column. contains the logo and sidebar -->
      
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/fotoku.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['username'] ;?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li >
              <a href="?tampil=beranda">
                <i class="fa fa-home"></i> <span>Dashboard</span>
              </a>
            </li>
            <li class="treeview">
              <a href="?tampil=create">
                <i class="fa fa-pencil-square-o"></i> <span>Tulis Pesan</span>
              </a>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-envelope"></i>
                <span>Berkas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?tampil=inbox"><i class="fa fa-inbox"></i> Pesan Masuk</a></li>
                <li><a href="?tampil=outbox"><i class="fa fa-send-o"></i> Pesan Keluar</a></li>
                <li  class="active"><a href="?tampil=sentbox"><i class="fa fa-send"></i> Pesan Terkirim</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-phone"></i>
                <span>Kontak</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu" >
                <li><a href="?tampil=contact"><i class="fa fa-book"></i> Phonebook</a></li>
                <li><a href="?tampil=group"><i class="fa fa-users"></i> Group</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="?tampil=user">
                <i class="fa fa-user"></i>
                <span>User</span>
              </a>
            </li>
            </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <div class="content">

<section class="content-header">
          <h1>
            Sentbox Message
            <small>Pesan Terkirim</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="?tampil=beranda"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pesan Terkirim</li>
          </ol>
</section>
<br>
		<?php
		/* menampilkan daftar SMS terkirim */
		include ("library/config.php");
		global $con;
		$query = "SELECT ID,SendingDateTime,DestinationNumber,TextDecoded FROM sentitems order by SendingDateTime desc";
		$result = mysqli_query($con,$query);
		$no = 1; // nomor baris
		?>	
<section class="content">
  <div class="row">
    <div class="col-xs-12">
		<div class="box box-success">
			<div class="box-header">
        <h3 class="box-title">Pesan Terkirim</h3>
      </div>
			<div class="box-body">
				<table id="example1" class="table table-bordered table-hover">
						<thead>
            <tr>
							<th>No.</th>
							<th>Tgl. Terkirim</th>
							<th>Tujuan</th>
							<th>Isi</th>
							<th>Action</th>
						</tr>
            </thead>
            <tbody>
						
					<?php while ($data = mysqli_fetch_assoc($result)) { 
						$xxx=$data['DestinationNumber'];?>
						
						<?php $namakontak = "SELECT Name,Number from pbk where Number='$xxx'";
						$nama = mysqli_query($con,$namakontak); $kontak=mysqli_fetch_assoc($nama);?>

						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $data['SendingDateTime'] ?></td>
							<?php if($kontak>0) { ?>
								<td><?php echo $kontak['Name'] ?></td>
							<?php }
							 else 
							{ ?>
							<td><?php echo $data['DestinationNumber'] ?></td>

								<?php } ?>
							<td><?php echo $data['TextDecoded'] ?></td>
							<td>
								<a href="?tampil=sentbox_baca&id=<?php echo $data['ID'] ?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Baca</a>
								<a href="?tampil=sentbox_hapus&id=<?php echo $data['ID'] ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Anda yakin ?')"><i class="fa fa-times-circle"></i> Hapus</a>
							</td>
						</tr>
						
					<?php $no++; ?>
					<?php } ?>
          </tbody>
				</table>
			</div>
		</div>
    </div>
  </div>
</section>

	</body>
</html>
<?php include('footer/footertabel.php'); ?>