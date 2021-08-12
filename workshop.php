<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <!-- bootsrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Css main-->
    <link rel="stylesheet" href="workshop.css" />
    <title>Workshop Gallery</title>
  </head>
  <body>
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
              <a class="nav-link text-dark" href="dosenukm.php#about">Tentang kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="dosenukm.php#projects">Aktivitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="dosenukm.php#kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Slide foto -->
    <div id="carouselExampleDark" class="carousel carousel-light slide align-items-center" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="img/activity/p.jpg" class="d-block w-100" alt="workshop 1" />
          <div class="carousel-caption d-none d-sm-block">
            <h5>Workshop Content Creator & Digital Marketing</h5>
            <p>bersama siswa SMK Negeri 1 Kebumen</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/activity/q.jpg" class="d-block w-100" alt="workshop 2" />
          <div class="carousel-caption d-none d-sm-block">
            <h5>Workshop Enterpreneur</h5>
            <p>bersama siswa SMK Negeri 2 Purworejo</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/activity/r.jpg" class="d-block w-100" alt="workshop 3" />
          <div class="carousel-caption d-none d-sm-block">
            <h5>Workshop Pengembangan Mindset</h5>
            <p>bersama Mahasiswa Univesitas Prasetiya Mulya</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Sebelumnya</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Lanjut</span>
      </button>
    </div>
    <!-- slide foto end -->

    <!-- Caption -->
    <div class="caption justify-content-center p-5">
    <h4>Workshop</h4>
    <p>Selama beberapa tahun terakhir sudah lebih dari ... kami mengadakan workshop bersama siswa, mahasiswa maupun guru berbagai kalangan. 
    <p>Menyampaikan materi-materi inovatif dan mengikuti perkembangan zaman, seperti Digital Marketing, Content Creator dan lain sebagainya. </p> 
    </p>

    </div>
    <!-- caption end -->

    <!-- footer -->
    <footer class="fixed-bottom text-dark text-center pt-2">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>
