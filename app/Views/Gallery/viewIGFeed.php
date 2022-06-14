<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $pageTitle ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <?= $this->include('Templates/header') ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/igfeed.css') ?>">
</head>

<body id="page-top">

    <?= $this->include('Templates/navbar') ?>

    <!-- Gallery -->


    <div class="container">
        <div class="ig">
            <?php foreach ($decode['data'] as $data) : ?>
                <div class="card border-success mb-3" style="width: 18rem;">
                    <?php
                    if ($data['media_type'] === 'IMAGE' or $data['media_type'] === 'CAROUSEL_ALBUM') {
                    ?>
                        <img src="<?= $data['media_url']; ?>" class="card-img-top" alt="...">
                    <?php
                    } elseif ($data['media_type'] === 'VIDEO') {
                    ?>
                        <img src="<?= $data['thumbnail_url']; ?>" class="card-img-top" alt="...">
                    <?php
                    }
                    ?>
                    <div class="card-body">
                        <h5 class="card-title text-success">
                            <?= date("d/m/Y H:i", strtotime($data['timestamp'])); ?>    
                        </h5>
                        <p class="card-text" id="capts">Caption: <?= array_key_exists("caption", $data) ? $data['caption'] : "kosong" ?></p>
                        <a href="<?= $data['permalink'] ?>" class="btn btn-success">Lihat di Instagram</a>
                    </div>
                </div>
            <?php endforeach;    ?>
        </div>


        <!-- Gallery -->

        <!-- Footer Section -->
        <?= $this->include('Templates/footer') ?>

</body>

</html>