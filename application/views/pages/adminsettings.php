<?php require_once(APPPATH. "/views/layouts/navbar.php");?>
<div class="container mt-5 py-5">
<h1 class="display-4 text-center mb-5">Settings</h1>
    <div class="row">
        <div class="col">
            <?php echo form_open("auth/set_settings_admin", array('enctype'=>'multipart/form-data')); ?>
                <input type="text" id="custId" name="id" value="<?php echo $user['id'];?>">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" name="email" value="<?php echo $user['email']; ?>" readonly class="form-control-plaintext">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" name="username" value="<?php echo $user['username']; ?>" class="form-control" readonly class="form-control-plaintext">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Fullname</label>
                    <div class="col-sm-10">
                    <input type="text" name="fullname" value="<?php echo $user['full_name']; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Bio</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="biodata" rows="3"><?php echo $user['biodata']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                    <input type="text" name="user_lokasi" value="<?php echo $user['lokasi_user']; ?>" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                    <input type="file" name="avatar" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm btn-block">Edit</button>
            <?php echo form_close(); ?>
        </div>
    </div>
<div> 