<!DOCTYPE html>
<html>
<head>
	<title>$title</title>
</head>
<body>
 
	<h2>Data Dosen</h2>
	<br/>
	<a href="<?php echo site_url('dosen/tambah/');?>">+ TAMBAH DOSEN</a>
	<br/>
	<br/>
	<?php echo $message;?>
<Table border="1">
    <thead>
        <tr>
           <th>NO</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Almat</th>
            <th>jenis_kelamin</th>
			<th>OPSI</th>
           
        </tr>
    </thead>
    <?php $no=0; foreach($dosen as $row ): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->kd_dosen;?></td>
        <td><?php echo $row->nama;?></td>
         <td><?php echo $row->alamat;?></td>
         <td><?php echo $row->jenis_kelamin;?></td>
       
        
        <td><a href="<?php echo site_url('dosen/edit/'.$row->kd_dosen);?>">edit</a>
        
        <a href="<?php echo base_url();?>dosen/hapus/<?php echo $row->kd_dosen;?> " onclick="return confirm('Are you sure you want to delete this item?');">   Hapus</a></td>
    </tr>
    <?php endforeach;?>
</Table>


	<br/>
 	<a href="<?php echo base_url('admin');?>">Back To Main Menu</a><br>
	<a href="<?php echo base_url('login/logout'); ?>">LOGOUT</a>
</body>
</html>