<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Dosen</title>
</head>
<body>
 
	<h2>Tambah Data Dosen</h2>
	<br/>
	<a href="<?php echo site_url('dosen');?>">KEMBALI</a>
	<br/>
	<div style="color: red"><?php echo $message;?></div>
	<form method="post" action="<?php echo site_url('dosen/edit_aksi');?>" method="post" />
		<table>
			<tr>			
				<td>Kode</td>
				<td><input type="number" name="kd_dosen" value="<?php echo $dosen['kd_dosen'];?>"></td>

			</tr>
			<tr>
				<td>Nama Dosen</td>
				<td><input type="text" name="nama" value="<?php echo $dosen['nama'];?>"></td>
			</tr>
			<tr>
				<td>Alamat Dosen</td>
				<td><input type="text" name="alamat" value="<?php echo $dosen['alamat'];?>"></td>
			</tr>
			<tr>
				<td>jenis kelamin</td>
				<td><input type="text" name="jenis_kelamin" value="<?php echo $dosen['jenis_kelamin'];?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>