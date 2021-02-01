<html>
<head>
	<title>PEMBELIAN TOKO PANCING</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">		
		<h1>TOKO PANCING MAJU MUNDUR</h1>
		<h2>DESA KOTA RAYA</h2>
		<h3>KEC.KUNTO DARUSSALAM</h3></div>

<?php
	include 'koneksi.php';
	?>
		<h4><a href = "adding.php">+ Data Pembeli Baru</a></h4>
		<h2><p align="center">Tabel Pembelian Alat Pancing Toko maju Mundur</h2>
		<table cellpadding="5" cellspacing="0" border=3 align="center">
		<thead align="center">
		<tr bgcolor="#00CCFF">
		 <th>No</th>
		 <th>Kode Barang</th>
		 <th>Nama Barang</th>
		 <th>Jenis Barang</th>
		 <th>Nama Pembeli</th>
		 <th>Alamat Pembeli</th>
		 <th>Action</th>
		</tr>
		</thead>
			<?php
				$query = $conn->query ("SELECT * FROM tabel_pelanggan");
				$total = mysqli_num_rows($query);
				$no = 1;
				
				while ($data=mysqli_fetch_array($query)) {
			?>
			<tbody>
			 <tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data['kode_barang']; ?></a></td>
				<td><?php echo $data['nama_barang']; ?></td>
				<td><?php echo $data['jenis_barang']; ?></td>
				<td><?php echo $data['nama_pembeli']; ?></td>
				<td><?php echo $data['alamat_pembeli']; ?></td>
				<td align="center"><a href="hapus.php?kode_barang=<?php echo $data['kode_barang']; ?> "onclick="return confirm('Anda yakin ingin menghapus Anggota <?php echo $data['nama_pembeli'];?> ?')">HAPUS</a> | 
				<a href="update.php?kode_barang=<?php echo $data['kode_barang']; ?> "onclick="return confirm('Anda yakin ingin mengedit Anggota <?php echo $data['nama_pembeli'];?> ?')">EDIT</a></td>
			</tr>
			
		<?php $no++; } ?>
		
			</tbody>
</body>
</html>