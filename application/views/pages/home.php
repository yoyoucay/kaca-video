<style>
    #moodvideo{
        width: 36.7vw; /* Could also use width: 100%; */
        height: 40vh;
        object-fit: cover;
        left: 0px;
        top: 0px;
        z-index: -1;
    }
</style>

<div class="container my-5">
    <div class="row">
        <div class="col-lg-2 mb-5">
            <div class="card sticky-top" style="top:50px;">
                <div class="card-header">
                    Category
                </div>
                <div class="card-body">
                    <button type="button" class="btn active">All</button>
                    <button type="button" class="btn btn-secondary">Status</button>
                    <button type="button" class="btn btn-success">Articles</button>
                    <button type="button" class="btn btn-info">Videos</button>
                    <button type="button" class="btn btn-warning">Music</button>
                    <button type="button" class="btn btn-danger">Shop</button>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <?php foreach ($content as $content_item) { ?>
            <div class="card mb-5">
                <div class="card-header">
                    <img src="<?php if($content_item['nama_avatar'] == true){ echo base_url("assets/images/avatar/".$content_item['nama_avatar']); }else{ echo base_url("assets/img/user.png"); } ?>" class="rounded-circle img-fluid mr-3" alt="" style="max-width:30px;">
                    <a class="text-capitalize" href="<?php echo site_url('u/'.$content_item['username']) ?>"><?php echo $content_item['full_name']; ?></a><span class="small text-secondary"> - <?php echo date("j M Y", strtotime($content_item['created_at'])); ?></span>
                    <?php if ($_SESSION['user_id'] == $content_item['user_id']) { ?>
                    <button type="button" class="btn bmd-btn-icon float-right" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <?php } ?>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="<?php echo site_url('edit/'.$content_item['username'].'/'.$content_item['id']); ?>" class="dropdown-item"><i class="material-icons mr-3">edit</i> Edit</a>
                        <a href="<?php echo site_url('delete/'.$content_item['id']); ?>" class="dropdown-item"><i class="material-icons mr-3">delete</i>Delete</a>
                    </div>
                </div>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <?php
                    if(
                        $content_item['tipe_file'] == 'image/png' ||
                        $content_item['tipe_file'] == 'image/jpeg'
                    ){
                        ?><img class="img-fluid rounded mb-2" src="<?php echo base_url("assets/images/".$content_item['nama_file']); ?>" alt="img" style="object-fit: cover;object-position: 100% 0;width: 500px;height: 500px;"><?php
                    }else if(
                        $content_item['tipe_file'] == 'video/mp4'
                    ){
                        ?>
                        <video id="moodvideo" class="mb-2 rounded" width="595" controls>
                            <source src="<?php echo base_url("assets/videos/".$content_item['nama_file']); ?>" type="<?php echo $content_item['tipe_file']; ?>">
                        </video>
                        <?php
                    }
                    ?>
                    <p class="card-text"><?php echo $content_item['deskripsi']; ?></p>
                    <button type="button" class="btn btn-secondary d-inline-flex justify-content-center align-content-between">
                        <i class="material-icons mr-1">thumb_up</i> <span>1000</span>
                    </button>
                    <a href="<?php echo site_url('details/'.$content_item['id']) ?>#kolom-komentar" class="btn btn-secondary d-inline-flex justify-content-center align-content-between">
                        <i class="material-icons mr-1">mode_comment</i> <span>2000</span>
                    </a>
                    <button type="button" class="btn btn-secondary d-inline-flex justify-content-center align-content-between">
                        <i class="material-icons mr-1">share</i> <span>500</span>
                    </button>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col-lg-4 d-none d-xl-block d-lg-block">
            <div class="card sticky-top" style="top:50px;">
                <div class="card-header">
                    Popular Post On Kaca
                </div>
                <div class="card-body">
                    <ul class="list-group bmd-list-group-sm">
                        <a class="list-group-item">
                            <div class="bmd-list-group-col">
                                <p class="list-group-item-heading">List group item heading</p>
                                <p class="list-group-item-text">Some text</p>
                            </div>
                        </a>
                        <a class="list-group-item">
                            <div class="bmd-list-group-col">
                                <p class="list-group-item-heading">List group item heading</p>
                                <p class="list-group-item-text">Some text</p>
                            </div>
                        </a>
                        <a class="list-group-item">
                            <div class="bmd-list-group-col">
                                <p class="list-group-item-heading">List group item heading</p>
                                <p class="list-group-item-text">Some text</p>
                            </div>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
