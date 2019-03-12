<div class="container my-5">
    <div class="card px-5 py-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <h5 class="card-title">Ganti Password</h5>
                <?php echo form_open("auth/change_password", array('enctype'=>'multipart/form-data')); ?>
                <input type="text" id="custId" name="id" value="<?php echo $_SESSION['user_id'];?>">
                    <div class="form-group">
                        <label for="old_password">Password lama</label>
                        <input type="password" name="password" value="" class="form-control" placeholder="Password lama anda">
                        <?= form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password">Password Baru</label>
                        <input type="password" name="password2" value="" class="form-control" placeholder="Password baru anda">
                        <?= form_error('password2'); ?>
                    </div>
                    <div class="form-group">
                        <label for="new_password2">Verifikasi Password</label>
                        <input type="password" name="password3" value="" class="form-control" placeholder="Verifikasi Password">
                        <?= form_error('password3'); ?>
                    </div>
                    <button type="submit" class="btn btn-raised btn-primary btn-block">Submit</button>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
