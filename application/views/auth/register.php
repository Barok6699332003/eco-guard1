<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration - Eco Guard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
    <section id="register">
        <div class="logo">
            <img src="<?= base_url() ?>assets/img/logo.png" alt="">
            <h1>Eco Guard</h1>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="row px-5">
                <div class="col-md-4 tagline p-5">
                    <h1>Register Eco Guard</h1>
                </div>
                <div class="login-image col-md-4 px-5 pt-5">
                    <img src="<?= base_url() ?>assets/img/1.jpeg" alt="" width="250" class="rounded">
                </div>
                <div class="col-md-4 form-register">
                    <h3 class="p-4">Daftar menjadi member</h3>
                    <form action="<?= base_url('register/process') ?>" method="POST">
                        <div class="form-group mb-4">
                            <div class="input-group align-items-center">
                                <span class="input-group-addon" id="basic-addon1"><i
                                        class="fa-regular fa-circle-user"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Username"
                                    aria-label="Username" aria-describedby="basic-addon1" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="input-group align-items-center">
                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" class="form-control" placeholder="Email"
                                    aria-label="Email" aria-describedby="basic-addon2" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="input-group align-items-center">
                                <span class="input-group-addon" id="basic-addon3"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    aria-label="Password" aria-describedby="basic-addon3" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="input-group align-items-center">
                                <span class="input-group-addon" id="basic-addon4"><i class="fa fa-lock"></i></span>
                                <input type="password" name="confirm_password" class="form-control"
                                    placeholder="Confirm Password" aria-label="Confirm Password"
                                    aria-describedby="basic-addon4" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-register w-100">Register</button>
                            <P> sudah menjadi member?<a href="<?= base_url('login') ?>">Login</a></p>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>