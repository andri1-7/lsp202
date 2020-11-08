<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data matkul</title>
</head>
<body>
 
	<h2>Tambah Data matkul</h2>
	<br/>
	<a href="<?php echo site_url('matkul');?>">KEMBALI</a>
	<br/>
	<div style="color: red"><?php echo $message;?></div>
	<form method="post" action="<?php echo site_url('matkul/tambah_aksi');?>" method="post" />
		<table>
			<tr>			
				<td>Kode</td>
				<td><input type="number" name="kd_matkul"></td>

			</tr>
			<tr>
				<td>Mata Kuliah</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>SKS</td>
				<td><input type="text" name="sks"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>