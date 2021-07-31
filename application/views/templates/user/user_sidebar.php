<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav-menu-heading">Mahasiswa</div>
                    <a class="nav-link" href="<?= base_url('user'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-home"></i></div>
                        Homepage
                    </a>
                    <!-- <a class="nav-link" href="<?= base_url('user/profile'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-user"></i></div>
                        Mahasiswa
                    </a> -->
                    <a class="nav-link" href="<?= base_url('user/skpdatabase'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-database"></i></div>
                        SKP Database
                    </a>

                    <a class="nav-link" href="<?= base_url('user/daftarvalidasi'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-check"></i></div>
                        Validasi SKP B
                    </a>
                    <!--<a class="nav-link" href="<?= base_url('user/inputskp'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-upload"></i></div>
                        Input Data SKP B
                    </a> -->
                    <!--<a class="nav-link" href="<?= base_url('user/inputskpmanual'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-upload"></i></div>
                        Input Data SKP B Manual
                    </a> -->
                    <!--<a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i class="fas fa-wrench"></i></div>
                        SKP Tools
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a> -->
                    <!--<div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link" href="<?= base_url('user/skpdatabase'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-database"></i></div>
                                SKP Database
                            </a>
                            <a class="nav-link" href="<?= base_url('user/daftarvalidasi'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-list"></i></div>
                                Status Validasi SKP B
                            </a>
                            <a class="nav-link" href="<?= base_url('user/inputskp'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-upload"></i></div>
                                Input Data SKP B
                            </a>
                            <a class="nav-link" href="<?= base_url('user/inputskpmanual'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-upload"></i></div>
                                Input Data SKP B Manual
                            </a>
                        </nav>
                    </div> -->
                    <!--<a class="nav-link" href="#">
                        <div class="nav-link-icon"><i class="fas fa-newspaper"></i></div>
                        Berita
                    </a> -->


                </div>
            </div>
            <div class="sidenav-footer">
                <div class="sidenav-footer-content">
                    <div class="sidenav-footer-subtitle">Terlogin dengan user:</div>
                    <div class="sidenav-footer-title"><?= $user['name']; ?></div>
                </div>
            </div>
        </nav>
    </div>