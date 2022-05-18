<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Harga Ticket</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <?= $this->include('Templates/header') ?>
</head>

<body>

    <?= $this->include('Templates/navbar') ?>

    <div class="container">
        <?= form_open('Tickets/saveData') ?>
        <div class="p" style="margin-top: 100px">Ticket ID:</div>
        <p id="trxid">
            <?php
            $trxid = $getTrxId->trx_id + 1;
            echo $trxid

            ?>
        </p>
        <?php
        $cookiename = $trxid;
        setcookie($cookiename, $trxid, time() + 900)
        ?>
        <div class="row">

            <?php foreach ($showData as $data) : ?>
                <div class="col-md-3 col-sm-6">
                    <div class="card-deck">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="<?= base_url('img/ticket.png') ?> " alt="Card image cap" style="width: 50%;">
                            <div class="card-body">
                                <h5 class="card-title" id="tiket<?= $data->id_tix + 1 ?>"><?= $data->nama_tix ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Rp. <?= $data->harga_tix ?></h6>
                                <p class="card-text"><?= $data->desc_tix ?></p>
                                <div class="form-group">
                                    <label for="order<?= $data->id_tix + 1 ?>">Jumlah Tiket: </label>
                                    <select class="form-control" id="order<?= $data->id_tix + 1 ?>" name="order<?= $data->id_tix + 1 ?>">
                                        <option value="" disabled selected>Pilih jumlah tiket yang ingin dipesan</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="form" style="margin-top: 20px;">
            <div class="form-group col-md-5">
                <label for="email">Masukkan email untuk konfirmasi</label>
                <input type="email" id="email" class="form-control" placeholder="contoh@mail.com">
            </div>
            <input type="submit" class="btn btn-success" onclick="checkvalue()" value="Bayar">
        </div>

        <? form_close() ?>


    </div>

    <script>
        function checkValue() {
            var a = document.getElementById('data2');
            var b = document.getElementById('data3');

            if (a == 0 && b == 0) {
                alert("Silahkan masukkan jumlah tiket")
            }
        }
    </script>

    </div>
    </div>


    <?= $this->include('Templates/footer') ?>

</body>

</html>