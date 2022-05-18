<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landscaper</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <?= $this->include('Templates/header') ?>

  <!-- Favicons
    ================================================== -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navigation
    ==========================================-->

  <?= $this->include('Templates/navbar') ?>


  <!-- Header -->
  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <!-- <div class="row"> -->
            <div class="intro-text">
              <h1>Selamat Datang</h1>
              <p class="intro-subtext">Website Wisata Alam Batu So'on Solor, Bondowoso</p>
              <a href="<?= base_url('tickets') ?>" class="btn btn-custom btn-lg page-scroll">Pesan Tiket</a>
            </div>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </header>
  <!-- About Section -->
  <!-- Footer Section -->
  <?= $this->include('Templates/footer') ?>

</body>

</html>