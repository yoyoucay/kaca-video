<div class="container my-5">
    <div class="row">
        <div class="col-lg-8">
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" controls autoplay loop>
                    <source src="<?php echo base_url("assets/content/".$details['nama_file']); ?>" type="<?php echo $details['tipe_file']; ?>">
                </video>
            </div>
            <h5 class="mb-2 mt-3 font-weight-bold"><?= $details['title'] ?></h5><a href="http://localhost/kaca3/mobileweb/s/video/u/<?php echo $details['id']; ?>">Update</a> - <a href="http://localhost/kaca3/mobileweb/s/video/d/<?php echo $details['id']; ?>">Delete</a>
            <div class="small text-secondary mb-3">
                <span class="mr-3">Views 0</span>
                <span class="mr-3"><?php echo date("j F Y", strtotime($details['created_at'])); ?></span>
                <span class="mr-3">Shared 0</span>
                <?php if(@$_SESSION['user_id'] == TRUE){ ?>
                    <?php if($check_suka == FALSE){ ?>
                        <?php echo form_open('video/likeVideo'); ?>
                        <input type="hidden" name="id_status" value="<?= $details['id']; ?>">
                        <input type="hidden" name="id_user" value="<?= $user['id'];?>">
                        <button type="submit">Hit up!</button>
                        <?php echo form_close(); ?>
                        <?php if ($count_suka['status_like'] == 0) {
                            echo "";
                        }else{
                            echo $count_suka['status_like'];
                        }?>
                    <?php }else{ ?>
                        <?php echo form_open('video/unlikeVideo'); ?>
                        <input type="hidden" name="id_status" value="<?= $details['id']; ?>">
                        <input type="hidden" name="id_user" value="<?= $user['id'];?>">
                        <button type="submit">Hit down!</button>
                        <?php echo form_close(); ?>
                        <?php if ($count_suka['status_like'] == 0) {
                            echo "";
                        }else{
                            echo $count_suka['status_like'];
                        }?>
                    <?php } ?>
                <?php } ?>
            </div>
            <p><?php echo $details['description']; ?></p>
            <div class="media">
                <img class="mr-3 rounded-circle" src="
                        <?php if($details['nama_avatar'] == true){ ?>
                            <?php echo base_url("assets/images/avatar/".$details['nama_avatar']); ?>
                        <?php }else{ ?>
                        <?php echo base_url("assets/img/user.png");} ?>
                " alt="Generic placeholder image" style="max-width:60px;max-height:60px;min-height:60px;">
                <div class="media-body">
                    <h6 class="mt-0"><?php echo $details['full_name']; ?></h6>
                    <span class="small text-secondary">Content Creator</span>
                </div>
            </div>
            <?php echo form_open('video/insert_comment','class="my-5"'); ?>
                <h6><span><?php echo $count_comment['jumlah_kiriman']; ?></span> Komentar</h6>
                <input type="hidden" name="video_id" value="<?= $details['id'];?>">
                <input type="hidden" name="user_id" value="<?= $user['id'];?>">
                <div class="form-group">
                    <label for="exampleTextarea" class="bmd-label-floating">Input komentar</label>
                    <textarea name="comment_txt" class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                <input type="submit" class="btn btn-primary btn-raised btn-block" value="Komen sekarang">
            <?php echo form_close(); ?>
            <?php foreach($comment as $comment_item) { ?>
            <div class="media mb-3">
                <img class="mr-3 rounded-circle" src="https://via.placeholder.com/60" alt="Generic placeholder image">
                <div class="media-body">
                    <h6 class="mt-0">
                        <?= $comment_item['full_name']; ?>
                        <span class="small"><?php echo date("j F Y", strtotime($comment_item['created_at'])); ?></span>
                    </h6>
                    <?= $comment_item['deskripsi'];?>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col-lg-4 d-none d-xl-block d-lg-block">
            <div>
                <img src="https://via.placeholder.com/1280x720" class="img-fluid" alt="">
                <span class="text-secondary small">Pewdiepie</span><br>
                <span class="small font-weight-bold">
                    Lorem Ipsum adalah contoh teks atau dummy
                </span>
                <p class="small">
                    Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau
                    typesetting.
                </p>
            </div>
            <div class="media my-3">
                <img class="mr-3 img-fluid" src="https://via.placeholder.com/1280x720" alt="Generic placeholder image"
                    style="max-width: 120px;">
                <div class="media-body">
                    <h6 class="mt-0">Media heading</h6>
                    <div class="small">
                        <span>Ferry Dermawan</span><br>
                        <span>Views 0k</span>
                    </div>
                </div>
            </div>
            <div class="media my-3">
                <img class="mr-3 img-fluid" src="https://via.placeholder.com/1280x720" alt="Generic placeholder image"
                    style="max-width: 120px;">
                <div class="media-body">
                    <h6 class="mt-0">Media heading</h6>
                    <div class="small">
                        <span>Ferry Dermawan</span><br>
                        <span>Views 0k</span>
                    </div>
                </div>
            </div>
            <div class="media my-3">
                <img class="mr-3 img-fluid" src="https://via.placeholder.com/1280x720" alt="Generic placeholder image"
                    style="max-width: 120px;">
                <div class="media-body">
                    <h6 class="mt-0">Media heading</h6>
                    <div class="small">
                        <span>Ferry Dermawan</span><br>
                        <span>Views 0k</span>
                    </div>
                </div>
            </div>
            <div class="media my-3">
                <img class="mr-3 img-fluid" src="https://via.placeholder.com/1280x720" alt="Generic placeholder image"
                    style="max-width: 120px;">
                <div class="media-body">
                    <h6 class="mt-0">Media heading</h6>
                    <div class="small">
                        <span>Ferry Dermawan</span><br>
                        <span>Views 0k</span>
                    </div>
                </div>
            </div>
            <div class="media my-3">
                <img class="mr-3 img-fluid" src="https://via.placeholder.com/1280x720" alt="Generic placeholder image"
                    style="max-width: 120px;">
                <div class="media-body">
                    <h6 class="mt-0">Media heading</h6>
                    <div class="small">
                        <span>Ferry Dermawan</span><br>
                        <span>Views 0k</span>
                    </div>
                </div>
            </div>
            <div class="media my-3">
                <img class="mr-3 img-fluid" src="https://via.placeholder.com/1280x720" alt="Generic placeholder image"
                    style="max-width: 120px;">
                <div class="media-body">
                    <h6 class="mt-0">Media heading</h6>
                    <div class="small">
                        <span>Ferry Dermawan</span><br>
                        <span>Views 0k</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
