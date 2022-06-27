<?php 
session_start();
ob_start();
include 'function.php';

$terjawab = get_terjawab();
$relasi = get_relasi($terjawab);
$kode_gejala = get_next_gejala($relasi);



$success = @$_GET['success'];

$row = get_row("SELECT * FROM tb_gejala WHERE kode_gejala='$kode_gejala'");
$count = get_var("SELECT COUNT(*) FROM tbl_konsultasi");

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}
if(!$row){
    $success = true;        
} 

$mod = $_GET['data'];
$act = $_GET['act'];
if ($mod=='coba') {
    if($_POST['yes'])
        ambilsql("INSERT INTO tbl_konsultasi VALUES ('$_POST[kode_gejala]', 'Ya')");
    elseif($_POST['no'])
        ambilsql("INSERT INTO tbl_konsultasi VALUES ('$_POST[kode_gejala]', 'Tidak')");
    elseif($act=='new')
        ambilsql("TRUNCATE TABLE tbl_konsultasi");
        
    header("location:m-diagnosa.php");
}

?>
<?php include 'm-head.php';?>


<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- sidebar-->
    <?php if($_SESSION["level"] == "user"){
        include 'u-sidebar.php';
    }else{
        include 'm-sidebar.php';
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
                                <h3 class="m-0 font-weight-bold text-primary ">Silahkan isi jawaban dibawah ini [<?php echo $row["kode_gejala"]?>]</h3>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body  ">
                                <h3 align="center"><b>Apakah <?=strtolower($row["nama_gejala"])?>?</b></h3>
                                <form action="m-diagnosa.php?data=coba" method="post">
                                    <input type="hidden" name="kode_gejala" value="<?=$row["kode_gejala"]?>" />
                                    <p>&nbsp;</p>
                                    <p align="center">
                                        <button name="yes" type="submit" class="btn btn-primary" value="1"><i class="fa-solid fa-circle-check"></i> Ya</button>
                                        <button name="no" type="submit" class="btn btn-danger" value="1"><i class="fa-solid fa-circle-xmark"></i></span> Tidak</button> 
                                        
                                        <?php if($count):?>           
                                        <a class="btn edit" href="?m-diagnosa.php&success=1"><span class="glyphicon glyphicon-arrow-right"></span> Lihat Hasil</a>
                                        <a class="btn edit" href="m-diagnosa.php?act=new"><span class="glyphicon glyphicon-ban-circle"></span> Batal</a>
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
