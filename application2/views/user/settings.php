<div class="container my-5">
    <div class="card px-5 py-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 d-none d-xl-block">
                <ul class="list-group">
                    <a href="<?php site_url('change') ?>" class="list-group-item active">
                        <i class="material-icons">account_circle</i>
                        Edit Profile
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="material-icons">lock</i>
                        Change Password
                    </a>
                    <a href="<?php echo site_url('logout') ?>" class="list-group-item">
                        <i class="material-icons">power_settings_new</i>
                        Log out
                    </a>
                    <a href="<?php echo site_url('home') ?>" class="list-group-item">
                        <i class="material-icons">cancel</i>
                        Cancel
                    </a>
                </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <h5 class="card-title">Edit Profile</h5>
                <?php echo form_open("auth/set_settings"); ?>
                <input type="hidden" id="custId" name="id" value="<?php echo $_SESSION['user_id'];?>">
                    <div class="form-group">
                        <label for="fullname">Email</label>
                        <input type="email" name="email" value="<?php echo $user['email']; ?>" class="form-control" id="email" placeholder="Masukan Emailmu" readonly class="form-control-plaintext">
                        <?= form_error('email'); ?>
                    </div>
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="fullname" value="<?php echo $user['full_name']; ?>" class="form-control" id="fullname" placeholder="Masukan nama lengkap">
                        <?= form_error('fullname'); ?>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php echo $user['username']; ?>" class="form-control" id="username" placeholder="Masukan username mu">
                        <?= form_error('username'); ?>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="user_lokasi" value="<?php echo $user['lokasi_user']; ?>" class="form-control" id="city" placeholder="Kotamu sekarang?">
                        <?= form_error('user_lokasi'); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea" class="bmd-label-floating">Bio</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3" name="biodata"><?php echo $user['biodata']; ?></textarea>
                        <?= form_error('biodata'); ?>
                    </div>
                    <button type="submit" class="btn btn-raised btn-primary btn-block">Submit</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
