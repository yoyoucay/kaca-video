



<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="navbar-brand mb-2" href="#">
            <img src="<?php echo base_url("assets/img/logo-black.png") ?>" alt="Logo" style="max-height: 20px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto font-weight-bold">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('confide') ?>">Curhat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('video') ?>">TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Jual Beli</a>
                </li>
            </ul>
            <div class="dropdown">
                <button class="btn btn-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <?php if($user_item['nama_avatar'] == TRUE){?>
                    <img class="rounded" src="<?php echo base_url('assets/img/user.png') ?>" alt="" style="width:30px;">
                    <?php }else{ ?>
                    <img class="rounded" src="<?php echo base_url('assets/images/avatar/'.$_SESSION['photo']) ?>" alt="" style="width:30px;">
                    <?php } ?>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="<?php echo site_url('user/'.$_SESSION['username']) ?>">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="container my-3">
    <div class="row">
        <div class="col-lg-4">
            <!-- Start Foto Profil -->
            <?php if($user_item['nama_avatar'] == true){ ?>
            <img src="<?php echo base_url("assets/images/avatar/".$user_item['nama_avatar']) ?>" class="img-fluid rounded-lg mb-3" alt="Photo Profile">
            <?php }else{ ?>
            <img src="<?php echo base_url("assets/img/user.png") ?>" class="img-fluid rounded-lg mb-3" alt="Photo Profile">
            <?php } ?>
            <!-- End Foto Profil -->
            <h5 class="mb-3 text-capitalize"><?php echo $user_item['full_name']; ?></h5>
            <!-- Follow -->
            <?php if(@$_SESSION['user_id'] == TRUE){ ?>
                <?php if(@$_SESSION['user_id'] == $user_item['id']){?>
                <button type="button" class="btn btn-secondary btn-sm btn-block" data-toggle="modal" data-target="#settings-modal">Settings</button>
                <?php }else if(@$_SESSION['user_id'] != $user_item['id']){ ?>
                <?php if($follow == FALSE){ ?>
                    <?php echo form_open('auth/follow'); ?>
                    <input type="hidden" name="aku" value="<?php echo @$_SESSION['user_id']; ?>">
                    <input type="hidden" name="dia" value="<?php echo $user_item['id']; ?>">
                    <input type="submit" class="btn btn-warning btn-sm btn-block" value="Follow">
                    <?php echo form_close(); ?>
                <?php }else{  ?>
                    <?php echo form_open('auth/unfollow'); ?>
                    <input type="hidden" name="aku" value="<?php echo @$_SESSION['user_id']; ?>">
                    <input type="hidden" name="dia" value="<?php echo $user_item['id']; ?>">
                    <input type="submit" class="btn btn-warning btn-sm btn-block" value="Unfollow">
                    <?php echo form_close(); ?>
                <?php }?>
                <?php } ?>
            <?php } ?>
            <!-- End Follow -->
            <div class="row font-weight-bold text-secondary mb-3">
                <div class="col">
                    <button class="btn btn-link text-dark mr-2 px-0 font-weight-bold" data-toggle="modal" data-target="#followers-modal"><?php echo $count_follower['pengikut']; ?> <span class="text-secondary">Pengikut</span></button>
                </div>
                <div class="col">
                    <button class="btn btn-link text-dark mr-2 px-0 font-weight-bold" data-toggle="modal" data-target="#following-modal"><?php echo $count_follow['mengikuti']; ?> <span class="text-secondary">Diikuti</span></button>
                </div>
            </div>
            <p class="text-secondary mb-5"><?php echo $user_item['biodata'];?></p>
            <div class="mb-5">
                <h6>Alamat</h6>
                <p class="text-secondary">
                    <?php echo $user_item['lokasi_user'];?>
                </p>
            </div>
            <div class="mb-5">
                <h6>Pendidikan Terakhir</h6>
                <p class="text-secondary">
                    <?php echo $user_item['last_education'];?>
                </p>
            </div>
            <div class="mb-5">
                <h6>Pekerjaan</h6>
                <p class="text-secondary">
                    <?php echo $user_item['work'];?>
                </p>
            </div>
        </div>
        <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-color4 shadow rounded-lg mb-5">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav font-weight-bold">
                        <a class="nav-item nav-link" href="#">Curhat</a>
                        <a class="nav-item nav-link" href="#">Video TV</a>
                        <a class="nav-item nav-link disabled" href="#">Dagangan</a>
                    </div>
                </div>
            </nav>
            <ul class="list-unstyled">
                <?php foreach ($confide as $confide_item) { ?>
                <li class="media mb-5 bg-color4 p-4 rounded-lg shadow">
                    <!-- Start Photo Profile -->
                    <?php if($confide_item['nama_avatar'] == true){ ?>
                    <img src="<?php echo base_url("assets/images/avatar/".$confide_item['nama_avatar']) ?>" class="mr-3 rounded" alt="Photo" style="width:64px;">
                    <?php }else{ ?>
                    <img src="<?php echo base_url("assets/img/user.png") ?>" class="mr-3 rounded" alt="Photo" style="width:64px;">
                    <?php }?>
                    <!-- End Photo Profile -->
                    <div class="media-body">
                        <h5 class="mt-0 mb-1 text-capitalize"><?php echo $confide_item['full_name']; ?></h5>
                        <h6 class="mt-0 mb-1"><?php echo date("j M Y", strtotime($confide_item['created_at'])); ?></h6>
                        <p><?php echo $confide_item['deskripsi']; ?></p>
                        <!-- Media Gambar -->
                        <?php if($confide_item['tipe_file'] == 'image/png' || $confide_item['tipe_file'] == 'image/jpeg'){ ?>
                        <img class="img-fluid rounded mb-4" src="<?php echo base_url("assets/images/".$confide_item['nama_file']); ?>" alt="img">
                        <?php } ?>
                        <!-- Media Video -->
                        <?php if($confide_item['tipe_file'] == 'video/mp4'){ ?>
                        <div class="embed-responsive embed-responsive-16by9 mb-4 rounded-lg">
                            <video class="embed-responsive-item" controls>
                                <source src="<?php echo base_url("assets/videos/".$confide_item['nama_file']); ?>" type="<?php echo $confide_item['tipe_file']; ?>">
                            </video>
                        </div>
                        <?php } ?>
                        <a href="<?php echo site_url('confide/p/'.$confide_item['id']) ?>" class="btn btn-sm btn-warning"><i class="fas fa-comment"></i> Komentar</a>
                    </div>
                </li>
                <?php } ?>
            </ul>
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
                <ul class="list-group list-group-flush">
                    <a href="<?php echo site_url('settings') ?>" class="list-group-item">
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
                    <a href="#" class="list-group-item">
                        <i class="fas fa-sign-out-alt mr-2" style="width:24px;"></i>
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
