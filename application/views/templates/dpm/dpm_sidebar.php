<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav-menu-heading">STAFF DPM</div>
                    <a class="nav-link" href="<?= base_url('dpm'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="<?= base_url('dpm/validasiproposal'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-check"></i></div>
                        Validasi Proposal
                    </a>
                    <a class="nav-link" href="<?= base_url('dpm/validasisertif'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-check"></i></div>
                        Validasi Sertifikat
                    </a>
                    <a class="nav-link" href="#">
                        <div class="nav-link-icon"><i class="fas fa-newspaper"></i></div>
                        Berita
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