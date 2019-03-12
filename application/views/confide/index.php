<div class="container my-3">
    <div class="row my-4">
        <div class="col-lg-8">
            <div class="container px-0">
                <div class="card shadow mb-5">
                    <div class="card-header font-weight-bold bg-color1 text-white rounded-lg">
                        Tulis Curhat
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-text-tab" data-toggle="pill" href="#pills-text"
                                    role="tab" aria-controls="pills-text" aria-selected="true">Curhat tulisan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-image-tab" data-toggle="pill" href="#pills-image" role="tab"
                                    aria-controls="pills-image" aria-selected="false">Curhat gambar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                                    aria-controls="pills-video" aria-selected="false">Curhat video</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="pills-text" role="tabpanel" aria-labelledby="home-tab">
                                <?php echo form_open('confide/tambah_confide'); ?>
                                <input type="hidden" name="user_id" id="" value="<?php echo $_SESSION['user_id']; ?>">
                                <div class="form-group mt-2">
                                    <textarea class="form-control" name="input_deskripsi" id="exampleFormControlTextarea1"
                                        rows="3" style="max-height: 150px;min-height: 150px;" placeholder="Tulis curhatmu disini.."></textarea>
                                    <input type="submit" name="submit" class="btn btn-warning my-3 btn-block" id="imageSubmit" value="Bagikan">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-image" role="tabpanel" aria-labelledby="profile-tab">
                                <!-- Upload Gambar -->
                                <div style="color: red;">
                                    <?php echo (isset($message))? $message : ""; ?>
                                </div>
                                <?php echo form_open("confide/tambah_confidePhoto", "id='uploadImage'", array('enctype'=>'multipart/form-data')); ?>
                                <div class="form-group mb-2">
                                    <input type="file" class="form-control-file" name="input_gambar" id="uploadFile1" accept=".jpg, .png">
                                </div>
                                <!-- Loading Bar -->
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-color1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!-- END Loading Bar -->
                                <div class="form-group mb-2">
                                    <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                    <textarea class="form-control" name="input_deskripsi" id="exampleFormControlTextarea1"
                                        rows="3" style="max-height: 150px;min-height: 150px;" placeholder="Tulis caption fotomu disini.."></textarea>
                                </div>
                                <input type="submit" name="submit" id="uploadSubmit1" class="btn btn-warning my-3 btn-block" value="Bagikan">
                                <?php echo form_close(); ?>
                            </div>
                            <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="contact-tab">
                                <?php echo form_open("confide/tambah_confideVideo", "id='uploadVideo'", array('enctype'=>'multipart/form-data')); ?>
                                <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                <div class="form-group mt-2">
                                    <input type="file" class="form-control-file" name="input_video" id="uploadFile2">
                                </div>
                                <div class="form-group mt-2">
                                    <textarea class="form-control" name="input_deskripsi" id="exampleFormControlTextarea1"
                                        rows="3" style="max-height: 150px;min-height: 150px;" placeholder="Tulis caption videomu disini.."></textarea>
                                </div>
                                <!-- Loading Bar -->
                                <div class="progress mb-2">
                                    <div class="progress-bar bg-color1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <!-- END Loading Bar -->
                                <input type="submit" name="submit" id="uploadSubmit2" class="btn btn-warning my-3 btn-block" value="Bagikan">
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled">
                <?php foreach ($content as $content_item) { ?>
                <li class="media mb-5 bg-color4 p-4 rounded-lg shadow">
                    <!-- Mulai Foto Profile -->
                    <?php if($content_item['nama_avatar'] == 0){ ?>
                    <img src="<?php echo base_url('assets/img/user.png') ?>" class="mr-3 rounded" alt="Photo Profile" style="width:64px;">
                    <?php }else{ ?>
                    <img src="<?php echo base_url('assets/images/avatar/'.$content_item['nama_avatar']) ?>" class="mr-3 rounded" alt="..." style="width:64px;">
                    <?php }?>
                    <!-- Berakhir Foto Profile -->
                    <div class="media-body">
                        <h5 class="mt-0 mb-1 text-capitalize">
                            <?php echo $content_item['full_name']; ?>
                        </h5>
                        <h6 class="mt-0 mb-1">
                            <?php echo date("j M Y", strtotime($content_item['created_at'])); ?>
                        </h6>
                        <p>
                            <?php echo $content_item['deskripsi']; ?>
                        </p>
                        <!-- Media Gambar -->
                        <?php if($content_item['tipe_file'] == 'image/png' || $content_item['tipe_file'] == 'image/jpeg'){ ?>
                        <img class="img-fluid rounded mb-4" src="<?php echo base_url("assets/images/".$content_item['nama_file']);?>" alt="img">
                        <?php } ?>
                        <!-- Media Video -->
                        <?php if($content_item['tipe_file'] == 'video/mp4'){ ?>
                        <div class="embed-responsive embed-responsive-16by9 mb-4">
                            <video class="embed-responsive-item" controls>
                                <source src="<?php echo base_url("assets/videos/".$content_item['nama_file']); ?>" type="<?php echo $content_item['tipe_file']; ?>">
                            </video>
                        </div>
                        <?php } ?>
                        <a href="<?php echo site_url('confide/p/'.$content_item['id']) ?>" class="btn btn-sm btn-warning"><i class="fas fa-comment"></i> Komentar</a>
                    </div>
                </li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-lg-4"></div>
    </div>

</div>
