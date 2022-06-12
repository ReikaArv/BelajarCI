<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?= $this->include('Templates/header') ?>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/login.css') ?>">
</head>

<body class="body">
    <?= $this->include('Templates/navbar') ?>
    <header id="header">
        <div class="intro">
            <div class="container">
                <div class="intro-text">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Login</h5>
                            <form>
                                <div class="form-group">
                                    <label for="userinput">Username</label>
                                    <input type="text" class="form-control" id="userinput" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="pwinput">Password</label>
                                    <input type="password" class="form-control" id="pwinput">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- <div class="container">
        <div class="row" style="margin-top: 200px;">
            <div class="col-6">
                

                
            </div>
        </div>
    </div> -->
</body>
<?= $this->include('Templates/footer') ?>

</html>