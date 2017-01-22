<?php
/* proses THE KULAK */
include ("config.php");

	// Fungsi untuk user // 
	function hapusUser($id){

		global $con;

		$id = $_GET['id'];
		// hapus SMS dari kotak masuk
		$query  = "DELETE FROM user WHERE id_user='$id'";
		$result = mysqli_query($con,$query);
		return $result;
	}	

	function tampil_per_iduser($id){
		global $con;
		$query = "Select * from user where id_user = $id";
		$result = mysqli_query($con,$query);

		return $result;

	}

	function editUser($username,$password,$email,$phone_number,$id_user){
		global $con;
		$query = "update user set 	username  = '$username',
									password  = '$password',
									email 	  = '$email',
									no_hp 	  = '$phone_number'
		where id_user = '$id_user'";
		if (mysqli_query($con, $query)) {
			return true;
		}
	}
	// ====================================================================== //

	// Fungsi untuk Barang //
	function editBarang($nama,$ukuran,$jenis,$kategori,$harga,$gambar,$id_barang){
		global $con;
		// Cek apakah user ingin mengubah fotonya atau tidak
		if(isset($_POST['ubah_foto'])){ 
			// Jika user menceklis checkbox yang ada di form ubah, lakukan :
		  	// Ambil data foto yang dipilih dari form
		  	$foto 	= $_FILES['gambar']['name'];
		  	$tmp 	= $_FILES['gambar']['tmp_name'];
		  	
		  	// Set path folder tempat menyimpan fotonya
		  	$path 	= "../images/".$foto;
		  	
		  	// Proses upload
		  	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
		    	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		    	$query 	= "SELECT * FROM barang WHERE id_barang='".$id_barang."'";
		    	$sql 	= mysqli_query($con, $query); // Eksekusi/Jalankan query dari variabel $query
		    	$data 	= mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
		    	// Hapus file foto sebelumnya yang ada di folder images
		    	unlink("../images/".$data['gambar']);
		    
		    	// Proses ubah data ke Database
		    	$query 	= "UPDATE barang SET nama='".$nama."', ukuran='".$ukuran."', jenis='".$jenis."', kategori='".$kategori."', harga='".$harga."', gambar='".$foto."' WHERE id_barang='".$id_barang."'";
		    	$sql 	= mysqli_query($con, $query); 
		    	// Eksekusi/ Jalankan query dari variabel $query
		    	if($sql){ 
		    		// Cek jika proses simpan ke database sukses atau tidak
		      		// Jika Sukses, Lakukan :
		      		return true;
		      		//echo "<br><a href='?tampil=managementbarang'>Kembali Ke Form</a>"; 
		      		// Redirect ke halaman index.php
		    	}else{
		      		// Jika Gagal, Lakukan :
		      		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		      		echo "<br><a href='?tampil=managementbarang'>Kembali Ke Form</a>";
		    	}
		  	}else{
		    	// Jika gambar gagal diupload, Lakukan :
		    	echo "Maaf, Gambar gagal untuk diupload.";
		    	echo "<br><a href='?tampil=managementbarang'>Kembali Ke Form</a>";
		  	}
		}else{ 
			// Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
			// Proses ubah data ke Database
			$query 	= "UPDATE barang SET nama='".$nama."', ukuran='".$ukuran."', jenis='".$jenis."', kategori='".$kategori."', harga='".$harga."' WHERE id_barang='".$id_barang."'";
			$sql	= mysqli_query($con, $query); 
			// Eksekusi/ Jalankan query dari variabel $query
		  	if($sql){ 
		  		// Cek jika proses simpan ke database sukses atau tidak
		    	// Jika Sukses, Lakukan :
		    	return true;
		    	//echo "<br><a href='?tampil=managementbarang'>Kembali Ke Form</a>"; 
		    	// Redirect ke halaman index.php
		  	}else{
		    	// Jika Gagal, Lakukan :
		    	echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			    echo "<br><a href='?tampil=managementbarang'>Kembali Ke Form</a>";
			}
		}



		/*global $con;
		$query = "update barang set 	nama 		= '$nama',
										ukuran 		= '$ukuran',
										jenis 		= '$jenis',
										kategori 	= '$kategori',
										harga 		= '$harga',
										gambar		= '$gambar'
				  where id_barang = '$id_barang'";
		if (mysqli_query($con, $query)) {
			return true;
		}*/
	}

	function hapusBarang($id){	
		global $con;
		$id 	= $_GET['id'];

		// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
		$query 	= "SELECT * FROM barang WHERE id_barang='".$id."'";
		$sql 	= mysqli_query($con, $query); // Eksekusi/Jalankan query dari variabel $query
		$data 	= mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
		// Hapus foto yang telah diupload dari folder images
		unlink("../images/".$data['gambar']);

		// hapus SMS dari kotak masuk
		$query  = "DELETE FROM barang WHERE id_barang='$id'";
		$result = mysqli_query($con,$query);
		return $result;
		
	}

	// ====================================================================== //
	
	// Fungsi untuk Kategori //
	function editKategori($nama,$id_kategori){
		global $con;
		$query = "update kategori set 	nama  = '$nama'
				  where id_kategori = '$id_kategori'";
		if (mysqli_query($con, $query)) {
			return true;
		}
	}
	

	function hapusKategori($id){	
		global $con;
		$id = $_GET['id'];
		// hapus SMS dari kotak masuk
		$query  = "DELETE FROM kategori WHERE id_kategori='$id'";
		$result = mysqli_query($con,$query);
		return $result;
		
	}

	// ====================================================================== //

	// Fungsi untuk Jenis //
	function editJenis($nama,$id_jenis){
		global $con;
		$query = "update Jenis set 	nama  = '$nama'
				  where id_jenis = '$id_jenis'";
		if (mysqli_query($con, $query)) {
			return true;
		}
	}
	

	function hapusJenis($id){	
		global $con;
		$id = $_GET['id'];
		// hapus SMS dari kotak masuk
		$query  = "DELETE FROM jenis WHERE id_jenis='$id'";
		$result = mysqli_query($con,$query);
		return $result;
		
	}

	// ====================================================================== //

	// Batas Penting //
	// Bawah ini gak penting //


//------------------ebd of kontak-------------------
?>