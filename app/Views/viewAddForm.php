<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form karakter baru</title>
</head>
<body>
    <h2>Form karakter baru</h2>
    <button type="button" onclick="window.location='../Characters' ">
        Back
    </button>

    <p>
        <?= form_open('Characters/saveData')  ?>
        <table>
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