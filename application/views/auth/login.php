<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <img src="<?php echo base_url('assets/img/logo-black.png') ?>" alt="" class="mb-3" style="max-height: 30px;">
                            <h3 class="login-heading mb-4">Selamat Datang!</h3>
                            <?php echo form_open('login'); ?>
                                <div class="form-label-group">
                                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address"
                                        required autofocus>
                                    <label for="inputEmail">Alamat email</label>
                                </div>
                                <?php echo form_error('email'); ?>

                                <div class="form-label-group">
                                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                                        required>
                                    <label for="inputPassword">Kata sandi</label>
                                </div>
                                <?php echo form_error('password'); ?>

                                <!-- <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Ingatkan kata sandi</label>
                                </div> -->
                                <button class="btn btn-lg btn-warning btn-block btn-login text-uppercase font-weight-bold mb-2"
                                    type="submit">Masuk</button>
                                <div class="text-left">
                                    <a class="small text-dark" href="<?php echo site_url('register') ?>">Belum daftar?</a>
                                    <a class="small text-dark" href="<?php echo site_url('forgot-password') ?>">Lupa kata sandi?</a>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>