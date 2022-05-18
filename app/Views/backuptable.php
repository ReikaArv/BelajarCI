<table class="table table-info">
    <thead>
        <tr style="text-align: center;">
            <th>Nama Tiket</th>
            <th>Deskripsi Tiket</th>
            <th>Harga</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($showData as $data) : ?>

            <tr>
                <td> <?= $data->nama_tix ?> </td>
                <td style="width: 500px;"> <?= $data->desc_tix ?> </td>
                <td> <?= $data->harga_tix ?> </td>
                <td>
                    <input type="number" id="harga<?= $data->id_tix + 1 ?>" name="inputbox" style="width: 100px;" class="form-control">
                    <button id="cartbtn" class="btn-primary" onclick="addtocart()">Add to cart</button>
                </td>
            </tr>


        <?php endforeach ?>
        <td></td>
        <td></td>
        <td></td>
        <td><button onclick="buy()">Add all to cart</button></td>

    </tbody>

</table>

<div class="col-2">
    <div class="cart" style="padding-top: 100px;">
        Keranjang:
        <table class="table table-sm table-borderless" id="tabelcart">
            <tr>
                <td id="cart1"></td>
            </tr>
            <tr>
                <td id="cart2"></td>
            </tr>
            <tr>
                <td id="cart3"></td>
            </tr>
            <tr>
                <td id="cart4"></td>
            </tr>
            <tr>
                <td> </td>
            </tr>
        </table>
        Total : Rp. <a id="totalval">0</a>
        <button id="buybtn" style="display: none;">Bayar</button>
    </div>
</div>