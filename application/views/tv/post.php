<div class="container my-3">
    <div class="row">
        <div class="col-lg-8">
            <div class="embed-responsive embed-responsive-16by9 rounded-lg">
                <video class="embed-responsive-item" controls autoplay loop>
                    <source src="<?php echo base_url("assets/content/".$details['nama_file']); ?>" type="<?php echo $details['tipe_file']; ?>">
                </video>
            </div>
            <h5 class="mb-2 mt-3 font-weight-bold"><?= $details['title'] ?></h5>
            <div class="small text-secondary mb-3">
                <fieldset disabled class="d-inline-block">
                <button class="btn btn-link btn-sm text-dark pl-0">Views 0</button>
                <button class="btn btn-link btn-sm text-dark"><?php echo date("j F Y", strtotime($details['created_at'])); ?></button>
                <button class="btn btn-link btn-sm text-dark">Shared 0</button>
                </fieldset>
                <div class="dropdown d-inline-block">
                    <button class="btn btn-secondary btn-primary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Settings
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?= site_url('/s/video/u/'.$details['id']);?>">Update</a>
                        <a class="dropdown-item" href="<?= site_url('/s/video/d/'.$details['id']);?>">Delete</a>
                    </div>
                </div>
                <?php if(@$_SESSION['user_id'] == TRUE){ ?>
                    <?php if($check_suka == FALSE){ ?>
                        <?php echo form_open('video/likeVideo','class="d-inline-flex mb-0 float-right"'); ?>
                        <input type="hidden" name="id_status" value="<?= $details['id']; ?>">
                        <input type="hidden" name="id_user" value="<?= $user['id'];?>">
                        <button class="btn btn-link btn-sm" type="submit">
                            <?php if ($count_suka['status_like'] == 0) {
                                echo "";
                            }else{
                                echo $count_suka['status_like'];
                            }?>
                            Like
                        </button>
                        <?php echo form_close(); ?>
                    <?php }else{ ?>
                        <?php echo form_open('video/unlikeVideo','class="d-inline-flex mb-0 float-right"'); ?>
                        <input type="hidden" name="id_status" value="<?= $details['id']; ?>">
                        <input type="hidden" name="id_user" value="<?= $user['id'];?>">
                        <button class="btn btn-secondary btn-danger btn-sm" style="margin-top:-1px;">
                            <?php if ($count_suka['status_like'] == 0) {
                                echo "";
                            }else{
                                echo $count_suka['status_like'];
                            }?>
                            Like
                        </button>
                        <?php echo form_close(); ?>
                    <?php } ?>
                <?php } ?>
            </div>
            <p><?php echo $details['description']; ?></p>
            <div class="media">
                <!-- Start Foto Profile -->
                <?php if($details['nama_avatar'] == true){ ?>
                <img class="mr-3 rounded-lg" src="<?php echo base_url("assets/images/avatar/".$details['nama_avatar']); ?>" alt="Generic placeholder image" style="width:60px;">
                <?php }else{ ?>
                <img class="mr-3 rounded-lg" src="<?php echo base_url("assets/img/user.png"); ?>" alt="Generic placeholder image" style="width:60px;">
                <?php } ?>
                <!-- End Foto Profile -->
                <div class="media-body">
                    <h6 class="mt-0 text-capitalize"><?php echo $details['full_name']; ?></h6>
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
                <input type="submit" class="btn btn-warning btn-raised btn-block" value="Submit">
            <?php echo form_close(); ?>
            <!-- End Komentar -->
            <?php foreach($comment as $comment_item) { ?>
            <div class="media mb-3">
                <img class="mr-3 rounded-lg" src="https://via.placeholder.com/60" alt="Generic placeholder image">
                <div class="media-body">
                    <h6 class="mt-0">
                        <span class="text-capitalize"><?= $comment_item['full_name']; ?></span>
                        <span class="small text-secondary"><?php echo date("j F Y", strtotime($comment_item['created_at'])); ?></span>
                        <?php if ($comment_item['user_id'] == @$_SESSION['user_id']): ?>
                          <span class="float-right"> <a href="<?php echo site_url('video/edit_comment/').$details['id']."/".$comment_item['id']; ?>">Edit</a> <a href="<?php echo site_url('video/delete_comment/').$details['id']."/".$comment_item['id']; ?>">Delete</a></span>
                        <?php endif; ?>
                    </h6>
                    <?= $comment_item['deskripsi'];?>
                </div>
            </div>
            <?php } ?>
            <!-- End Komentar -->
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
