<?php

if(isset($_GET['update'])){

	include('koneksi.php');

	$kode_barang    =$_GET['kode_barang'];
	$nama_barang    =$_GET['nama_barang'];
	$jenis_barang   =$_GET['jenis_barang'];
	$nama_pembeli   =$_GET['nama_pembeli'];
	$alamat_pembeli =$_GET['alamat_pembeli'];
	
	$update = $conn->query("UPDATE tabel_pelanggan SET kode_barang='$kode_barang', nama_barang='$nama_barang', jenis_barang='$jenis_barang', nama_pembeli='$nama_pembeli', alamat_pembeli='$alamat_pembeli' WHERE kode_barang='$kode_barang'") or die(mysql_error());
	
	if($update){
		
		echo 'Data berhasil di simpan! ';
		echo "<meta http-equiv='refresh' content='0; url=output.php'>";
		
	}else{
		
		echo 'Gagal menyimpan data! ';
		echo "<meta http-equiv='refresh' content='0; url=output.php'>";
		
	}

}else{
	echo '<script>window.history.back()</script>';

}
?>