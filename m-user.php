<?php 
session_start();
ob_start();
include 'function.php';

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

$akun = query("SELECT * FROM akun");
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
                                    </div>

                                    <div class="container-fluid mx-auto row">
                                        <div class="d-flex justify-content-start mt-2 col">
                                            <a class="btn btn-primary btn-xs" href="m-gejalaadd.php">Tambah Data</a>
                                        </div>
                                        <div class="d-flex justify-content-end mt-2 col">
                                            <input type="text" name="cari" placeholder="cari gejala">
                                            <a class="btn btn-primary btn-xs ml-1" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                                        </div>
                                        </ul>
                                        <!-- Card Body -->
                                        <table class="table table-striped table-responsive table-bordered table-sm mt-2">
                                            <thead class="thead-dark">
                                                <tr>
                                                <th class="fs-6" scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Level</th>
                                                <th scope="col" class="aksi">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                            <?php $i = 1; ?>
                                                <?php foreach( $akun as $row ) : ?>
                                                <div class="d-flex  ">
                                                    <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td class="fs-6"><?= $row["nama"]; ?></td>
                                                    <td class="fs-6" ><?= $row["username"]; ?></td>
                                                    <td class="fs-6" ><?= $row["email"]; ?></td>
                                                    <td class="fs-6" ><?= $row["alamat"]; ?></td>
                                                    <td class="fs-6" ><?= $row["level"]; ?></td>
                                                    <td>
                                                        <div class="row ">
                                                            <div class="col d-flex align-items-center">
                                                                <a class="btn btn-primary btn-sm" href="m-userubah.php?id_u=<?= $row["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></i></a> |
                                                                <a class="btn btn-primary btn-sm" href="m-userhapus.php?id_u=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><i class="fa-solid fa-trash"></i></a>
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
