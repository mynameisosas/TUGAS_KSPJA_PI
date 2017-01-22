<?php
	include '../library/config.php';
	include '../library/proses.php';

	if(!defined("INDEX")) die("---");
	
	if( isset($_GET['tampil']) ) $tampil = $_GET['tampil'];
	else $tampil = "beranda";
	
	if( $tampil == "beranda" )						include("beranda.php");	
	
	elseif( $tampil == "keluar" )					include("keluar.php");
	
	// ini untuk router user // 
	elseif( $tampil == "managementuser")			include("managementuser/managementuser.php");
	elseif( $tampil == "edit_user")					include("managementuser/edit_user.php");
	elseif( $tampil == "hapus_user")				include("managementuser/hapus_user.php");
	// ====================== //

	// ini untuk router barang //
	elseif( $tampil == "managementbarang")			include("managementbarang/managementbarang.php");
	elseif( $tampil == "tambah_barang")				include("managementbarang/tambah_barang.php");
	elseif( $tampil == "tambah_barang_proses")		include("managementbarang/tambah_barang_proses.php");
	elseif( $tampil == "edit_barang")				include("managementbarang/edit_barang.php");
	elseif( $tampil == "hapus_barang")				include("managementbarang/hapus_barang.php");
	// ====================== // 

	// ini untuk router kategori //
	elseif( $tampil == "managementkategori")		include("managementkategori/managementkategori.php");
	elseif( $tampil == "tambah_kategori")			include("managementkategori/tambah_kategori.php");
	elseif( $tampil == "tambah_kategori_proses")	include("managementkategori/tambah_kategori_proses.php");
	elseif( $tampil == "edit_kategori")				include("managementkategori/edit_kategori.php");
	elseif( $tampil == "hapus_kategori")			include("managementkategori/hapus_kategori.php");
	// ====================== // 

	// ini untuk router jenis //
	elseif( $tampil == "managementjenis")			include("managementjenis/managementjenis.php");
	elseif( $tampil == "tambah_jenis")				include("managementjenis/tambah_jenis.php");
	elseif( $tampil == "tambah_jenis_proses")		include("managementjenis/tambah_jenis_proses.php");
	elseif( $tampil == "edit_jenis")				include("managementjenis/edit_jenis.php");
	elseif( $tampil == "hapus_jenis")				include("managementjenis/hapus_jenis.php");
	// ====================== // 


	// batas Penting //

	else echo"Konten tidak ada";
?>