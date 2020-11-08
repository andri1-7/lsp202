<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title; ?></title>
</head>

<body>

  <h2><?php echo $message; ?></h2>
  <br />
  <a href="<?php echo site_url('krs/tambah/'); ?>">+ TAMBAH KRS</a>
  <br />
  <br />
  <?php echo $message; ?>
  <Table border="1">
    <thead>
      <tr>
        <th>NO</th>
        <th>Nama</th>
        <th>Ruang</th>
        <th>Waktu</th>
        <th>Semester</th>
        <th>OPSI</th>

      </tr>
    </thead>
    <?php $no = 0;
    foreach ($krs as $row) : $no++; ?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row->nama; ?></td>
        <td><?php echo $row->ruang; ?></td>
        <td><?php echo $row->waktu; ?></td>
        <td><?php echo $row->semester; ?></td>



        <td><a href="<?php echo site_url('krs/edit/' . $row->id); ?>">edit</a>

          <a href="<?php echo base_url(); ?>krs/hapus/<?php echo $row->id; ?> " onclick="return confirm('Are you sure you want to delete this item?');"> Hapus</a></td>
      </tr>
    <?php endforeach; ?>
  </Table>


  <br />
  <a href="<?php echo base_url('admin'); ?>">Back To Main Menu</a><br>
  <a href="<?php echo base_url('login/logout'); ?>">LOGOUT</a>
</body>

</html>