<div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <center><img src="<?php echo base_url('assets/img/logo-black.png') ?>" alt="" class="mb-2" style="max-height: 30px;"></center>
                        <h5 class="card-title text-center">Lupa kata sandi</h5>
                        <?php echo form_open('auth/forgot_password','class="form-signin"'); ?>
                            <div class="form-label-group">
                                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Alamat email" aria-describedby="emailHelp" required autofocus>
                                <label for="inputEmail">Alamat email</label>
                                <small id="emailHelp" class="form-text text-muted">Pastikan email anda aktif, untuk mendapatkan link menuju ganti password</small>
                            </div>
                            <?php echo form_error('email'); ?>
                            <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit">Submit</button>
                            <a class="d-block text-center mt-2 small text-dark" href="<?php echo site_url('login') ?>">Kembali</a>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>