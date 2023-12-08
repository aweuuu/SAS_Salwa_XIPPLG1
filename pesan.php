<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link>
    <title>Bandung Lautan Api</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Salwa nesa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="sejarah.php">Sejarah</a>
       </li>
        <li class="nav-item">
          <a class="nav-link active" href="tokoh.php">tokoh</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Pesan.php">Pesan</a>
        </li>
      </ul>
</nav>
<br>
<h1><center><strong>SEBUAH PESAN PADA BANDUNG</strong></center></h1>
<br>
<div class="container">
  <form method="POST">
  <div class="form-group">
    <label for="input" class="form-label">Kepada</label>
    <input type="text" class="form-control" id="Kepada" name="kpd">
  </div>
  <div class="form-group">
    <label for="input">Pesan</label>
    <input type="text" class="form-control" id="Pesan" name="psn">
  </div>
  <br>
  <button type="reset" class="btn btn-primary" name="Batal">Batal</button>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

<?php
    if(isset($_POST['submit'])){
      $kepada =$_POST['kpd'];
      $pesan =$_POST['psn'];
    ?>
     <div class="container">

            <table class='table table-bordered'>
                <thead>
                    <tr>
                      <th scope='col'>no</th>
                        <th scope='col'>kepada</th>
                        <th scope='col'>pesan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td><?php echo $kepada ?></td>
                        <td><?php echo $pesan ?></td>
                        
                    </tr>
                </tbody>
            </table>

    </div>
    <?php } ?>

    </body>