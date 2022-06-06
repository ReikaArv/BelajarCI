<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Harga Ticket</title>


    <?= $this->include('Templates/header') ?>
</head>

<body>

    <?= $this->include('Templates/navbar') ?>

    <div class="container">
        <div class="p" style="margin-top: 50px; visibility: hidden;">Ticket ID:</div>
        <p id="trxid" style="visibility: hidden;">
            <?php
            $trxid = $getTrxId->trx_id + 1;
            echo $trxid
            ?>
        </p>
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

            <button type="submit" class="btn btn-primary" id="btn-qr" data-toggle="modal" data-target="#showQR" data-id="<?= $trxid ?>">
                Bayar
            </button>
        </div>


    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <?= form_open('Tickets/savefromQr') ?>
    <div class="modal fade" id="showQR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="<?= base_url('assets/img/qrcode/qrcode.png') ?> " width="60%" class="rounded mx-auto d-block">
                    <!-- <h5>ceritanya gambar qr</h5> -->
                    <div class="form-group row">
                        <label for="staticId" class="col-sm-3 col-form-label">ID Pesanan :</label>
                        <div class="col-sm-7">
                            <input type="text" readonly class="form-control-plaintext" id="staticId">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticHarga" class="col-sm-3 col-form-label">Total Biaya :</label>
                        <div class="col-sm-7">
                            <input type="text" readonly class="form-control-plaintext" id="staticHarga">
                        </div>
                    </div>
                    <p>Silahkan scan code QR diatas menggunakan aplikasi E-wallet anda. Lakukan pembayaran sesuai nominal yang tertera dan tuliskan Order ID anda pada notes pembayaran di E-wallet anda. Klik Pesan Tiket jika selesai membayar</p>


                    <!-- Hidden input to send to backend -->
                    <input type="hidden" name="id-tiket" id="id-tiket">
                    <input type="hidden" name="tiket-orang" id="tiket-orang">
                    <input type="hidden" name="tiket-parkir" id="tiket-parkir">
                    <!-- End hidden input  -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Pesan Tiket</button>
                </div>
            </div>
        </div>
    </div>
    <?= form_close() ?>

    </div>
    </div>


    <?= $this->include('Templates/footer') ?>

</body>

</html>