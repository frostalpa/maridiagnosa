<?php 
session_start();
ob_start();
include 'function.php';

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

$datapenyakit = query("SELECT * FROM tb_gejala");
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
                                        <h6 class="m-0 font-weight-bold text-primary">Data penyakit</h6>
                                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                        <ul>
                                            <li class="nav-item dropdown no-arrow d-sm-none">
                                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-search fa-fw"></i>
                                                </a>
                                                <!-- Dropdown - Messages -->
                                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                                    aria-labelledby="searchDropdown">
                                                    <form class="form-inline mr-auto w-100 navbar-search">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control bg-light border-0 small"
                                                                placeholder="Search for..." aria-label="Search"
                                                                aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-primary" type="button">
                                                                    <i class="fas fa-search fa-sm"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="container-fluid mx-auto row">
                                        <div class="d-flex justify-content-start mt-2 mb-2 col">
                                            <a class="btn btn-primary btn-xs" href="m-gejalaadd.php">Tambah Data</a>
                                        </div>
                                        <div class="d-flex justify-content-end mt-2 mb-2 col">
                                            <input type="text" name="cari" placeholder="cari gejala">
                                            <a class="btn btn-primary btn-xs ml-1" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                        </div>
                                        </ul>
                                        <!-- Card Body -->
                                        <table class="table table-striped table-bordered table-sm mt-2">
                                            <thead class="thead-dark">
                                                <tr>
                                                <th class="fs-6" scope="col">No</th>
                                                <th scope="col">Kode Gejala</th>
                                                <th scope="col">Nama Gejala</th>
                                                <th scope="col">Keterangan</th>
                                                <th scope="col" class="aksi">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1; ?>
                                                <?php foreach( $datapenyakit as $row ) : ?>
                                                <div class="d-flex align-items-center">
                                                    <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td class="fs-6"><?= $row["kode_gejala"]; ?></td>
                                                    <td class="fs-6" ><?= $row["nama_gejala"]; ?></td>
                                                    <td class="fs-6" ><?= $row["keterangan"]; ?></td>
                                                    <td>
                                                        <div class="row ">
                                                            <div class="col d-flex align-items-center">
                                                                <a class="btn btn-primary btn-sm" href="m-gejalaubah.php?id_g=<?= $row["kode_gejala"]; ?>"><i class="fa-solid fa-pen-to-square"></i></i></a> |
                                                                <a class="btn btn-primary btn-sm" href="m-gejalahapus.php?id_g=<?= $row["kode_gejala"]; ?>" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash"></i></a>
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
