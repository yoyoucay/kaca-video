<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Upload Video
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8">
                    <?php echo form_open_multipart("Video/create"); ?>
                        <input type="hidden" name="user_id" id="" value="<?php echo $_SESSION['user_id']; ?>">
                        <div class="form-group">
                            <label for="judulvideo">Judul Video</label>
                            <input type="text" name="judul" class="form-control" id="judulvideo" placeholder="Masukan judul video">
                        </div>
                        <div class="form-group">
                            <label for="inputdeskirpsi">Deskripsi Video</label>
                            <textarea class="form-control" name="input_deskripsi" id="inputdeskripsi" rows="3" placeholder="Enter Deskripsi"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Thumbnail disini</label><br>
                            <?php echo form_upload('input_gambar'); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Upload Video disini</label><br>
                            <?php echo form_upload('input_video'); ?>
                        </div>
                    <?php echo form_submit('upload', 'upload file', 'class="btn btn-primary btn-raised btn-block"'); ?>
                    <?php echo form_close(); ?>
                </div>
                <div class="col-lg-4">

                </div>
            </div>
        </div>
    </div>
</div>