<?php
require 'connection.php';
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
    <div class="jumbotron">
      <h1 class="txt-center">INSERT DATA MAHASISWA</h1>
    </div>
    <section class="insert-update">
        <form class="formku" action="insert.php" method="post">

<div class="form-wrap">
  <div class="label">
    <label class="">Releases</label>
  </div>
  <input class="form-control" type="text" name="releases" value="" required>
</div>



<div class="form-wrap">
  <div class="label">
    <label class="col-sm-2 col-form-label text-right">Name</label>
  </div>

    <input class="form-control" type="text" name="name" value="" required>
</div>


<div class="form-wrap">
  <div class="label">
    <label class="">Developer</label>
  </div>

  <input class="form-control" type="text" name="developer" value="" required>
</div>
<div class="form-wrap">
  <div class="label">
      <label class="">License</label>
  </div>

  <input class="form-control" type="text" name="license" value="" required>
</div>



          <div style="text-align:left;">
            <input class="btn btn-outline-danger" type="reset" name="button" value="Reset">
            <input class="btn btn-outline-primary" type="submit" name="" value="Tambahkan">
          </div>
        </form>
    </section>
  </div>

  <footer>
    <p>UTS PEMROGRAMAN WEB</p>
  </footer>

  </body>


  </div>
  </html>
