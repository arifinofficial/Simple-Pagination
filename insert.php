<?php
  require 'connection.php';

  $releases  = $_POST['releases'];
  $name = $_POST['name'];
  $developer = $_POST['developer'];
  $license = $_POST['license'];

  $query = mysqli_query($host, "insert into web_framework (releases, name, developer, license) value ('$releases', '$name', '$developer', '$license')");
  if ($query) {
    echo "<script>alert('Sukses!'); location.href='index.php'</script>";
  }else {
    echo "<script>alert('Gagal!'); location.href='index.php'</script>";
  }
?>
