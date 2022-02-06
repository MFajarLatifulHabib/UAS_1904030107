<?php
require 'config/functions.php';
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="style/admin.css">

  <title>Dashboard  Perpustakaan</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
    <a class="navbar-brand" href="#"> <b>Perpustakaan</b></a>
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

    <div class="icon ml-4">
      <h5>
        <i class="fas fa-envelope mr-3"></i>
        <i class="fas fa-bell mr-3"></i>
      </h5>
    </div>

    </div>
  </nav>

  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4" style="height: 569px;">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link active text-white" href="dashboard.php?halaman=1"><i class="fas fa-home mr-2"></i>Dashboard
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pages/member/member.php"><i class="fas fa-users mr-2"></i>Daftar Member
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="pages/buku/buku.php"><i class="fas fa-book mr-2"></i>Daftar Buku
          </a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <!--pembuka col-md-10-->
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-home mr-2"></i>DASHBOARD</h3>
      <hr>
      <!--pembuka class row-->
      <div class="row text-white mt-4">
        <!--pembuka class card-->
        <div class="card bg-info ml-5 text-white" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-users mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Member</h5>
            <div class="display-4">
              <?php
              $conn = koneksi();
              $a = mysqli_query($conn, "SELECT COUNT(*) AS total FROM member");
              $data = mysqli_fetch_assoc($a);
              echo $data['total'];
              ?>
            </div>
            <a href="pages/member/member.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
        <!--pembuka class card-->
        <div class="card bg-success ml-5 text-white" style="width: 18rem;">
          <div class="card-body">
            <div class="card-body-icon">
              <i class="fas fa-book mr-2"></i>
            </div>
            <h5 class="card-title">Jumlah Buku</h5>
            <div class="display-4">
              <?php
              $conn = koneksi();
              $a = mysqli_query($conn, "SELECT COUNT(*) AS total FROM buku");
              $data = mysqli_fetch_assoc($a);
              echo $data['total'];
              ?>
            </div>
            <a href="pages/buku/buku.php">
              <p class="card-text text-white">Lihat Detail<i class="fas fa-angle-double-right ml-2"></i></p>
            </a>
          </div>
        </div>
      <!-- pembuka class row-->
      <div class="row mt-4">
    </div>
    <!--penutup col-md-10-->
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="style/admin.js"></script>
</body>

</html>