<?php
 include 'koneksi.php';
 
 $kode_barang= $_GET['kode_barang'];
 $query= $conn->query("DELETE FROM tabel_pelanggan WHERE kode_barang='$kode_barang'");
 if ($query) {
				 echo "<script> alert('Data berhasil dihapus')</script>";
				 echo "<meta http-equiv='refresh' content='0; url=output.php'>"; 
				 }
	else{
		echo "Data Anda gagal dihapus. Ulangi Sekali Lagi";
		echo "<meta http-equiv='refresh' content='0; url=output.php'>"; 
	}	
?>