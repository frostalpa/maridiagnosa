<?php 
session_start();
ob_start();
include 'function.php';

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

if( isset($_POST["cari"]) ) {
	$cari = cari($_POST["keyword"]);
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
                <!-- Begin Page Content -->
                <div class="row">
                <!-- Area Chart -->
                            <div class="col-xl-12 col-lg-12">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Data Pengetahuan</h6>
                                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                    </div>

                                    <div class="container-fluid mx-auto row">
                                       
                                        <?php  
                                            $datarelasi = get_results("SELECT tbl_relasi.id_relasi, tbl_relasi.id_penyakit, tbl_relasi.kode_gejala,  tb_gejala.nama_gejala, tbl_penyakit.nama_penyakit 
                                            FROM tbl_relasi 
                                            INNER JOIN tbl_penyakit ON tbl_relasi.id_penyakit=tbl_penyakit.id_penyakit
                                            INNER JOIN tb_gejala  ON tbl_relasi.kode_gejala=tb_gejala.kode_gejala 
                                            ORDER BY tbl_relasi.id_penyakit, tbl_relasi.kode_gejala");
                                            // $rows = get_results("SELECT r.id_relasi, r.kode_gejala, d.id_penyakit, g.nama_gejala, d.nama_penyakit 
                                            // FROM tbl_relasi r INNER JOIN tbl_penyakit d ON d.`id_penyakit`=r.`id_penyakit` INNER JOIN tb_gejala g ON g.`kode_gejala`=r.`kode_gejala`
                                            // ORDER BY r.id_penyakit, r.kode_gejala");
                                        ?>
                                        <div class="d-flex justify-content-start mt-2 mb-2 col">
                                            <a class="btn btn-primary btn-xs" href="m-relasiadd.php">Tambah Data</a>
                                        </div>
                                        <div class="d-flex justify-content-end mt-2 col">
                                            <form action="" method="post" class="form-cari">
                                                <input type="text" name="keyword" placeholder="cari data" id="keyword">
                                                <button type="submit" name="cari" class="btn btn-primary btn-xs ml-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                                            </form>
                                        </div>
                                        
                                        <!-- Card Body -->
                                        <table class="table table-striped table-responsive table-bordered table-sm mx-auto">
                                            <thead class="thead-dark">
                                                <tr>
                                                <th class="fs-6" scope="col">No</th>
                                                <th scope="col">Penyakit</th>
                                                <th scope="col">Gejala</th>
                                                <th scope="col" class="aksi">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1; ?>
                                                <?php foreach( $datarelasi as $row ) : ?>
                                                    
                                                <div class="d-flex align-items-center">
                                                    <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td class="fs-6">[<?= $row["id_penyakit"].']'.$row["nama_penyakit"];?></td>
                                                    <td class="fs-6" >[<?= $row["kode_gejala"].']'.$row["nama_gejala"]; ?></td>
                                                    <td>
                                                        <div class="row ">
                                                            <div class="col d-flex align-items-center">
                                                                <a class="btn btn-primary btn-sm" href="m-relasiubah.php?id_r=<?= $row["id_relasi"]; ?>">
                                                                <i class="fa-solid fa-pen-to-square"></i></i></a> |
                                                                <a class="btn btn-primary btn-sm" href="m-relasihapus.php?id_r=<?= $row["id_relasi"]; ?>" 
                                                                onclick="return confirm('yakin?');"><i class="fa-solid fa-trash"></i></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                </div>    
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                </div>
            </div>    
        </div> 
        <!-- End of Main Content -->
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
