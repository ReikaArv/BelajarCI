<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Character</title>
</head>
<body>
    <h2>Data karakter Genshin Impact</h2>
    <button type="button" onclick="window.location='../Characters/addForm' ">
        Tambah data baru
    </button>
    <table border="2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Karakter</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($showData as $data) :
            ?>
            <tr>
                <td><?= $data->id ?> </td>
                <td><?= $data->name ?> </td>
                <td>
                    <button type="button" onclick="deleteData('<?= $data->id ?>')">
                        Delete
                    </button>
                    <button type="button" onclick="window.location='<?php echo site_url('Characters/editForm/') . $data->id ?>'">
                        Edit
                    </button>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script>
        function deleteData(id){
            msg = confirm("yakin delete data?");

            if(msg){
                window.location.href=("<?= site_url('Characters/Delete/') ?>" + id);
            } else return false
        }
    </script>
</body>
</html>