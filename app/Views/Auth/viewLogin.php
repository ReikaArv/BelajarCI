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

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-white">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">
                                <?php if(session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger alert-dismissable show fade">
                                        <div class="alert-body">
                                            <button class="close" data-dismiss="alert">
                                                x
                                            </button>
                                            <b>Error</b>
                                            <?= session()->getFlashdata('error') ?>
                                        </div>
                                    </div>
                                <?php endif ?>

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <?= form_open('Auth/loginProcess') ?>

                                <div class="form-outline form-white mb-4">
                                    <input type="text" name="username" id="username" class="form-control form-control-lg" required/>
                                    <label class="form-label" for="username">Username</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <? form_close() ?>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <div class="container">
        <div class="row" style="margin-top: 200px;">
            <div class="col-6">
                

                
            </div>
        </div>
    </div> -->
</body>
<?= $this->include('Templates/footer') ?>

</html>