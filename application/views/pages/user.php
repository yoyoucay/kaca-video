<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-2 col-lg-2 mb-3">
            <img src="<?php if($user_item['nama_avatar'] == true){echo base_url("assets/images/avatar/".$user_item['nama_avatar']);}else{echo base_url("assets/img/user.png");} ?>" class="rounded-circle img-fluid" alt="" style="max-width:120px;max-height:120px;">
        </div>
        <div class="col-sm-12 col-md-8 col-lg-6">
            <h3>
                <span class="text-capitalize"><?php echo $user_item['full_name']; ?></span>
                <!-- Follow -->
                <?php if(@$_SESSION['user_id'] == TRUE){ ?>
                  <?php if(@$_SESSION['user_id'] == $user_item['id']){?>
                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#settings-modal">Settings</button>
                  <?php }else if(@$_SESSION['user_id'] != $user_item['id']){ ?>
                    <?php if($follow == FALSE){ ?>
                        <?php echo form_open('auth/follow'); ?>
                        <input type="hidden" name="aku" value="<?php echo @$_SESSION['user_id']; ?>">
                        <input type="hidden" name="dia" value="<?php echo $user_item['id']; ?>">
                        <input type="submit" class="btn btn-primary btn-sm" value="Follow">
                        <?php echo form_close(); ?>
                    <?php }else{  ?>
                        <?php echo form_open('auth/unfollow'); ?>
                        <input type="hidden" name="aku" value="<?php echo @$_SESSION['user_id']; ?>">
                        <input type="hidden" name="dia" value="<?php echo $user_item['id']; ?>">
                        <input type="submit" class="btn btn-primary btn-sm" value="Unfollow">
                        <?php echo form_close(); ?>
                    <?php }?>
                  <?php } ?>
                <?php } ?>
                <!-- End Follow -->
            </h3>
            <p><?php echo $user_item['biodata'];?></p>
            <span><?php echo $user_item['lokasi_user'];?></span><br><br>
            <button type="button" class="btn btn-link btn-sm text-dark p-0 mr-3" data-toggle="modal" data-target="#followers-modal">
                <strong><?php echo $count_follower['pengikut']; ?></strong> Followers
            </button>
            <button type="button" class="btn btn-link btn-sm text-dark p-0" data-toggle="modal" data-target="#following-modal">
                <strong><?php echo $count_follow['mengikuti']; ?></strong> Following
            </button>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <?php foreach ($confide as $confide_item) { ?>
                <div class="card mb-5">
                    <div class="card-header">
                        <img src="<?php if($confide_item['nama_avatar'] == true){echo base_url("assets/images/avatar/".$confide_item['nama_avatar']);}else{echo base_url("assets/img/user.png");} ?>" class="rounded-circle img-fluid mr-3" alt="" style="max-width:30px;max-height:30px;">
                        <span class="text-capitalize"><?php echo $confide_item['full_name']; ?></span><span class="small text-secondary"> - <?php echo date("j M Y", strtotime($confide_item['created_at'])); ?></span>
                        <button type="button" class="btn bmd-btn-icon float-right" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><i class="material-icons mr-3">edit</i> Edit</button>
                            <button class="dropdown-item" type="button"><i class="material-icons mr-3">delete</i>Delete</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if(
                            $confide_item['tipe_file'] == 'image/png' ||
                            $confide_item['tipe_file'] == 'image/jpeg'
                        ){
                            ?><img class="img-fluid rounded mb-2" src="<?php echo base_url("assets/images/".$confide_item['nama_file']); ?>" alt="img" style="object-fit: cover;object-position: 100% 0;width: 500px;height: 500px;"><?php
                        }else if(
                            $confide_item['tipe_file'] == 'video/mp4'
                        ){
                            ?>
                            <video class="mt-3 rounded" width="595" controls>
                              <source src="<?php echo base_url("assets/videos/".$confide_item['nama_file']); ?>" type="<?php echo $confide_item['tipe_file']; ?>">
                          </video>
                            <?php
                        }else{}
                        ?>
                        <!-- <h5 class="card-title">Special title treatment</h5> -->
                        <p class="card-text"><?php echo $confide_item['deskripsi']; ?></p>
                        <button type="button" class="btn btn-primary bmd-btn-icon">
                            <i class="material-icons">thumb_up</i>
                        </button>
                        <span class="mr-3">1000</span>
                        <a href="<?php site_url('d/'.$confide_item['id']); ?>" class="btn btn-primary bmd-btn-icon">
                            <i class="material-icons">mode_comment</i>
                        </a>
                        <span class="mr-3">1000</span>
                        <button type="button" class="btn btn-primary bmd-btn-icon">
                            <i class="material-icons">share</i>
                        </button>
                        <span>1000</span>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- Settings Modal -->
<div class="modal fade" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <a href="<?php echo site_url('change') ?>" class="list-group-item">
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
                    <a href="#" class="list-group-item">
                        <i class="material-icons">cancel</i>
                        Cancel
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Followers Modal -->
<div class="modal fade" id="followers-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Followers</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                  <?php foreach ($avatar_follower as $afer) {
                    if ($afer['username'] == $user_item['username'] ) {
                      ?>
                  <?php }else { ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="<?= site_url('u/'.$afer['username']); ?>"><?= $afer['username'];?></a>
                        <span class="badge badge-primary">Follow</span>
                    </li>
                  <?php }
                    } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Following Modal -->
<div class="modal fade" id="following-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Following</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <?php foreach ($avatar_follow as $af) {
                      if ($af['username'] == $user_item['username'] ) {
                        ?>
                    <?php }else { ?>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <!-- IF Belum Follow Akun pada list -->
                        <?php echo form_open('auth/follow1'); ?>
                            <a href="<?= site_url('u/'.$af['username']); ?>"><?= $af['username'];?></a>
                            <input type="hidden" name="ini_saya" value="<?php echo @$_SESSION['user_id']; ?>">
                            <input type="hidden" name="ini_dia" value="<?php echo $af['id']; ?>">
                            <input type="submit" value="Follow">
                          <?php echo form_close();?>
                        <!-- END IF  -->

                        <!-- IF Belum Follow Akun pada list -->

                        <!-- CODE  -->

                        <!-- END IF  -->
                      </li>
                    <?php }
                      } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
