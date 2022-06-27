<?php 
session_start();
ob_start();
include 'function.php';

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
$dUser="user";
?>
<?php include 'm-head.php';?>


<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- sidebar-->

    <?php if($_SESSION["level"] == "admin"){
        include 'm-sidebar.php';
    }else{
        include 'u-sidebar.php';
    }
    ?>

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
                                        <h6 class="m-0 font-weight-bold text-primary">Data Diri</h6>
                                        <div class="dropdown no-arrow">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                            </a>
                                            <?php include 'DDmenu.php'; ?>
                                        </div>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body ">
                                        <h5>Nama</h5>
                                        <p><?= $_SESSION["nama"]; ?></p>   
                                        <h5>username</h5>
                                        <p><?= $_SESSION["username"]; ?></p> 
                                        <h5>email</h5>
                                        <p><?= $_SESSION["email"]; ?></p> 
                                        <h5>alamat</h5>
                                        <p><?= $_SESSION["alamat"]; ?></p> 
                                        <h5>riwayat</h5>
                                        <p>Terdiagnosa : <?= $_SESSION["riwayat"]; ?></p>                                     
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
