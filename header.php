<?php 
?> 
    <style>
      <?php include'css/bootstrap.min.css';?>
      <?php include'css/navbar.css'; ?>
      
    </style>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand ms-5" href="index.php">
          <img src="images/nav-logo.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger-line"></div>
          <div class="hamburger-line"></div>
          <div class="hamburger-line"></div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto me-5">
            <a class="nav-link mx-2" aria-current="page" href=<?= '"index.php"';?>>Beranda</a>
            <a class="nav-link mx-2" href="#about">Tentang Kami</a>
            <a class="nav-link mx-2" href="#feature">Fitur</a>
            <a class="nav-link mx-2" href="#works">Cara Kerja</a>
            <a class="nav-link mx-2 me-lg-5" href="#faq">FAQ</a>
            <a class="btn btn-primary-a text-capitalized py-2 px-4" href="login.php"><?php 
            if( isset($_SESSION["login"]) ) {
              $login =  $_SESSION["username"];
            }
            else{
              $login = "login";
            }
            echo $login          
            ?></a>
          </div>
        </div>
      </div>
    </nav>
  <!-- end Navbar -->

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
