<?php 
session_start();
ob_start()
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" href="images/seedling-solid.svg" type="image/icon type">
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!--Css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css"/>

    <!-- FOnts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> -->

    <title>Maridiagnosa</title>
</head>
<body>
    <div id="app">
    <?php include 'header.php';?>
      <main>
          <!-- About / apa itu pedulilindungi -->
            <section class="about blue" id="about">
                <div class="container">
                    <div class="row d-flex justify-content-center mx-5 ">
                        <div class="col-lg-12 order-lg-12 about-paragraf">
                            <h1 class="title green">Apa itu MariDiagnosa?</h1>
                            <p class="txt1">MariDiagnosa merupakan aplikasi yang mendiagnosa penyakit tanaman janda bolong (Monstera Adansonii).</p>
                            <p class="txt1">Aplikasi ini akan mendiagnosa penyakit tanaman dengan hasil jawaban user yang dimasukan kemudian akan dilakukan proses perhitungan. Pengguna dapat mengetahui jenis penyakit yang menyerang tanaman serta cara penanganan dari penyakit tersebut.</p>
                        </div>
                        <!-- <div class="col-lg-5 order-lg-1 pe-lg-5 align-self-end">
                            <img src="images/apa-itu-pedulilindungi.png" class="w-100 phone-mockup" alt="">
                        </div> -->
                    </div>
                </div>
            </section>
          <!-- end About -->

          <!-- feature -->
          <section class="feature overlay" id="feature">
              <div class="container">
                <h1 class="title mb-5 text-center">Fitur MariDiagnosa</h1>
                <div class="row mx-5">
                    <div class="col my-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/pexels-cottonbro-4065876.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <div>
                                    <h3>Diagnosa Penyakit</h3>
                                    <p>User dapat mendiagnosa penyakit berdasarkan gejala yang terdapat pada tanaman.</p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col my-5">
                        <div class="card" style="width: 18rem;">
                            <img src="img/pexels-anete-lusina-4792285.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <div>
                                    <h3>Riwayat Diagnosa</h3>
                                    <p>User dapat melihat diagnosa apa saja yang telah didiagnosa sebelumnya sehingga mengetahui jenis penyakit yang menyerang pada tanaman ini.</p>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col my-5">
                        <div class="card">
                            <img src="img/pexels-cottonbro-4065876.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                                <div>
                                    <h3>Informasi Penyakit</h3>
                                    <p>Fitur ini memberi informasi kepada user jenis penyakit, cara penanganan penyakit yang kemungkinan menyerang pada tanaman.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
          </section>
          <!-- end feature -->

          <!-- works / cara kerja -->
          <section class="works" id="works">
              <div class="container">
                  <div class="row mx-5">
                    <div class="col-lg-12">
                        <h1 class="title">Cara Kerja MariDiagnosa?</h1>
                        <!-- <img src="images/pedulilindungi-bekerja-mirror.png" class="w-100 d-lg-none my-5" alt=""> -->
                        <p>Pada saat Anda mengunduh PeduliLindungi, sistem akan meminta persetujuan Anda untuk mengaktifkan data lokasi. Dengan kondisi lokasi aktif, maka secara berkala aplikasi akan melakukan identifikasi lokasi Anda serta memberikan informasi terkait keramaian dan zonasi penyebaran COVID-19.</p>
                        <p>Hasil tracing ini akan memudahkan pemerintah untuk mengidentifikasi siapa saja yang perlu mendapat penanganan lebih lanjut agar penghentian penyebaran COVID-19 dapat dilakukan. Sehingga, semakin banyak partisipasi masyarakat yang menggunakan aplikasi ini, akan semakin membantu pemerintah dalam melakukan tracing dan tracking.</p>
                        <p>PeduliLindungi sangat memperhatikan kerahasiaan pribadi Anda. Data Anda disimpan aman dalam format terenkripsi dan tidak akan dibagikan kepada orang lain. Data Anda hanya akan diakses bila Anda dalam risiko tertular COVID-19 dan perlu segera dihubungi oleh petugas kesehatan.</p>
                    </div>

                    <!-- <div class="col-lg-5 mx-auto">
                        <img src="images/pedulilindungi-bekerja.png" class="w-100 d-none d-lg-block" alt="">
                    </div> -->

                  </div>
              </div>
          </section>
          <!-- end works / cara kerja -->

          <!-- FAQ -->
          <section class="faq overlay " id="faq">
              <div class="container">
                  <div class="row justify-content-center">
                    <div class="text-center">
                        <h1 class="title mb-0">FAQ</h1>
                        <p class="text-secondary">( Pertanyaan yang sering ditanyakan )</p>
                    </div>

                    <div class="col-lg-10">
                        <div class="accordion" id="accordionExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                                        <span>Apa itu <strong>PeduliLindungi?</strong></span>
                                        <div class="collapse-btn">
                                            <div id="vertical-line"></div>
                                            <div id="horizontal-line"></div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Aplikasi <strong>PeduliLindungi</strong> adalah aplikasi digunakan oleh Pemerintah Republik Indonesia untuk kepentingan pelacakan dan penghentian penyebaran Coronavirus Disease (COVID-19) di wilayah RI dengan mengandalkan partisipasi masyarakat untuk saling membagikan data lokasinya saat berpindah dari satu tempat ke tempat lainnya.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Bagaimana cara membuat akun <strong>PeduliLindungi?</strong></span>
                                    <div class="collapse-btn">
                                        <div id="vertical-line"></div>
                                        <div id="horizontal-line"></div>
                                    </div>
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <ul>
                                        <li>Download aplikasi PeduliLindungi atau langsung mengunjungi website <a href="#">pedulilindungi.id</a></li>
                                        <li>Klik menu di bagian kanan atas</li>
                                        <li>Pilih menu Login/Register</li>
                                        <li>Pada bagian bawah klik ‘daftar’</li>
                                        <li>Anda bisa memilih dua opsi pendaftaran:  menggunakan e-mail atau menggunakan nomor telepon Anda</li>
                                        <li>Untuk mendaftar melalui e-mail, isikan nama lengkap sesuai dengan kartu identitas, beserta e-mail di kolom yang tersedia</li>
                                        <li>Pastikan alamat e-mail yang dipakai adalah alamat yang aktif dan bisa dibuka</li>
                                        <li>Jika mendaftar dengan nomor telepon, lakukan langkah yang sama seperti mendaftar dengan e-mail</li>
                                        <li>Usahakan nomor telepon yang dipakai adalah nomor yang aktif dan bisa menerima SMS</li>
                                        <li>ika data-data telah diisi, centang kolom persetujuan “Syarat dan Penggunaan Kebijakan Privasi”</li>
                                        <li>Klik tulisan ‘Daftar’</li>
                                        <li>Tunggu kode verifikasi melalui e-mail atau nomor telepon yang Anda daftarkan</li>
                                        <li>Verifikasi akun Anda</li>
                                        <li>Akun Anda selesai dibuat</li>
                                    </ul>
                                  </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                  </div>
            </div>
          </section>
          <!-- End FAQ -->

          <!-- download -->
          <section class="download blue" id="download">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 download-text text-center text-lg-start">
                        <h1 class="title">Mari berpartisipasi <br> melindungi sesama. <br> Unduh PeduliLindungi sekarang!</h1>
                        <div class="mt-4 ">
                            <a href="" class="btn btn-primary-custom mx-5 mx-md-0 mb-3 mb-md-0 me-lg-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter;"><path d="m12.954 11.616 2.957-2.957L6.36 3.291c-.633-.342-1.226-.39-1.746-.016l8.34 8.341zm3.461 3.462 3.074-1.729c.6-.336.929-.812.929-1.34 0-.527-.329-1.004-.928-1.34l-2.783-1.563-3.133 3.132 2.841 2.84zM4.1 4.002c-.064.197-.1.417-.1.658v14.705c0 .381.084.709.236.97l8.097-8.098L4.1 4.002zm8.854 8.855L4.902 20.91c.154.059.32.09.495.09.312 0 .637-.092.968-.276l9.255-5.197-2.666-2.67z"></path></svg>
                                <span>Play Store</span>
                            </a>

                            <a href="" class="btn btn-primary-custom mx-5 mx-md-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: msFilter;"><path d="M19.665 16.811a10.316 10.316 0 0 1-1.021 1.837c-.537.767-.978 1.297-1.316 1.592-.525.482-1.089.73-1.692.744-.432 0-.954-.123-1.562-.373-.61-.249-1.17-.371-1.683-.371-.537 0-1.113.122-1.73.371-.616.25-1.114.381-1.495.393-.577.025-1.154-.229-1.729-.764-.367-.32-.826-.87-1.377-1.648-.59-.829-1.075-1.794-1.455-2.891-.407-1.187-.611-2.335-.611-3.447 0-1.273.275-2.372.826-3.292a4.857 4.857 0 0 1 1.73-1.751 4.65 4.65 0 0 1 2.34-.662c.46 0 1.063.142 1.81.422s1.227.422 1.436.422c.158 0 .689-.167 1.593-.498.853-.307 1.573-.434 2.163-.384 1.6.129 2.801.759 3.6 1.895-1.43.867-2.137 2.08-2.123 3.637.012 1.213.453 2.222 1.317 3.023a4.33 4.33 0 0 0 1.315.863c-.106.307-.218.6-.336.882zM15.998 2.38c0 .95-.348 1.838-1.039 2.659-.836.976-1.846 1.541-2.941 1.452a2.955 2.955 0 0 1-.021-.36c0-.913.396-1.889 1.103-2.688.352-.404.8-.741 1.343-1.009.542-.264 1.054-.41 1.536-.435.013.128.019.255.019.381z"></path></svg>
                                <span>App Store</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex app-scroll">
                        <img class="img-scroll-1 d-none d-lg-block" src="images/download-left.png" alt="">
                        <img class="img-scroll-2 d-none d-lg-block" src="images/download-right.png" alt="">
                        <img class="img-scroll-hr d-lg-none" src="images/download-scroll-horizontal.png" alt="">
                    </div>

                </div>
            </div>
          </section>
          <!-- end download -->
      </main>

      <?php include 'footer.php'?>
      </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="js/jquery.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
</body>
</html>