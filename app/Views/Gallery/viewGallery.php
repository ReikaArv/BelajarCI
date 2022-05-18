<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Landscaper</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <?= $this->include('Templates/header') ?>
</head>

<body id="page-top">

  <?= $this->include('Templates/navbar') ?>

  <!-- Gallery -->

  <?php

  $a = 0;
  while ($a <= 5) {
    $a += 1;
    $b = 'assets/img/gallery/image' . $a . '.jpg';
  ?>

    <img src="<?= base_url($b) ?>" class="img-fluid shadow-2-strong" />

  <?php
  }
  ?>

  <!-- Gallery -->

  <!-- Footer Section -->
  <?= $this->include('Templates/footer') ?>

</body>

</html>