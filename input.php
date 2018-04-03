<html>
<head>
	<title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>
	<h3>From Tambah Data</h3><hr>
	<br/><br/>
 
	<form action="input.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jurusan = $_POST['jurusan'];
		
		include_once("koneksi.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO users(nim,nama,jurusan) VALUES('$nim','$nama','$jurusan')");
		
		echo "Data Berhasil Di Tambahkan. <a href='index.php'><b>Tampilkan</b></a>";
	}
	?>
</body>
</html>