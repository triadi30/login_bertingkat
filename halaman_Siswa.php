<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<title>Siswa</title>
</head>

<body>
	<?php
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if ($_SESSION['level'] == "") {
		header("location:index.php?pesan=gagal");
	}

	?>
	<nav class="navbar navbar-light bg-light">
		<div class="container-fluid">
			<span class="navbar-brand mb-0 h1">Halaman Siswa</span>
		</div>
	</nav>
	<center>
		<div class="">
			<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.
		</div>
		<div class="">
			<a href="logout.php">LOGOUT</a>
		</div>
	</center>

	<div class="card" style="width: 18rem;">
		<div class="card-header">
			Data <?php echo $_SESSION['username']; ?>
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item">Nama : Triadi Kurniawan</li>
			<li class="list-group-item">TTL : Unaaha, 30 Juli 1998</li>
			<li class="list-group-item">Jurusan : IPA</li>
		</ul>
	</div>

	<br />
	<br />

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>