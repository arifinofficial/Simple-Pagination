<?php
  $host = mysqli_connect("localhost", "root", "root", "db_UTS_160030370");

  if (!$host) {
    die("Koneksi Gagal! ".mysqli_connect_error());
  }
?>
