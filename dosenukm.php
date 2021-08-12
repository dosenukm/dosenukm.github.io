<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- bootsrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Aos link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Css -->
    <link rel="stylesheet" href="style.css" />

    <!-- preloader link -->
    <link rel="stylesheet" href="preloader/fakeLoader.css" />
  
    <title>Dosen UKM</title>
  </head>
  <body>

  <!-- loading -->
  <div class="fakeLoader"></div>
  <!-- end loading -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #ffffff">
      <div class="container">
        <a class="navbar-brand text-dark" href="landing page.php">DosenUKM</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active text-dark" aria-current="page" href="landing page.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#about">Tentang kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#projects">Aktivitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar end -->


    <!-- about -->
    <!-- <div class='post' data-aos='fade-right'> -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3 pt-4">
          <div class="col">
            <h2>Tentang kami</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Dosen UKM merupakan julukan aktivitas yang dinamai oleh M. Haris Maknun untuk kegiatan sehari-harinya. Yup, saya seorang Dosen sekaligus Asesor kompetensi, Pebisnis dan lain sebagainya.</p>
          </div>
          <div class="col-md-4">
            <p>Karir saya diawali menjadi seorang ... pada tahun..., dan kini sedang merintis perusahaan bernama <a href="hmproduction.org">HM Production<a> dan HM Academy sebagai tempat pelatihan Digital Marketing dan tempat praktik kerja lapangan(magang).</p>
          </div>
        </div>
    </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#D6F3FF"
          fill-opacity="1"
          d="M0,160L40,181.3C80,203,160,245,240,256C320,267,400,245,480,213.3C560,181,640,139,720,154.7C800,171,880,245,960,240C1040,235,1120,149,1200,133.3C1280,117,1360,171,1400,197.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir about -->

    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center fs-5 mb-4">
          <div class="col">
            <h2>Aktivitas</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/activity/q2.jpg" class="card-img-top" alt="Trainer" />
              <div class="card-body">
                <h5 class="card-title">Workshop</h5>
                <a href="workshop.php" class="btn btn-success">Lihat</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/activity/e.jpg" class="card-img-top" alt="Trainer" />
              <div class="card-body">
                <h5 class="card-title">HM Academy</h5>
                <a href="hmadm.html" class="btn btn-success">Lihat</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/activity/aj2.jpg" class="card-img-top" alt="Trainer" />
              <div class="card-body">
                <h5 class="card-title">Sosial</h5>
                <a href="#" class="btn btn-success">Lihat</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/activity/w2.jpg" class="card-img-top" alt="Trainer" />
              <div class="card-body">
                <h5 class="card-title">Dosen</h5>
                <a href="dosen.html" class="btn btn-success">Lihat</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,288L26.7,250.7C53.3,213,107,139,160,106.7C213.3,75,267,85,320,106.7C373.3,128,427,160,480,165.3C533.3,171,587,149,640,128C693.3,107,747,85,800,106.7C853.3,128,907,192,960,192C1013.3,192,1067,128,1120,122.7C1173.3,117,1227,171,1280,186.7C1333.3,203,1387,181,1413,170.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir projects -->


    <!-- Alert message start -->
      <?php echo $alert;?>
      <!-- <button type="button" class="btn-close" aria-label="Close"></button> -->
      <!-- alert end -->


    <!-- kontak -->
    <section id="kontak">
      <div class="container">
        <div class="row text-center mb-4 pb-4">
          <div class="col">
            <h2>Kontak</h2>
          </div>
        </div>
        <div class="row justify-content-center pb-5">
          <div class="col-md-6">
            <form class="contact" action="" method="post">
              <div class="mb-3">
                <label for="Nama" class="form-label">Nama Lengkap</label>
                <input type="nama" name="name" class="form-control" id="name" aria-describedby="name" placeholder="ketik nama anda" required/>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="masukkan email anda" required/>
                </div>
                <div class="mb-3">
                  <label for="pesan" class="form-label">Pesan</label>
                  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ketik pesan..." required></textarea>
                </div>
              <button type="submit" name="send" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir kontak -->

    <!-- footer -->
    <footer class="text-dark text-center pt-2">
      <div class="social fs-5 pb-2 m-auto">
        <a href="http://www.linkedin.com/dosenukm"><i class="bi bi-linkedin text-dark"></i></a>
        <a href="https://www.facebook.com/dosenukm"><i class="bi bi-facebook text-dark"></i></a>
        <a href="https://instagram.com/dosenukm/"><i class="bi bi-instagram text-dark"></i></a>
        <a href="https://twitter.com/DosenUkm"><i class="bi bi-twitter text-dark"></i></a>
        <a href="https://vt.tiktok.com/ZGJAbdYHx/"><i class="fab fa-tiktok text-dark"></i></a>
      </div>
      <p class="justify-content-center">&copy 2021 Created By <a href="https://www.instagram.com/dosenukm/" class="text-secondary">Dosen UKM</a></p>
    </footer>
    <!-- akhir footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

<!-- preloader js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="preloader/fakeLoader.js"></script>

    <script>
          $(document).ready(function () {
            $.fakeLoader({
              timeToHide: 1200,
              bgColor: '  hsl(198, 100%, 85%)',
              spinner: 'spinner7',
            });
          });
    </script>
  </body>
</html>
