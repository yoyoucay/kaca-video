<div class="container my-3">
    <div class="row my-4">
        <div class="col-lg-8">
            <div class="media">
                <!-- Mulai Foto Profil -->
                <?php if($details['nama_avatar'] == true){ ?>
                <img src="<?php echo base_url("assets/images/avatar/".$details['nama_avatar']); ?>" class="mr-3 rounded" alt="..." style="width:64px;">
                <?php }else{ ?>
                <img src="<?php echo base_url("assets/img/user.png"); ?>" class="mr-3 rounded" alt="..." style="width:64px;">
                <?php } ?>
                <!-- Akhir Foto Profil -->
                <div class="media-body">
                    <h5 class="mt-0 mb-1 text-capitalize"><?php echo $details['full_name']; ?></h5>
                    <h6 class="mt-0 mb-1"><?php echo date("j F Y", strtotime($details['created_at'])); ?></h6>
                    <p><?php echo $details['deskripsi']; ?></p>
                    <!-- Media Gambar -->
                    <?php if($details['tipe_file'] == 'image/png' || $details['tipe_file'] == 'image/jpeg'){ ?>
                    <img class="img-fluid rounded mb-4" src="<?php echo base_url("assets/images/".$details['nama_file']); ?>" alt="img">
                    <?php } ?>
                    <!-- Media Video -->
                    <?php if($details['tipe_file'] == 'video/mp4'){ ?>
                    <div class="embed-responsive embed-responsive-16by9 rounded-lg">
                        <video class="embed-responsive-item" controls autoplay loop>
                            <source src="<?php echo base_url("assets/videos/".$details['nama_file']); ?>" type="<?php echo $details['tipe_file']; ?>">
                        </video>
                    </div>
                    <?php } ?>
                    <!-- Likes -->
                    <div class="text-muted mr-2 my-3">
                        <!-- Start Like -->
                        <?php if(@$_SESSION['user_id'] == TRUE){ ?>
                            <?php if($check_suka == FALSE){ ?>
                                <?php echo form_open('confide/likeConfide','class="d-inline-flex"'); ?>
                                <input type="hidden" name="id_status" value="<?= $details['id']; ?>">
                                <input type="hidden" name="id_user" value="<?= $user['id'];?>">
                                <button class="btn btn-link btn-sm text-secondary px-0"><h5 class="fa fa-heart"></h5></button>
                                <?php echo form_close(); ?>
                                <?php if ($count_suka['status_like'] == 0) {
                                    echo "";
                                }else{
                                    echo $count_suka['status_like'];
                                }?>
                            <?php }else{ ?>
                                <?php echo form_open('confide/unlikeConfide','class="d-inline-flex"'); ?>
                                <input type="hidden" name="id_status" value="<?= $details['id']; ?>">
                                <input type="hidden" name="id_user" value="<?= $user['id'];?>">
                                <button class="btn btn-link btn-sm text-danger px-0"><h5 class="fa fa-heart"></h5></button>
                                <?php echo form_close(); ?>
                                <?php if ($count_suka['status_like'] == 0) {
                                    echo "";
                                }else{
                                    echo $count_suka['status_like'];
                                }?>
                            <?php } ?>
                        <?php } ?>
                        <!-- End Like -->
                    </div>
                </div>
            </div>
            <h6><?php echo $count_comment['jumlah_kiriman']; ?> Komentar</h6>
            <?php echo form_open('confide/insert_comment','class="mb-4"'); ?>
                <input type="hidden" name="confide_id" value="<?= $details['id'];?>">
                <input type="hidden" name="user_id" value="<?= $user['id'];?>">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tulis komentar</label>
                    <textarea  name="comment_txt" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <input type="submit" class="btn btn-sm btn-block btn-warning">
            <?php echo form_close(); ?>
            <ul class="list-unstyled">
                <?php foreach($comment as $comment_item) { ?>
                <li class="media mb-2">
                    <!-- Mulai Foto Profile -->
                    <?php if($comment_item['nama_avatar'] == true){ ?>
                    <img src="<?php echo base_url("assets/images/avatar/".$comment_item['nama_avatar']); ?>" class="mr-3 rounded" alt="..." style="width:64px;">
                    <?php }else{ ?>
                    <img src="<?php echo base_url("assets/img/user.png"); ?>" class="mr-3 rounded" alt="..." style="width:64px;">
                    <?php } ?>
                    <!-- Akhir Foto Profile -->
                    <div class="media-body">
                        <h6 class="mt-0 mb-1 text-capitalize"><?= $comment_item['full_name']; ?> <span class="small text-secondary"><?php echo date("j F Y", strtotime($comment_item['created_at'])); ?></span></h6>
                        <p><?= $comment_item['deskripsi'];?></p>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-lg-4"></div>
    </div>

</div>