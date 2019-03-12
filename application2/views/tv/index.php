<div class="container my-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="jumbotron jumbotron-fluid rounded-lg bg-color4">
                <div class="container">
                    <h1 class="display-4">Iklan 1</h1>
                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its
                        parent.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="jumbotron jumbotron-fluid rounded-lg bg-color4">
                <div class="container">
                    <h1 class="display-4">Iklan 2</h1>
                    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its
                        parent.</p>
                </div>
            </div>
        </div>
    </div>
    <h5 class="mb-3">Video Terbaru</h5>
    <div class="row">
        <?php foreach($content as $content_item){ ?>
        <div class="col-lg-3">
            <img class="img-fluid rounded-lg mb-3" src="<?php echo base_url('assets/content/'.$content_item['thumbnail_file']) ?>" alt="">
            <h6 class="mb-3"><?php echo $content_item['title'] ?></h6>
            <div class="media">
                <img src="<?php echo base_url('assets/images/avatar/'.$content_item['nama_avatar']) ?>" class="mr-3" alt="..." style="width:40px;">
                <div class="media-body">
                    <div class="small font-weight-bold text-capitalize"><?php echo $content_item['full_name'] ?></div>
                    <div class="small">0 Views - <?php echo date("j F Y", strtotime($content_item['created_at'])); ?></div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>