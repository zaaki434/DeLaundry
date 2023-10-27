<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - The Laundry</title>

    <!-- favicon logo website -->
    <link rel="shortcut icon" href="asset/img/logo_laundry.ico" type="image/x-icon">

    <!-- link css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


	<style>
		/* Navbar */
.navbar {
  width: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 10;
}

	</style>
</head>

<body>



  <!-- Navbar -->
  <!-- Container wrapper -->
  <div class="container wy-text-center">
	  <div class="row">
		  <!-- Navbar brand -->
		  <nav class="navbar navbar-expand-sm navbar-light bg-light" style="margin-top: -70px; ">
    <a class="navbar-brand col-lg-4" href="">
      <img
	  class="text-center"
        src="<?= base_url()?>asset/img/logo_dealaundry(1).png"
        height="200px"
        alt="DeLaundry Logo"
        loading="lazy"
        style="margin-top: -5px;"
      />

    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Jemput Baju</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Customer Service</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center col-lg-3">
        
        <a type="button" class="btn btn-primary col-lg-6" href="login">
          Login
        </a>
        
      
</div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<br>
    <!-- ISI HALAMAN WEB -->
    <div class="container col-lg-8">
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" style="margin-top: 5px;">
      <img src="<?= base_url() ?>asset/img/gambar1.jpg" class="d-block w-100" alt="baju1" style="border-radius: 10px; ">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url() ?>asset/img/gambar2.jpeg" class="d-block w-50" width="100px" alt="baju2" style="border-radius: 10px;">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url() ?>asset/img/gambar3.jpeg" class="d-block w-100" alt="baju3" style="border-radius: 10px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>

  <!-- FOOTER -->


    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</body>

</html>