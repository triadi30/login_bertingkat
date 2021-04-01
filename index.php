<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<?php
		if (isset($_GET['pesan'])) {
			if ($_GET['pesan'] == "gagal") {
				echo "<div class='alert alert-danger alert-dismissible fade show text-center' role='alert'>
  					<strong>Maaf!</strong> Username dan Password tidak sesuai !
					</div>";
			}
		}
		?>
		<div class="row justify-content-md-center mt-12">
			<div class="col-sm-8">
				<div class="row border-box">
					<div class="col-sm-6 p-0">
						<img src="img/tri.png" class="img-fluid">
					</div>
					<div class="col-sm-6 p-0">
						<div class="card">
							<div class="card-header">
								<img src="img/bp.png">
								<div class="sub-title">
									Masuk panel administrator
								</div>
							</div>
							<div class="icon-user">
								<h4 class="ti-user"></h4>
							</div>
							<div class="card-body">
								<form action="cek_login.php" method="post">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-email"></i></span>
										</div>
										<input name="username" type="text" class="form-control input-login" placeholder="Alamat email">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ti-lock"></i></span>
										</div>
										<input name="password" type="password" class="form-control input-login" placeholder="Kata sandi">
									</div>
									<button type="submit" class="btn btn-primary float-right">Masuk <i class="ti-angle-double-right" style="font-size: 12px"></i></button>
								</form>
							</div>

						</div>
					</div>
				</div>
				<div class="mt-4 text-center">
					<small>2021 &copy; Copyright - Triadi Kurniawan</small>
				</div>
			</div>

		</div>
	</div>
</body>

</html>