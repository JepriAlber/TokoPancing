<html>
<head>
	<title>EDIT DATA PEMBELI ALAT PANCING</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="judul">		
		<h1>TOKO PANCING MAJU MUNDUR</h1>
		<h2>DESA KOTA RAYA</h2>
		<h3>KEC.KUNTO DARUSSALAM</h3></div>

<?php
include('koneksi.php');
$kode_barang = $_GET['kode_barang'];
$show = $conn->query("SELECT * FROM tabel_pelanggan WHERE kode_barang='$kode_barang'");
	
	if(mysqli_num_rows($show) == 0){
		
		echo '<script>window.history.back()</script>';
		
	}else{
	
		$data = mysqli_fetch_assoc($show);
	
	}
?>
	<h3>EDIT DATA PEMBELI ALAT PANCING</h3>
	<form action="update-process.php" method="GET">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>KODE BARANG</td>
				<td>:</td>
				<td><input type="text" name="kode_barang" value="<?php echo $data['kode_barang']; ?>" required></td>
			</tr>
			<tr>
				<td>NAMA BARANG</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>" required></td>
			</tr>
			<tr>
				<td>JENIS BARANG</td>
				<td>:</td>
				<td><input type="text" name="jenis_barang" value="<?php echo $data['jenis_barang']; ?>" required></td>
			</tr>
			<tr>
				<td>NAMA PEMBELI</td>
				<td>:</td>
				<td><input type="text" name="nama_pembeli" value="<?php echo $data['nama_pembeli']; ?>" required></td>
			</tr>
			<tr>
				<td>ALAMAT PEMBELI</td>
				<td>:</td>
				<td><input type="text" name="alamat_pembeli" value="<?php echo $data['alamat_pembeli']; ?>" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="update" value="update"> <a href = "output.php">Lihat Data</a></td></td>
			</tr>
		</table>
	</form>
</body>
</html>