<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="<?= base_url('landingpage') ?>"><img src="<?= base_url('assets/img/logo/Lambang_Bondowoso.png') ?>" alt="" style="height: 30px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-white" href="<?= base_url('landingpage') ?>">Halaman Awal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('gallery') ?>">Galeri Foto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('tickets') ?>">Pesan Tiket</a>
      </li>
      <?php if (session('logged_in')) : ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Hi, <?= session('username') ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Nama : <?= session('username') ?></a>
            <a class="dropdown-item" href="#">Waktu Login : <br> <?= session('login_time') ?></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= site_url('Auth/logout') ?>">Logout</a>
          </div>
        </li>
      <?php endif ?>
    </ul>
  </div>
</nav>