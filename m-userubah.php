<?php 
session_start();
ob_start();
include 'function.php';

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
// ambil data di URL
$idg = $_GET["id_u"];

// query data mahasiswa berdasarkan id
$user = query("SELECT * FROM akun WHERE id = $idg")[0];
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["ubahuser"]) ) {
	if( ubahlvl($_POST) > 0 ) {
		echo 
            "<script>
				alert('Data berhasil diubah!');
			</script>";
			
	} else {
		echo mysqli_error($conn);
			"<script>
				alert('Gagal mengubah akun');
			</script>";
	}
}
?>
<?php include 'm-head.php';?>
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
                                    <h6 class="m-0 font-weight-bold text-primary">Ubah Data </h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body ">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" readonly="readonly" class="form-control" name="id_user" value="<?= $user['id'] ?>" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-nama">Nama</label>
                                            <input type="text" class="form-control" id="input-nama" name="nama" value="<?= $user['nama'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-email">email</label>
                                            <input type="text" class="form-control" id="input-email" name="email" value="<?= $user['email'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-username">username</label>
                                            <input type="text" class="form-control" id="input-username" name="username" value="<?= $user['username'] ?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Level User</label>
                                            <select class="form-control" name="level" id="exampleFormControlSelect1">
                                            <?php 
                                                $jpenyakit = mysqli_query($conn,"SELECT * FROM tbl_levelu");
                                                while ($row=mysqli_fetch_assoc($jpenyakit)) {
                                            ?>
                                                <option value="<?=$row['level']?>">
                                                    <?=$row['level']?>
                                                </option>
                                            <?php }?>    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="txt_alamat">Alamat</label>
                                            <textarea class="form-control" name="alamat" id="txt_alamat"><?= $user['alamat'] ?></textarea>
                                        </div>
                                        <button type="submit" name="ubahuser"  class="btn btn-primary btn-sm">ubah data</button>
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
