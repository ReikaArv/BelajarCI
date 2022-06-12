<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $pageTitle ?></title>

  <?= $this->include('Templates/header') ?>
  <link rel="stylesheet" type="text/css" href="assets/css/viewpanel.css">

</head>

<body>
  <?= $this->include('Templates/navbar') ?>


  <!-- Header -->
  <div class="container">
    <h1 id='daftarText'>Daftar Pembelian Tiket</h1>
    <form class="form-inline">
      <div class="form-group mb-2">
        <input type="text" class="form-control " id="srcInput" onkeyup="searchFunc()" placeholder="Cari ID Transaksi">
      </div>
    </form>
    <div class="tabel">

      <table class="table table-success table-hover" id="transactionlist">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tiket yang dibeli</th>
            <th>Total Pembelian</th>
            <th>Waktu Transaksi</th>
            <th>Status Transaksi</th>
            <th>Waktu Validasi</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($showData as $data) :
          ?>
            <tr>
              <td><?= $data->trx_id ?> </td>
              <td><?= $data->trx_desc ?> </td>
              <td><?= $data->trx_value ?></td>
              <td><?= $data->trx_time ?> </td>
              <td><?= $data->trx_status ?></td>
              <td><?= $data->trx_validationTime ?> </td>
              <td>
                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalEdit" id="btn-edit" data-id="<?= $data->trx_id; ?>" data-desc="<?= $data->trx_desc ?>" data-value="<?= $data->trx_value ?>" data-status="<?= $data->trx_status ?>">
                  Edit
                </button>

                <a href="#" class="btn btn-danger btn-sm btn-delete" trx_id="<?= $data->trx_id; ?>">Delete</a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>

    <!-- Modal Edit Transaksi -->
    <?= form_open('AdminPanel/updateData') ?>
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalEdit_title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label>Deskripsi Transaksi</label>
              <input type="text" readonly class="form-control" name="desc-transaksi" id="desc-transaksi" placeholder="Deskripsi Transaksi">
            </div>

            <div class="form-group">
              <label>Jumlah Transaksi</label>
              <input type="text" readonly  class="form-control" name="value-transaksi" id="value-transaksi" placeholder="Jumlah Transaksi" value="<?= $data->trx_value ?>">
            </div>

            <div class="form-group">
              <label>Status</label>
              <select class="form-control trx_status" id="status" name="status">
                <option value="<?= $data->trx_status ?>"><?= $data->trx_status ?></option>
                <?php
                $statuses = ['Valid', 'Pending', 'Selesai', 'Batal'];
                $counter = 0;
                $length = count($statuses);
                for ($counter, $length; $counter < $length; $counter++) {
                  if ($data->trx_status != $statuses[$counter]) {
                ?>
                    <option value="<?= $statuses[$counter] ?>"><?= $statuses[$counter] ?></option>
                <?php
                  }
                }
                ?>
                </td>
            </div>
          </div>
          <div class="modal-footer">
            <div class="form-group">
              <input type="hidden" name="id-transaksi" id="id-transaksi" class="form-control">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" id="modal-btn">Batal</button>
              <button type="submit" class="btn btn-success" id="modal-btn">Simpan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <? form_close() ?>
    <!-- End Modal Edit Transaksi -->



  </div>
  <!-- About Section -->
  <!-- Footer Section -->
  <?= $this->include('Templates/footer') ?>

</body>

</html>