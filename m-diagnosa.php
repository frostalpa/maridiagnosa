<?php 
session_start();
ob_start();
include 'function.php';

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
$row = mysqli_query($conn, "SELECT * FROM tb_gejala WHERE kode_gejala = '$kode_gejala'");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>MariDiagnosa</title>
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
                <div class="d-flex justify-content-center mb-2">
                    <h1>Halaman Diagnosa</h1>
                </div>
                <div class="row d-flex justify-content-center">
                <!-- Area Chart -->
                            <div class="col-xl-10 col-lg-12">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex justify-content-center align-items-center ">
                                        <h3 class="m-0 font-weight-bold text-primary ">Silahkan isi jawaban dibawah ini [<?=$row->kode_gejala?>]</h3>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body  ">
                                        <h3 align="center"><b>Apakah <?=strtolower($row->nama_gejala)?>?</b></h3>
                                        <form action="aksi.php?m=konsultasi" method="post">
                                            <input type="hidden" name="kode_gejala" value="<?=$row->kode_gejala?>" />
                                            <p>&nbsp;</p>
                                            <p align="center">
                                                <button name="yes" class="btn tambah" value="1"><span class="glyphicon glyphicon-ok-sign"></span> Ya</button>
                                                <button name="no" class="btn tambah" value="1"><span class="glyphicon glyphicon-remove-sign"></span> Tidak</button> 
                                                
                                                <?php if($count):?>           
                                                <a class="btn edit" href="?m=konsultasi&success=1"><span class="glyphicon glyphicon-arrow-right"></span> Lihat Hasil</a>
                                                <a class="btn edit" href="aksi.php?m=konsultasi&act=new"><span class="glyphicon glyphicon-ban-circle"></span> Batal</a>
                                                <?php endif?>
                                            </p>
                                        </form>                      
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
