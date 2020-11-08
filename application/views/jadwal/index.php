<!DOCTYPE html>
<html>
<head>
	<title>Jadwal Mengajar</title>
</head>
<body>
 
	<h2>Jadwal Mengajar</h2>
	<br/>
	<a href="<?php echo site_url('jadwal/tambah/');?>">+ TAMBAH Jadwal</a>
	<br/>
	<br/>
	<?php echo $message;?>
<Table border="1">
    <thead>
        <tr>
           <th>NO</th>
           <th>kode dosen</th>
			<th>nama dosen</th>
			<th>kode matkul</th>
            <th>nama matkul</th>
			<th>ruang</th>
            <th>waktu</th>
			<th>OPSI</th>
           
        </tr>
    </thead>
    <?php $no=0; foreach($jadwal as $row ): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->kd_dosen;?></td>
        <td><?php echo $row->nama_dosen;?></td>
        <td><?php echo $row->kd_matkul;?></td>
        <td><?php echo $row->nama_matkul;?></td>
         <td><?php echo $row->ruang;?></td>
         <td><?php echo $row->waktu;?></td>
       
        
        <td><a href="<?php echo site_url('jadwal/edit/'.$row->id);?>">edit</a>
        
        <a href="<?php echo base_url();?>jadwal/hapus/<?php echo $row->id;?> " onclick="return confirm('Are you sure you want to delete this item?');">   Hapus</a></td>
    </tr>
    <?php endforeach;?>
</Table>


	<br/>
 	<a href="<?php echo base_url('admin');?>">Back To Main Menu</a><br>
	<a href="<?php echo base_url('login/logout'); ?>">LOGOUT</a>
</body>
</html>