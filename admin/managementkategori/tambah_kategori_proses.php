<?php
	if(!defined("INDEX")) die("---");

	global $con;

	$nama  = $_POST['nama'];

	$query = "INSERT INTO kategori (nama) values('$nama')";

	if(mysqli_query($con,$query)){
		echo "Data telah tersimpan";
		echo "<meta http-equiv='refresh' content='1; url=?tampil=managementkategori'>";
		return true;
	}
	else {
		return false;
		echo "Gagal Query";
	}
			

?>