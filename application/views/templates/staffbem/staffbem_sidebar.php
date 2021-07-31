<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">
                    <div class="sidenav-menu-heading">STAFF BEM</div>
                    <a class="nav-link" href="<?= base_url('staffbem'); ?>">
                        <div class="nav-link-icon"><i class="fas fa-home"></i></div>
                        Homepage
                    </a>
                    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseSKP" aria-expanded="false" aria-controls="collapseSKP">
                        <div class="nav-link-icon"><i class="fas fa-wrench"></i></div>
                        Pendataan SKP
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseSKP" data-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link" href="<?= base_url('staffbem/validasiskp'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-check"></i></div>
                                Validasi SKP B
                            </a>
                            <a class="nav-link" href="<?= base_url('staffbem/skpadatabase'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-database"></i></div>
                                Database SKP A
                            </a>
                            <a class="nav-link" href="<?= base_url('staffbem/skpbdatabase'); ?>">
                                <div class="nav-link-icon"><i class="fas fa-database"></i></div>
                                Database SKP B
                            </a>
                        </nav>
                    </div>
                    <!--<div class="nav accordion" id="KegiatanCollapse">
                        <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseKegiatan" aria-expanded="false" aria-controls="collapseKegiatan">
                            <div class="nav-link-icon"><i class="fas fa-wrench"></i></div>
                            Pendataan Kegiatan
                            <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseKegiatan" data-parent="#KegiatanCollapse">
                            <nav class="sidenav-menu-nested nav accordion" id="KegiatanCollapsePages">
                                <a class="nav-link" href="<?= base_url('staffbem/validasiproposal'); ?>">
                                    <div class="nav-link-icon"><i class="fas fa-check"></i></div>
                                    Validasi Proposal
                                </a>
                                <a class="nav-link" href="<?= base_url('staffbem/validasievent'); ?>">
                                    <div class="nav-link-icon"><i class="fas fa-check"></i></div>
                                    Validasi Kegiatan
                                </a>
                                <a class="nav-link" href="<?= base_url('staffbem/validasisertif'); ?>">
                                    <div class="nav-link-icon"><i class="fas fa-check"></i></div>
                                    Validasi Sertifikat
                                </a> 
                            </nav>
                        </div>
                    </div>-->
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