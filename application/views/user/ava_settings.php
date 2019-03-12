    <?php echo form_open("people/set_Avatar", array('enctype'=>'multipart/form-data')); ?>
        <div class="form-group mb-2">
            <input type="file" class="form-control-file" name="avatar" id="uploadFile1" accept=".jpg, .png">
        </div>
        <!-- Loading Bar -->
        <div class="progress mb-2">
            <div class="progress-bar bg-color1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <!-- END Loading Bar -->
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
        <input type="submit" name="submit" id="uploadSubmit1" class="btn btn-warning my-3 btn-block" value="Bagikan">
    <?php echo form_close(); ?>