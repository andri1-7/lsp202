<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Dosen</title>
</head>
<body>
 
	<h2>Tambah Data Dosen</h2>
	<br/>
	<a href="<?php echo site_url('dosen');?>">KEMBALI</a>
	<br/>
	<div style="color: red"><?php echo $message;?></div>
	<form method="post" action="<?php echo site_url('dosen/tambah_aksi');?>" method="post" />
		<table>
			<tr>			
				<td>Kode</td>
				<td><input type="number" name="kd_dosen"></td>

			</tr>
			<tr>
				<td>Nama Dosen</td>
				<td><input type="text" name="nama"></td>
			</tr>
				<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jenis_kelamin"></td>
			</tr>
			<tr>
				<td>Alamat Dosen</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>