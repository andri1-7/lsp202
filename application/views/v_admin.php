<!DOCTYPE html>
<html>
<head>
	<title>Membuat login dengan codeigniter</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	
	<h4>Selamat datang, <?php echo $this->session->userdata("nama"); ?>! anda telah login.</h4>
	<a href="<?php echo base_url('dosen'); ?>"><button>DATA DOSEN</button></a>||<a href="<?php echo base_url('matkul'); ?>"><button>MATKUL</button></a>
 ||<a href="jadwal"><button>JADWAL MENGAJAR</button></a>||<a href="krs"><button>KRS</button></a>
	<br/></but
	<br/>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>