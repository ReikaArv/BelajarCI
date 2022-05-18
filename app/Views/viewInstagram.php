<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="<?= base_url('instafeed.js/src/instafeed.js') ?>"></script>
</head>

<body>
    <h2>Test Instagram api</h2>

    <div id="instafeed"></div>

    <script type="text/javascript">
        var feed = new Instafeed({
            accessToken: 'IGQVJVcHc3dGY1MVN3eWlQMFNfb1hxUmFaTk9fYURQRlZAuRG9TdkNMODk5Q3I4eFNiemNsNTNPend0cjdsWFlSODR4NkVqSjlJZAzU4ZAE1RWVN0T2ZAoaDBjOXcwbVhMNE11MjREcm9nb2d1c0hZAN1ZA2VAZDZD'
        });
        feed.run();
    </script>

</body>

</html>