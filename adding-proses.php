<?php
include 'koneksi.php';
	
	$kode_barang    =$_GET['kode_barang'];
	$nama_barang    =$_GET['nama_barang'];
	$jenis_barang   =$_GET['jenis_barang'];
	$nama_pembeli   =$_GET['nama_pembeli'];
	$alamat_pembeli =$_GET['alamat_pembeli'];
	
	$input = $conn->query("INSERT into tabel_pelanggan values('$kode_barang','$nama_barang','$jenis_barang','$nama_pembeli','$alamat_pembeli')");
	
if($input){
	echo "<script> alert('Data berhasil ditambahkan')</script>";
	echo "<meta http-equiv='refresh' content='0; url=output.php'>";
	}
else{
	echo "<script> alert('Data gagal diinput')</script>";
	echo "<meta http-equiv='refresh' content='0; url=adding.php'>";
	}
?>