<?php
session_start();
ob_start();
require 'function.php';

if( isset($_SESSION["login"]) ) {
	header("Location: m-dashboard.php");
	exit;
}

if( isset($_POST["login"]) ) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {
		// cek password
		$row = mysqli_fetch_assoc($result);
        $_SESSION['id']     = $row['id'];
	    	$_SESSION['nama']    = $row['nama'];
        $_SESSION['email']    = $row['email'];
        $_SESSION['alamat']    = $row['alamat'];
        $_SESSION['riwayat']    = $row['riwayat'];
    if( password_verify($password, $row["password"]) ) {
			//ambil data query
    
      // set session
      $_SESSION["username"] = $username;
			$_SESSION["login"] = true;
      
      header("Location: m-dashboard.php");
			exit;
		}else{
      echo "<script>
				alert('email atau password sepertinya salah, silahkan coba masukan kembali')
		      </script>";
    }
	}
	$error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/my-login.css" />
    
  </head>

  <body class="my-login-page">
  <?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username / password salah</p>
  <?php endif; ?>

    <div class="container">
    <?php include 'header.php';?>
    </div>
    <section class="h-100">
      <div class="container h-100">
        <div class="row justify-content-md-center h-100">
          <div class="card-wrapper">
            <div class="brand">
              <img src="img/logo.jpg" alt="logo" />
            </div>
            <div class="card fat">
              <div class="card-body">
                <h4 class="card-title">Login</h4>
                <form method="POST" action="" class="my-login-validation">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" value="" required autofocus />
                    <div class="invalid-feedback">Username anda salah</div>
                  </div>

                  <div class="form-group">
                    <label for="password">
                      Password
                      <!--<a href="reset.php" class="float-right"> Lupa Password? </a>-->
                    </label>
                    <input id="password" type="password" class="form-control" name="password" required data-eye />
                    <div class="invalid-feedback">Password diperlukan</div>
                  </div>

                  <div class="form-group m-0">
                    <button type="submit" class="btn btn-primary-custom btn-block" name="login">Login</button>
                  </div>
                  <div class="mt-4 text-center">Tidak Punya Akun? <a href="register.php">Buat Akun</a></div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/my-login.js"></script>
  </body>
</html>
