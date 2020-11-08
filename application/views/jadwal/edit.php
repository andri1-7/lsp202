<!DOCTYPE html>
<html>
<head>
	<title>Edit jadwal</title>
</head>
<body>
 
	<h2>Edit jadwal</h2>
	<br/>
	<a href="<?php echo site_url('jadwal');?>">KEMBALI</a>
	<br/>
	<div style="color: red"><?php echo $message;?></div>
	<form method="post" action="<?php echo site_url('jadwal/edit_aksi');?>" method="post" />
		<input type="hidden" name="id" value="<?php echo $jadwal['id'];?>" class="form-control" autofocus="" placeholder=""> 
		<table>
			<tr>			
				<td>Dosen</td>
				<td> <select name="kd_dosen" id="kd_dosen" class="form-control">
                <option value="<?php echo $jadwal['kd_dosen'];?>"><?php echo $jadwal['kd_dosen'];?> || <?php echo $jadwal['nama_dosen'];?></option>
                 <?php foreach($dosen as $row ):?>
                 <option value="<?php echo $row->kd_dosen;?>"><?php echo $row->kd_dosen.' || '.$row->nama;?></option>
                  <?php endforeach;?>
            </select></td>

			</tr>
			<tr>
				<td>Matkul</td>
				<td><select name="kd_matkul" id="kd_matkul" class="form-control">
                <option value="<?php echo $jadwal['kd_matkul'];?>"><?php echo $jadwal['kd_matkul'];?> || <?php echo $jadwal['nama_matkul'];?></option>
                 <?php foreach($matkul as $row ):?>
                 <option value="<?php echo $row->kd_matkul;?>"><?php echo $row->kd_matkul.' || '.$row->nama;?></option>
                  <?php endforeach;?>
            </select></td>
			</tr>
			<tr>
				<td>Ruang</td>
				<td><input type="text" name="ruang" value="<?php echo $jadwal['ruang'];?>"></td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td><input type="text" name="waktu" value="<?php echo $jadwal['waktu'];?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>