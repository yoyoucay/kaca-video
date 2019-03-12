
<div class="container my-3">
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow rounded-lg border-0">
            <div class="card-header font-weight-bold bg-color1 text-white">
                Edit curhat #<?php echo $content['id'] ?>
            </div>
            <div class="card-body">
                <div class="media">
                    <img src="<?php echo base_url('assets/images/avatar/'.$_SESSION['photo']) ?>" class="mr-3 rounded-lg" alt="Photo" style="width:64px;">
                    <div class="media-body">
                    <?php echo form_open('confide/edit/'.$content['user_id'].'/'.$content['id']); ?>
                        <div class="form-group mt-2">
                            <input type="hidden" name="user_id" id="" value="<?php echo $_SESSION['user_id']; ?>">
                            <textarea class="form-control" name="input_deskripsi" id="exampleFormControlTextarea1" rows="3" style="max-height: 150px;min-height: 150px;"><?php echo $content['deskripsi']; ?></textarea>
                            <input type="submit" name="submit" class="btn btn-warning my-3 btn-block" value="Simpan">
                        </div>
                    <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>
</div>

