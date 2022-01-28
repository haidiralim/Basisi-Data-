<html>
<head>
	<title>Tabel  hewan</title>
</head>
<body>
 
	<h3>TABEL HEWAN</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Hewan</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from  hewan where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>nama_hewan</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_hewan" value="<?php echo $d['nama_hewan']; ?>">
					</td>
				</tr>
				<tr>
					<td>GOLONGAN</td>
					<td><input type="text" name="golongan" value="<?php echo $d['golongan']; ?>"></td>
				</tr>
				<tr>
					<td>Habitat</td>
					<td><input type="text" name="habitat" value="<?php echo $d['habitat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input typ[e="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>]