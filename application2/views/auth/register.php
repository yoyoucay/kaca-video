<div class="container">
    <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card card-signin flex-row my-5">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body">
                    <center><img src="<?php echo base_url('assets/img/logo-black.png') ?>" alt="" class="mb-2" style="max-height: 30px;"></center>
                    <h5 class="card-title text-center">Daftar</h5>
                    <?php echo form_open('register','class="form-signin"'); ?>
                        <div class="form-label-group">
                            <input type="text" name="full_name" id="inputFullname" class="form-control" placeholder="Nama lengkap"
                                required autofocus>
                            <label for="inputFullname">Nama Lengkap</label>
                        </div>
                        <?php echo form_error('full_name'); ?>

                        <div class="form-label-group">
                            <input type="text" name="username" id="inputUserame" class="form-control" placeholder="Username"
                                required autofocus>
                            <label for="inputUserame">Username</label>
                        </div>
                        <?php echo form_error('username'); ?>

                        <div class="form-label-group">
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Alamat email"
                                required>
                            <label for="inputEmail">Alamat email</label>
                        </div>
                        <?php echo form_error('email'); ?>

                        <hr>

                        <div class="form-label-group">
                            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Kata sandi"
                                required>
                            <label for="inputPassword">Kata sandi</label>
                        </div>
                        <?php echo form_error('password'); ?>

                        <div class="form-label-group">
                            <input type="password" name="password2" id="inputConfirmPassword" class="form-control" placeholder="Password"
                                required>
                            <label for="inputConfirmPassword">Ulangi Kata sandi</label>
                        </div>
                        <?php echo form_error('password2'); ?>

                        <button class="btn btn-lg btn-warning btn-block text-uppercase" type="submit">Daftar</button>
                        <a class="d-block text-center mt-2 small text-dark" href="<?php echo site_url('login'); ?>">Masuk</a>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>