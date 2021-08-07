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
                            <div class="page-header-subtitle">Portal SKP-KU BEM FK UWKS</div>
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
                                        <?php foreach ($userfulldata as $us) : ?>

                                        <?php endforeach; ?>
                                        <h1 class="text-primary">Selamat Datang <?= $us['name']; ?></h1>
                                        <p class="text-gray-700 mb-0">Pastikan <a href="<?= base_url('user/profile') ?>">profil</a> sudah benar ya!</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="<?= base_url('assets/img/res/main.svg'); ?>" style="max-width: 12rem;" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php foreach ($statskpbpending as $skpbp) : ?>
                <?php foreach ($statskpbrejected as $skpbr) : ?>
                    <?php foreach ($statskpbaccepted as $skpba) : ?>
                        <div class="row">
                            <div class="col-lg-6 col-xl-4 mb-4">
                                <div class="card bg-warning text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 small">SKP B dalam validasi</div>
                                                <div class="text-lg fw-bold"><?= $skpbp['COUNT(id)']; ?></div>
                                            </div>
                                            <i class="text-white-50 fas fa-clock fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="<?= base_url('user/daftarvalidasi'); ?>">Lihat</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 mb-4">
                                <div class="card bg-danger text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 small">SKP B validasi ditolak</div>
                                                <div class="text-lg fw-bold"><?= $skpbr['COUNT(id)']; ?></div>
                                            </div>
                                            <i class="text-white-50 fas fa-times fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="<?= base_url('user/daftarvalidasi'); ?>">Lihat</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-4 mb-4">
                                <div class="card bg-success text-white h-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="me-3">
                                                <div class="text-white-75 small">SKP B tervalidasi</div>
                                                <div class="text-lg fw-bold"><?= $skpba['COUNT(id)']; ?></div>
                                            </div>
                                            <i class="text-white-50 fas fa-check fa-3x"></i>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between small">
                                        <a class="text-white stretched-link" href="<?= base_url('user/skpdatabase'); ?>">Lihat</a>
                                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
    </main>