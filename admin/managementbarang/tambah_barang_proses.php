<?php
	if(!defined("INDEX")) die("---");
	
	global $con;

	$nama 		= $_POST['nama'];
	$ukuran		= $_POST['ukuran'];
	$jenis		= $_POST['jenis'];
	$kategori	= $_POST['kategori'];
	$harga		= $_POST['harga'];


	// Ambil Data yang Dikirim dari Form
	$nama_file 		= $_FILES['gambar']['name'];
	$ukuran_file 	= $_FILES['gambar']['size'];
	$tipe_file 		= $_FILES['gambar']['type'];
	$tmp_file 		= $_FILES['gambar']['tmp_name'];

	// Set path folder tempat menyimpan gambarnya
	$path = "../images/".$nama_file;

	if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ 
		// Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
	  	// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
	  	
	  	if($ukuran_file <= 1000000){ 
	  		// Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
	    	// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
	    	// Proses upload
	    	
	    	if(move_uploaded_file($tmp_file, $path)){ 
	    		// Cek apakah gambar berhasil diupload atau tidak
	      		// Jika gambar berhasil diupload, Lakukan :  
	      		// Proses simpan ke Database
	      		
	      		$query = "INSERT 	INTO 	barang (nama, ukuran, jenis, kategori, harga, gambar)	
						values( '$nama',
								'$ukuran',
								'$jenis',
								'$kategori',
								'$harga',
								'$nama_file'
							)";

				if(mysqli_query($con,$query)){
					echo "Data telah tersimpan";
					echo "<meta http-equiv='refresh' content='1; url=?tampil=managementbarang'>";
					return true;
				}
				else {
					return false;
					echo "Gagal Query";
				}
			}else{
				// Jika gambar gagal diupload, Lakukan :
				echo "Maaf, Gambar gagal untuk diupload.";
			  	echo "<br><a href='form.php'>Kembali Ke Form</a>";
			}
		}else{
			// Jika ukuran file lebih dari 1MB, lakukan :
			echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
			echo "<br><a href='form.php'>Kembali Ke Form</a>";
		}
	}else{
		// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
		echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
		echo "<br><a href='form.php'>Kembali Ke Form</a>";
	}

?>