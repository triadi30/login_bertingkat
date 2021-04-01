<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "Kepala_cabang") {

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Kepala_cabang";
		// alihkan ke halaman dashboard Kepala Cabang
		header("location:halaman_KepalaCabang.php");

		// cek jika user login sebagai Panitia PPDB
	} else if ($data['level'] == "Panitia_PPDB") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Panitia_PPDB";
		// alihkan ke halaman dashboard Panitia PPDB
		header("location:halaman_PanitiaPPDB.php");

		// cek jika user login sebagai Siswa
	} else if ($data['level'] == "Siswa") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Siswa";
		// alihkan ke halaman dashboard Siswa
		header("location:halaman_Siswa.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
} else {
	header("location:index.php?pesan=gagal");
}
