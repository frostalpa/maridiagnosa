<?php 
require 'function.php';
if( isset($_POST["daftar"]) ) {
	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
			
	} else {
		echo mysqli_error($conn);
			"<script>
				alert('Gagal Menambahkan data');
			  </script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Halaman Daftar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
	<div class="container">
    	<?php include 'header.php';?>
    </div>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper mt-5">
					<!-- <div class="brand ">
						<img src="img/logo.jpg" alt="bootstrap 4 login page">
					</div> -->
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Daftar</h4>
							<form method="POST" action="" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="nama">nama</label>
									<input id="nama" type="text" class="form-control" name="nama" required>
									<div class="invalid-feedback">
										Masukan nama jangan lupa ya
									</div>
								</div>	

								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" required autofocus>
									<div class="invalid-feedback">
										Username punya mu sepertinya sudah ada didatabase deh
									</div>
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input id="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										Email mu sepertinya tidak benar tuh
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Passwordny perlu diisi ya
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary-custom btn-block" name="daftar">
										Mendaftar
									</button>
								</div>
								<div class="mt-4 text-center">
									Kamu sudah punya akun ? <a href="login.php">yuk Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>
</html>