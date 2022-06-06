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
                <img src="<?= base_url('assets/img/success/cliply-green-check.gif') ?>" style="height: 200px;" />
                    <h2>Pembelian Tiket dengan ID #<?= $trxid = $getTrxId->trx_id; ?> Berhasil</h2>
                    <p class="intro-subtext">Halaman ini bersifat Invoice. Silahkan screenshot halaman ini dan tunjukkan kepada petugas ketika anda sedang berkunjung ke Wisata Alam Batu So'on Bondowoso</p>
                    <a href="<?= base_url('landingpage') ?>" class="btn btn-custom btn-lg page-scroll">Kembali ke Halaman Awal</a>
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