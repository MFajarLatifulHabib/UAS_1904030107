<?php
require '../../config/functions.php';

//mengambil id_member
$id_buku = $_GET['id_buku'];

if (hapusbuku($id_buku) > 0) {
  echo "<script>
          alert ('Data berhasil dihapus');
          document.location.href = 'buku.php';
        </script>";
} else {
  echo "<script>
          alert ('Data gagal dihapus');
        </script>";
}
