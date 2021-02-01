<html>
<head>
	<title>INPUT DATA PEMBELI ALAT PANCING</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="judul">		
		<h1>TOKO PANCING MAJU MUNDUR</h1>
		<h2>DESA KOTA RAYA</h2>
		<h3>KEC.KUNTO DARUSSALAM</h3></div>
	
	<h3>INPUT DATA PEMBELI ALAT PANCING</h3>
	
	<form action="adding-proses.php" method="GET">
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>KODE BARANG</td>
				<td>:</td>
				<td><input type="text" name="kode_barang" size="30" required></td>
			</tr>
			<tr>
				<td>NAMA BARANG</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" size="30" required></td>
			</tr>
			<tr>
				<td>JENIS BARANG</td>
				<td>:</td>
				<td><input type="text" name="jenis_barang" size="30" required></td>
			</tr>
				<td>NAMA PEMBELI</td>
				<td>:</td>
				<td><input type="text" name="nama_pembeli" size="30" required></td>
			</tr>
			<tr>
				<td>ALAMAT PEMBELI</td>
				<td>:</td>
				<td><input type="text" name="alamat_pembeli" size="30" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="simpan"> <a href = "output.php">Lihat Data</a></td>
			</tr>
		</table>
	</form>
</body>
</html>