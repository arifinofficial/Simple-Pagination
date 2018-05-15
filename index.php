<?php
require 'connection.php';
require 'class/pagination.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="assets/style.css">
    <title>DATA MAHASISWA</title>
  </head>
  <body>
<div class="wrap">
<div class="container">
  <h1 class="txt-center">DATA MAHASISWA</h1>



<section>
    <div class="">
        <a class="blue" href="insert-mahasiswa.php"><i class=""></i> Tambah Data</a>
    </div>
    <div class="">
      <form class="" action="index.php" method="GET">
        <select class="" name="limit">
          <optgroup label="Per page">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
          </optgroup>
        </select>
        <input class="" type="submit" name="" value="Go">
      </form>
    </div>


    <table class="center">
      <thead class="">
        <tr>
          <th>No</th>
          <th>Release</th>
          <th>Name</th>
          <th>Developer</th>
          <th>License</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody class="">
          <?php
            $p        = new Paging;
            $batas = isset($_GET['limit']) ? $_GET['limit'] : 10;
            $posisi   = $p->cariPosisi($batas);
            $query    = mysqli_query($host, "SELECT * FROM web_framework ORDER BY id DESC LIMIT $posisi,$batas");
            $no       = $posisi;
            while ($data = mysqli_fetch_array($query)) {
              $no++;
              echo "
              <tr>
                <td>$no</td>
                <td>$data[releases]</td>
                <td>$data[name]</td>
                <td>$data[developer]</td>
                <td>$data[license]</td>
                <td><a href=\"view_update.php?id=$data[id]\">update</a> | <a href='delete.php?id=$data[id]' onclick=\"javascript: return confirm('Apakah anda yakin menghapus data ini?')\" >hapus</a></td>
              </tr>";
            };
          ?>
      </tbody>
    </table>

    <?php
      $query2       = mysqli_query($host, "SELECT * FROM web_framework");
      $jmldata      = mysqli_num_rows($query2);

      $jmlhalaman   = $p->jumlahHalaman($jmldata, $batas);

      $linkHalaman  = $p->navHalaman($_GET['halaman'], $jmlhalaman);
      echo "<div class='center'>$linkHalaman</div>" ;
    ?>

  </section>
</div>
<footer>
  <p>UTS PEMROGRAMAN WEB</p>
</footer>

</body>


</div>
</html>
