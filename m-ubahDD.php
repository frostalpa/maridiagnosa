<?php 
session_start();
ob_start();
include 'function.php';

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM akun WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["simpan"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data diri berhasl diubah!');
				document.location.href = 'm-dashboard.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah! coba lagi');
				
			</script>
		";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Dashboard</title>
    <style>
      <?php include 'css/navbar.css';?>
    </style>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
   
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- sidebar-->
    <?php include 'm-sidebar.php';?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <?php include 'm-topbar.php';?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Content Row Chart -->
                <div class="row">
                    
                        <div class="kartu col-xl-5 col-lg-6  ">
                            <div class="card shadow mb-4 ">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex justify-content-center flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data Diri</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body ">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <input type="hidden" name="id" value="<?= $mhs["id"];?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-nama">Nama</label>
                                            <input type="text" class="form-control" id="input-nama" name="nama" value="<?= $mhs["nama"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="D-username">username</label>
                                            <input type="text" id="disabledTextInput" class="form-control" name="username" readonly="readonly" required value="<?= $mhs["username"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" value="<?= $mhs["email"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="Alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mhs["alamat"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" name="level" value="<?= $mhs["level"];?>"/>
                                        </div>
                                        
                                        <button type="submit" name="simpan" class="btn btn-primary btn-sm">Simpan Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                </div>

        <!-- End of Main Content -->
        </div>
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

  </body>
</html>
