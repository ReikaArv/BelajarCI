<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landscaper</title>

  <?= $this->include('Templates/header') ?>
</head>

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