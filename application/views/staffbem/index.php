<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-home"></i></div>
                                Homepage
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
                                        <h1 class="text-primary">Selamat Datang Internal!</h1>
                                        <p class="text-gray-700 mb-0">Setiap hari adalah hari yang baik, tetap semangat dan pantang menyerah!</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="<?= base_url('vendor/sb/dist/assets/img/freepik/at-work-pana.svg'); ?>" style="max-width: 26rem;" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php foreach ($skpvalidationpending as $skpv) : ?>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-3">
                                        <div class="text-white-75 small">Pending Validasi SKP B</div>
                                        <div class="text-lg font-weight-bold"><?= $skpv ?></div>
                                    </div>

                                    <i class="text-white-50 fas fa-check fa-3x"></i>

                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="<?= base_url('staffbem/validasiskp'); ?>">Lihat</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!--<?php foreach ($eventvalidationpending as $ev) : ?>
                    <div class="col-xxl-3 col-lg-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mr-3">
                                        <div class="text-white-75 small">Pending Validasi Kegiatan</div>
                                        <div class="text-lg font-weight-bold"><?= $ev ?></div>
                                    </div>
                                    <i class="text-white-50 fas fa-check fa-3x"></i>
                                </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="<?= base_url('staffbem/validasievent'); ?>">Lihat</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>-->
            </div>
    </main>