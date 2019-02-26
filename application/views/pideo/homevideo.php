<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 mh-100" style="background: #f5f5f5;">
            <ul class="list-group small text-uppercase font-weight-bold sticky-top">
                <a href="#" class="list-group-item">
                    <i class="material-icons">videocam</i>
                    Videos
                </a>
                <a href="#" class="list-group-item">
                    <i class="material-icons">movie</i>
                    Movies & Shows
                </a>
                <a href="#" class="list-group-item">
                    <i class="material-icons">star</i>
                    Premium Contents
                </a>
                <a href="#" class="list-group-item">
                    <i class="material-icons">show_chart</i>
                    Trending
                </a>
                <hr>
                <a href="#" class="list-group-item">
                    <i class="material-icons">people</i>
                    Following
                </a>
                <a href="#" class="list-group-item">
                    <i class="material-icons">video_library</i>
                    Library
                </a>
                <hr>
                <a href="#" class="list-group-item">
                    <i class="material-icons">settings</i>
                    Settings
                </a>
                <a href="#" class="list-group-item">
                    <i class="material-icons">help</i>
                    Help & Report
                </a>
            </ul>
        </div>
        <div class="col-lg-6">
            <div class="card my-3 bg-transparent" style="box-shadow: none;">
                <div class="card-header font-weight-bold">
                    Recomended
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($content as $content_item): ?>
                        <div class="col-lg-4 mb-3">
                            <img src="<?php echo base_url("assets/content/".$content_item['thumbnail_file']); ?>" class="img-fluid" style="object-fit: cover;object-position: 100% 0;width: 500px;height: 120px;" alt="">
                            <span class="text-secondary small text-capitalize"><?php echo $content_item['username']; ?></span><br>
                            <a href="<?= site_url('s/video/'. $content_item['id']) ?>" class="small font-weight-bold text-capitalize"><?php echo $content_item['title']; ?></a><br>
                            <span class="text-secondary small">0 views - <?php echo $content_item['created_at']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="card my-3 bg-transparent" style="box-shadow: none;">
                <div class="card-header font-weight-bold">
                    Breaking news
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($content as $content_item): ?>
                        <div class="col-lg-4 mb-3">
                            <img src="<?php echo base_url("assets/content/".$content_item['thumbnail_file']); ?>" class="img-fluid" style="object-fit: cover;object-position: 100% 0;width: 500px;height: 120px;" alt="">
                            <span class="text-secondary small text-capitalize"><?php echo $content_item['username']; ?></span><br>
                            <span class="small font-weight-bold text-capitalize"><?php echo $content_item['title']; ?></span><br>
                            <span class="text-secondary small">0 views - <?php echo $content_item['created_at']; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mh-100">
            <div class="sticky-top" style="top:20px;">
                <h6 class="my-3 font-weight-bold">
                    Iklan
                    <span class="small text-secondary">-</span>
                    <span class="text-secondary small font-weight-bold">Show More</span>
                </h6>
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
        </div>
    </div>
</div>