<?php 
?> 
    <style>
      <?php include'css/bootstrap.min.css';?>
      <?php include'css/navbar.css'; ?>
    </style>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow bg-success">
      <div class="container-fluid ml-auto mr-auto">
        <a class="navbar-brand mx-5" href="index.php">
          <!-- <img src="images/nav-logo.png" alt="" /> -->
          <h5 class="ml-5">MariDiagnosa</h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
              <li class="nav-item">
                <a class="nav-link mx-2 " aria-current="page" href=<?= '"index.php"';?>>Beranda</a>          
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#about">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#feature">Fitur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="#works">Cara Kerja</a>
              </li>
              <li class="nav-item">
              <a class="nav-link mx-2" href="#faq">FAQ</a>
              </li>
            <!-- Nav Item - User Information -->
              <li class="nav-item dropdown arrow">
                <?php if( isset($_SESSION["login"]) ) {?>
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mx-2 d-none d-lg-inline text-capitalized"><?php 
                      if( isset($_SESSION["login"]) ) {
                          $login =  $_SESSION["username"];
                        }
                      echo $login
                      ?></span>
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                      aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="m-datadiri.php">
                          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Profile
                      </a>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Logout
                      </a>
                  </div>
                  <?php
                  }else{?>
                    <a class="nav-link mx-2 me-lg-5" href="login.php">Login</a>
                  <?php
                  }
                  ?>
              </li>
          </ul>
        </div>
      </div>
    </nav>
  <!-- End of Topbar -->
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
              <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="logout.php">Logout</a>
              </div>
          </div>
      </div>
  </div>
