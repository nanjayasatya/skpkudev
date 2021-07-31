<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav-menu-heading">STAFF BEM</div>
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-home"></i></div>
                        Homepage
                    </a>
                    <!-- <a class="nav-link" href="<?= base_url('admin/userdatabase'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-user"></i></div>
                        User Database
                    </a> -->
                    <!--<a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i class="fas fa-user"></i></div>
                        User Database
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link" href="<?= base_url('admin/userdatabase'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-user"></i></div>
                                User Database (Mahasiswa)
                            </a>
                            <a class="nav-link" href="<?= base_url('admin/userdatabasebsosk'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-user"></i></div>
                                User Database (BSO)
                            </a>
                        </nav>
                    </div> -->
                    <a class="nav-link" href="<?= base_url('admin/userdatabase'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-user"></i></div>
                        User Database
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/bemstatus'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-sitemap"></i></div>
                        BEM Status
                    </a>
                    <a class="nav-link" href="<?= base_url('admin/webmaintenance'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-cogs"></i></div>
                        Web Maintentance
                    </a>

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