<?php
require '../../config/functions.php';

//cek apakah tombol sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambahmember($_POST) > 0) {
    echo "<script>
            alert ('Data berhasil ditambahkan');
            document.location.href = 'member.php';
          </script>";
  } else {
    echo "<script>
            alert ('Data gagal ditambahkan');
          </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="../../style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/fontawesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../../style/admin.css">

  <title>Daftar Member Perpustakaan</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
    <a class="navbar-brand" href="#"><b>PERPUSTAKAAN</b></a>

    <div class="icon my-2 my-lg-0 ml-auto">
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
          <a class="nav-link active text-white" href="../../dashboard.php?halaman=1"><i class="fas fa-home mr-2"></i>Dashboard
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="member.php"><i class="fas fa-users mr-2"></i>Daftar Member
          </a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../buku/buku.php"><i class="fas fa-book mr-2"></i>Daftar Buku
          </a>
          <hr class="bg-secondary">
        </li>
      </ul>
    </div>

    <!--pembuka col-md-7-->
    <div class="col-md-10 p-5 pt-2">
      <h3><i class="fas fa-user mr-2"></i></i>Tambah Data Member</h3>
      <hr>
      <div class="col-md-8">
        <form action="" method="POST">
          <div class="form-group row">
            <label for="id_member" class="col-md-3 col-form-label">ID Member</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="id_member" autofocus required>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-md-3 col-form-label">Nama</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="nama" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="alamat" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="no_telp" class="col-md-3 col-form-label">No Telepon</label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="no_telp" required>
            </div>
          </div>
          <div class="form-group row pt-3" style="float: right;">
            <hr>
            <button type="submit" name="tambah" class="btn btn-primary mb-3 mr-3">Tambah</a>
          </div>
        </form>

      </div>
    </div>
    <!--penutup col-md-7-->
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="../../style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../style/admin.js"></script>
</body>

</html>