<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $pageTitle ?></title>

  <?= $this->include('Templates/header') ?>
</head>

<body class="landingbody">

  <?= $this->include('Templates/navbar') ?>


  <!-- Header -->
  <header id="header">
    <div class="intro">
      <div class="overlay">
        <div class="container">
          <!-- <div class="row"> -->
          <div class="intro-text">
            <img src="<?= base_url('assets/img/success/cliply-green-check.gif') ?>" style="height: 200px; visibility:hidden; " />
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