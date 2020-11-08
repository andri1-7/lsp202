<!DOCTYPE html>
<html>

<head>
  <title>Edit krs</title>
</head>

<body>

  <h2>Edit krs</h2>
  <br />
  <a href="<?php echo site_url('krs'); ?>">KEMBALI</a>
  <br />
  <div style="color: red"><?php echo $message; ?></div>
  <form method="post" action="<?php echo site_url('krs/edit_aksi'); ?>" method="post" />
  <input type="hidden" name="id" value="<?php echo $krs['id']; ?>" class="form-control" autofocus="" placeholder="">
  <table>
    <tr>
      <td>Dosen</td>
      <td> <select name="id_mhs" id="id_mhs" class="form-control">
          <option value="<?php echo $krs['id_mhs']; ?>"><?php echo $krs['id_mhs']; ?> || <?php echo $krs['nama']; ?></option>
          <?php foreach ($mahasiswa as $row) : ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->id . ' || ' . $row->nama; ?></option>
          <?php endforeach; ?>
        </select></td>

    </tr>
    <tr>
      <td>Matkul</td>
      <td><select name="id_jadwal" id="id_jadwal" class="form-control">
          <option value="<?php echo $krs['id_jadwal']; ?>"><?php echo $krs['id_jadwal']; ?> || <?php echo $krs['ruang']; ?></option>
          <?php foreach ($jadwal as $row) : ?>
            <option value="<?php echo $row->id; ?>"><?php echo $row->id . ' || ' . $row->ruang; ?></option>
          <?php endforeach; ?>
        </select></td>
    </tr>
    <tr>
      <td>semester</td>
      <td><input type="text" name="semester" value="<?php echo $krs['semester']; ?>"></td>
    </tr>

    <tr>
      <td></td>
      <td><input type="submit" value="SIMPAN"></td>
    </tr>
  </table>
  </form>
</body>

</html>