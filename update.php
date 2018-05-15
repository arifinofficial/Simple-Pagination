<?php
  require 'connection.php';

  $id = $_POST['id'];
  $releases = $_POST['releases'];
  $name = $_POST['name'];
  $developer = $_POST['developer'];
  $license = $_POST['license'];

$query = mysqli_query($host, "UPDATE web_framework SET releases = '$releases', name = '$name', developer = '$developer', license = '$license' where id = '$id'");

if ($query) {
  echo "<script>alert('Sukses!'); location.href='index.php'</script>";
}else {
  echo "<script>alert('Gagal!'); location.href='index.php'</script>";
}

?>
