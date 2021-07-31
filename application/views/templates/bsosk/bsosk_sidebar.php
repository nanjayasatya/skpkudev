<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav-menu-heading">BSO/SK</div>
                    <a class="nav-link" href="<?= base_url('bsosk'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <!-- DISABLED SEMENTARA -->
                    <!--<a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseProposal" aria-expanded="false" aria-controls="collapseProposal">
                        <div class="nav-link-icon"><i class="fas fa-wrench"></i></div>
                        Pengajuan Kegiatan
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProposal" data-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link" href="<?= base_url('bsosk/inputproposal'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-upload"></i></div>
                                Validasi Data Proposal
                            </a>
                            <a class="nav-link" href="<?= base_url('bsosk/daftarvalidasiproposal'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-list"></i></div>
                                Status Validasi Proposal
                            </a>
                            <a class="nav-link" href="<?= base_url('bsosk/inputsertif'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-upload"></i></div>
                                Validasi Data Sertifikat
                            </a>
                            <a class="nav-link" href="<?= base_url('bsosk/daftarvalidasisertif'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-list"></i></div>
                                Status Validasi Sertifikat
                            </a>
                        </nav>
                    </div> -->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i class="fas fa-wrench"></i></div>
                        Pendataan Kegiatan
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link" href="<?= base_url('bsosk/inputeventdata'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-upload"></i></div>
                                Validasi Data Kegiatan
                            </a>
                            <a class="nav-link" href="<?= base_url('bsosk/daftarvalidasi'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-list"></i></div>
                                Status Validasi Kegiatan
                            </a>
                        </nav>
                    </div>




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