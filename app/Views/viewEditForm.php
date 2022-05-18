<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit karakter</title>
</head>
<body>
    <h2>Form edit karakter</h2>
    <button type="button" onclick="window.location='../Characters' ">
        Back
    </button>

    <p>
        <?= form_open('Characters/updateData')  ?>
        <table>
            <tr>
                <td>ID: </td>
                <td>
                    <input type="text" name="id" id="" readonly value="<?= $id ?>"> 
                </td>
            </tr>
            <tr>
                <td>Nama Karakter : </td>
                <td>
                    <input type="text" name="name" id="" autofocus> 
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
        <?= form_close()  ?>
    </p>
</body>
</html>