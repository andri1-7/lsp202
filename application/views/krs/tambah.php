<!DOCTYPE html>
<html>
<head>
	<title>Tambah krs</title>
</head>
<body>
 
	<h2>Tambah krs</h2>
	<br/>
	<a href="<?php echo site_url('krs');?>">KEMBALI</a>
	<br/>
	<div style="color: red"><?php echo $message;?></div>
	<form method="post" action="<?php echo site_url('krs/tambah_aksi');?>" method="post" />
		<table>
			<tr>			
				<td>Mahasiswa</td>
				<td> <select name="id_mhs" id="id_mhs" class="form-control">
                <option>--Pilih--</option>
                 <?php foreach($mahasiswa as $row ):?>
                 <option value="<?php echo $row->id;?>"><?php echo $row->id.' || '.$row->nama;?></option>
                  <?php endforeach;?>
            </select></td>

			</tr>
			<tr>
				<td>Jadwal</td>
				<td><select name="id_jadwal" id="id_jadwal" class="form-control">
                <option>--Pilih--</option>
                 <?php foreach($jadwal as $row ):?>
                 <option value="<?php echo $row->id;?>"><?php echo $row->id.' || '.$row->ruang;?></option>
                  <?php endforeach;?>
            </select></td>
			</tr>
			<tr>
				<td>Semester</td>
				<td><input type="text" name="semester"></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>