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

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
  <!-- Navigation
    ==========================================-->

  <?= $this->include('Templates/navbar') ?>


  <!-- Header -->
  <div class="container">
    <h1 style="padding-top: 100px;">Daftar Pembelian Tiket</h1>

    <?= form_open('Tickets/saveData') ?>
    <table class="table">
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
            <td>
              <select class="form-control" id="exampleFormControlSelect1" type="submit">
                <option value="" disabled selected><?= $data->trx_status ?></option>
                <?php
                $statuses = ['Valid', 'Pending', 'Selesai', 'Batal'];
                $counter = 0;
                $length = count($statuses);


                for ($counter, $length; $counter < $length; $counter++) {
                  if ($data->trx_status != $statuses[$counter]) {
                ?>
                    <option><?= $statuses[$counter] ?></option>
                <?php
                  }
                }
                ?>


            </td>
            <td><?= $data->trx_validationTime ?> </td>
            <td>
              <button type="button" onclick="deleteData('<?= $data->trx_id ?>')">
                Delete
              </button>
              <button type="button" onclick="window.location='<?php echo site_url('Characters/editForm/') . $data->trx_id ?>'">
                Edit
              </button>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <? form_close() ?>
  </div>
  <!-- About Section -->
  <!-- Footer Section -->
  <?= $this->include('Templates/footer') ?>

</body>

</html>