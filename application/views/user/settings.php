<div class="container my-5">
    <div class="card px-5 py-5 border-0 shadow rounded-lg">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 d-none d-xl-block">
                <ul class="list-group">
                    <a href="<?php site_url('change') ?>" class="list-group-item active">
                        <i class="fas fa-user-edit mr-2" style="width:24px;"></i>
                        Edit Profile
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fas fa-lock mr-2" style="width:24px;"></i>
                        Change Password
                    </a>
                    <a href="<?php echo site_url('logout') ?>" class="list-group-item">
                        <i class="fas fa-sign-out-alt mr-2" style="width:24px;"></i>
                        Log out
                    </a>
                    <a href="<?php echo site_url('user/') ?>" class="list-group-item">
                        <i class="fas fa-sign-out-alt mr-2" style="width:24px;"></i>
                        Cancel
                    </a>
                </ul>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8">
                <h3 class="lead">Edit Profile</h3>
                <?php echo form_open("set_settings", array('enctype'=>'multipart/form-data')); ?>
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
                        <label for="city">Last Education</label>
                        <input type="text" name="last_education" value="<?php echo $user['last_education']; ?>" class="form-control" id="last_education" placeholder="Pendidikan terakhir?">
                        <?= form_error('last_education'); ?>
                    </div>
                    <div class="form-group">
                        <label for="city">Work</label>
                        <input type="text" name="work" value="<?php echo $user['work']; ?>" class="form-control" id="work" placeholder="Pekerjaan ?">
                        <?= form_error('work'); ?>
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
