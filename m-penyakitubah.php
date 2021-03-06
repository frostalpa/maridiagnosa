<?php 
session_start();
ob_start();
include 'function.php';

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
// ambil data di URL
$idp = $_GET["id_p"];

// query data mahasiswa berdasarkan id
$penyakit = query("SELECT * FROM tbl_penyakit WHERE id_penyakit = '$_GET[id_p]'")[0];
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["simpan"]) ) {
	// cek apakah data berhasil diubah atau tidak
	if( ubahpenyakit($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'm-penyakit.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah! coba lagi');
				
			</script>
		".mysqli_error($conn);;
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
                                            <input type="hidden" readonly="readonly" class="form-control"name="idpenyakit" value="<?= $penyakit["id_penyakit"];?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-nama">Nama Penyakit</label>
                                            <input type="text" class="form-control" id="input-nama" name="namapenyakit" value="<?= $penyakit["nama_penyakit"]; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Jenis Penyakit</label>
                                            <select class="form-control" name="jenispenyakit" id="exampleFormControlSelect1">
                                            <?php 
                                                $jpenyakit = mysqli_query($conn,"SELECT * FROM tbl_jenispenyakit");
                                                while ($row=mysqli_fetch_assoc($jpenyakit)) {
                                            ?>
                                                <option value="<?=$row['jenis_penyakit']?>">
                                                    <?=$row['jenis_penyakit']?>
                                                </option>
                                            <?php }?>    
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="txt_deskripsi">Masukan Data Deskripsi Penyakit</label>
                                            <textarea class="form-control" name="deskripsi" id="txt_deskripsi" rows="3"><?= $penyakit["deskripsi"];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="txt_deskripsi">Masukan Data Cara Penanganan Penyakit</label>
                                            <textarea class="form-control" id="txt_deskripsi" name="solusi" rows="3"><?= $penyakit["solusi"]; ?></textarea>
                                        </div>
                                        <button type="submit" name="simpan"  class="btn btn-primary btn-sm">Simpan Data</button>
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
