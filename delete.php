<?php
  include 'connection.php';

  $id = $_GET['id'];

  $query = mysqli_query($host, "delete from web_framework where id = '$id'");
  if ($query) {
    echo "<script>alert('Data sukses di hapus'); location.href='index.php'</script>";
  }else {
    echo "<script>alert('Data GAGAL di hapus'); location.href='index.php'</script>";
  }
?>
