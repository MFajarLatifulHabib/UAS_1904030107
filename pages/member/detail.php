<?php
require '../../config/functions.php';

//ambil id_member dari URL
$id_member = $_GET['id_member'];

//query member berdasarkan ID Member
$m = tampil("SELECT * FROM member WHERE id_member='$id_member'");
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
    <a class="navbar-brand" href="#"> <b>PERPUSTAKAAN</b></a>

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
      <h3><i class="fas fa-user mr-2"></i></i>Detail Member</h3>
      <hr>
      <div class="col-md-8">
        <form>
          <div class="form-group row">
            <label for="id_member" class="col-md-3 col-form-label">ID Member</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="id_member" value="<?= $m['id_member']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-md-3 col-form-label">Nama</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="nama" value="<?= $m['nama']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-md-3 col-form-label">Alamat</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="alamat" value="<?= $m['alamat']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="no_telp" class="col-md-3 col-form-label">No Telepon</label>
            <div class="col-md-9">
              <input type="text" class="form-control" id="no_telp" value="<?= $m['no_telp']; ?>" readonly>
            </div>
          </div>
          <div class="form-group row pt-3" style="float: right;">
            <hr>
            <a href="member.php" class="btn btn-success mb-3 mr-3">Kembali</a>
            <a href="ubah.php?id_member=<?= $m['id_member']; ?>" class="btn btn-warning mb-3 mr-3" onclick="return confirm('Apakah anda yakin ingin mengubah data?');">Ubah</a>
            <a href="hapus.php?id_member=<?= $m['id_member']; ?>" class="btn btn-danger mb-3 mr-3" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
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