<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-color1 text-white" id="sidebar-wrapper">
        <div class="sidebar-heading font-weight-bold">Kaca Curhat</div>
        <div class="list-group list-group-flush text-white">
            <a href="#" class="list-group-item list-group-item-action bg-color1 text-white">
                <span class="fas fa-home mr-3" style="width:24px;height24px;"></span>
                Home
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-color1 text-white">Link 2</a>
            <a href="#" class="list-group-item list-group-item-action bg-color1 text-white">Link 3</a>
            <a href="#" class="list-group-item list-group-item-action bg-color1 text-white">Link 4</a>
            <a href="#" class="list-group-item list-group-item-action bg-color1 text-white">Link 5</a>
            <a href="#" class="list-group-item list-group-item-action bg-color1 text-white">Link 6</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-color2">
            <button class="btn btn-link text-dark" id="menu-toggle"><i class="fas fa-bars"></i></button>
            <a class="navbar-brand ml-2 mb-2" href="#">
                <img src="<?php echo base_url('assets/img/logo-black.png'); ?>" alt="Logo" style="max-height: 20px;">
            </a>
            <a href="<?php echo site_url('confide'); ?>" class="btn btn-link text-dark font-weight-bold">Curhat</a>
            <a href="<?php echo site_url('video'); ?>" class="btn btn-link text-dark font-weight-bold">TV</a>
            <a href="#" class="btn btn-link text-dark font-weight-bold disabled">Jual Beli</a>
            <form class="form-inline my-2 my-lg-0 ml-3">
                <input class="form-control mr-sm-2 border-0" type="search" placeholder="Cari teman" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <?php if($_SESSION['photo'] == 0){?>
                            <img class="rounded" src="<?php echo base_url('assets/img/user.png') ?>" alt="" style="width:30px;">
                            <?php }else{ ?>
                            <img class="rounded" src="<?php echo base_url('assets/images/avatar/'.$_SESSION['photo']) ?>" alt="" style="width:30px;">
                            <?php } ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo site_url('user/'.$_SESSION['username']) ?>">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>