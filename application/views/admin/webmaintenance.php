<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-cogs"></i></div>
                                Web Maintenance
                            </h1>

                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="row">
                <div class="col-xl-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-xxl-12">
                                    <div class="text-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                        <?php foreach ($web_data as $wd) : ?>
                                            <?php
                                            if ($wd['up_status'] == 1) {
                                                $web_status = 'Website Aktif!';
                                                $class_text = 'text-primary text-xl';
                                                $info_text = 'Website dapat diakses oleh semua User.';
                                                $icon_style = 'fas fa-check fa-7x';
                                                $icon_color = 'color:#06794f';
                                                $button_name = 'Kill Switch';
                                                $button_icon = 'fas fa-skull';
                                                $button_class = 'btn btn-lg btn-danger btn-icon-split';
                                            } else {
                                                $web_status = 'Website Nonaktif!';
                                                $class_text = 'text-danger text-xl';
                                                $info_text = 'Website hanya dapat diakses oleh Administrator.';
                                                $icon_style = 'fas fa-times fa-7x';
                                                $icon_color = 'color:#d73f30';
                                                $button_name = 'On Switch';
                                                $button_icon = 'fas fa-power-off';
                                                $button_class = 'btn btn-lg btn-success btn-icon-split';
                                            }
                                            ?>
                                            <h1 class="<?= $class_text ?>"><?= $web_status ?></h1>
                                            <p class="text-gray-700 mb-0"><?= $info_text ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="col-xl-1 col-xxl-12 text-center nav-link-icon"><i class="<?= $icon_style ?>" style="<?= $icon_color ?>"></i></div>
                                <!-- <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="<?= base_url('vendor/sb/dist/assets/img/freepik/at-work-pana.svg'); ?>" style="max-width: 26rem;" /></div>-->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-12 mb-4">
                    <div class="text-center mt-3 mb-5">
                        <button href="#" data-toggle="modal" data-target="#areyousureAccess" class="<?= $button_class ?>">
                            <span class="icon text-white-10">
                                <i class="<?= $button_icon ?>"></i>
                            </span>
                            <span class="text" style="width:150px"><?= $button_name ?></span>
                        </button>
                    </div>
                </div>

    </main>

    <!-- MODAL -->
    <div class="modal fade" id="areyousureAccess" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousureAccessLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areyousureAccessLabel">Web Maintenance</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body text-center">
                    <p>Masukkan password Administrator untuk melanjutkan</p>
                    <form class="user" method="post" action="<?= base_url('admin/webmaintenance'); ?>">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <div class="form-group mt-2">
                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                </div>
                <div class="modal-footer"><button class="btn btn-dark" data-dismiss="modal">Batal</button><button type="submit" class="btn btn-danger">Lanjutkan</button></div>
            </div>
        </div>
    </div>