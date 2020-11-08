<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
</head>
<body>
 
	<h2><?php echo $message;?></h2>
	<br/>
	<a href="<?php echo site_url('matkul/tambah/');?>">+ TAMBAH MATA KULIAH</a>
	<br/>
	<br/>
	<?php echo $message;?>
<Table border="1">
    <thead>
        <tr>
           <th>NO</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>sks</th>
			<th>OPSI</th>
           
        </tr>
    </thead>
    <?php $no=0; foreach($matkul as $row ): $no++;?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $row->kd_matkul;?></td>
        <td><?php echo $row->nama;?></td>
        <td><?php echo $row->sks;?></td>

       
        
        <td><a href="<?php echo site_url('matkul/edit/'.$row->kd_matkul);?>">edit</a>
        
        <a href="<?php echo base_url();?>matkul/hapus/<?php echo $row->kd_matkul;?> " onclick="return confirm('Are you sure you want to delete this item?');">   Hapus</a></td>
    </tr>
    <?php endforeach;?>
</Table>


	<br/>
 	<a href="<?php echo base_url('admin');?>">Back To Main Menu</a><br>
	<a href="<?php echo base_url('login/logout'); ?>">LOGOUT</a>
</body>
</html>