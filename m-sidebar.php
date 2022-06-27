<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa-solid fa-seedling"></i>
        </div>
        <div class="sidebar-brand-text mt-3 mr-3 mb-3 ml-1">MariDiagnosa</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="m-dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data user
    </div>
    <li class="nav-item ">
        <a class="nav-link" href="m-datadiri.php">
        <i class="fa-solid fa-user"></i>
            <span>Data Diri</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Halaman Diagnosa
    </div>
    <li class="nav-item ">
        <a class="nav-link" href="m-diagnosa.php">
            <i class="fa-solid fa-file-medical"></i>
            <span>Diagnosa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Management
    </div>
    <li class="nav-item ">
        <a class="nav-link" href="m-user.php">
            <i class="fa-solid fa-users"></i>
            <span>User Setting</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <div class="sidebar-heading">
        Data tanaman
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item ">
        <a class="nav-link" href="m-penyakit.php">
        <i class="fa-solid fa-bars"></i>
            <span>Data Penyakit</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="m-gejala.php">
        <i class="fa-solid fa-bars"></i>
            <span>Data Gejala</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="m-relasi.php">
        <i class="fa-solid fa-bars"></i>
            <span>Data Relasi</span></a>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<?php 
if(!$_SESSION['login'] && in_array($mod, array()))
?>
<!-- End of Sidebar -->
<script src="https://kit.fontawesome.com/0141835e9d.js" crossorigin="anonymous"></script>