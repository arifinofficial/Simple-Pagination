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
      <h1 class="txt-center">UPDATE DATA MAHASISWA</h1>
    </div>

    <section class="insert-update">

    <?php
      $id = $_GET['id'];

      $query = mysqli_query($host, "select * from web_framework where id = '$id'");
      $data = mysqli_fetch_array($query);
    echo "
    <form class='' action='update.php' method='POST'>
      <div class='form-group row'>
        <label class='col-sm-2 col-form-label text-right'></label>
        <div class='col-sm-4 col-offset-6'>
          <input class='form-control' type='hidden' name='id' value='$data[id]'>
        </div>
      </div>
      <div class='form-group row'>
        <label class='col-sm-2 col-form-label text-right'>Releases</label>
        <div class='col-sm-4 col-offset-6'>
          <input class='form-control' type='text' name='releases' value='$data[releases]' required>
        </div>
      </div>
      <div class='form-group row'>
        <label class='col-sm-2 col-form-label text-right'>Name</label>
        <div class='col-sm-10'>
          <input class='form-control' type='text' name='name' value='$data[name]' required>
        </div>
      </div>
      <div class='form-group row'>
        <label class='col-sm-2 col-form-label text-right'>Developer</label>
        <div class='col-sm-10'>
          <input class='form-control' type='text' name='developer' value='$data[developer]' required>
        </div>
      </div>
      <div class='form-group row'>
        <label class='col-sm-2 col-form-label text-right'>License</label>
        <div class='col-sm-10'>
          <input class='form-control' type='text' name='license' value='$data[license]' required>
        </div>
      </div>
      <div class='text-right'>
        <input class='btn btn-outline-danger' type='reset' name='button' value='Reset'>
        <input class='btn btn-outline-primary' type='submit' name='' value='Update'>
      </div>
    </form> ";
    ?>

    </section>
    </div>
    <footer>
      <p>UTS PEMROGRAMAN WEB</p>
    </footer>

    </body>


    </div>
    </html>
