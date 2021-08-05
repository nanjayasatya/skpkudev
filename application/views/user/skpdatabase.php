<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
<?php endif; ?>
<?php foreach ($sumskpdataA as $sdA) : ?>
<?php endforeach; ?>
<?php foreach ($sumskpdataB as $sdB) : ?>
<?php endforeach; ?>
<?php foreach ($skp_req as $skpreq) : ?>
<?php endforeach; ?>

<?php
if (empty($sdB)) {
    $sdB = "0";
}
if (empty($sdA)) {
    $sdA = "0";
}
?>
<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-fw fa-database"></i></div>
                                SKP Database
                            </h1>
                            <div class="page-header-subtitle">Informasi pendataan SKP Mahasiswa</div>
                        </div>
                        <!--<div class="col-12 col-xl-auto mt-4">Jika ada kesalahan data mohon segera menghubungi INTERNAL</div> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <?= $this->session->flashdata('printgagal'); ?>
            <!-- TABEL SKP A -->
            <div class="card card-collapsable mb-3">
                <a class="card-header h3" href="#collapseCardSKPA" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardSKPA">Data SKP A
                    <div class="card-collapsable-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </a>
                <div class="collapsed" id="collapseCardSKPA">
                    <div class="card-body">
                        <table id="userskpa" class="table table-bordered table-hover dataTable" style=" width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <!--<th>Tipe SKP</th> -->
                                    <th>Keterangan</th>
                                    <th>Tahun</th>
                                    <th>Posisi</th>
                                    <th>Bobot</th>
                                    <!-- <th>Active</th> -->
                                    <!--<th>Action</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($skpuserdataA as $sud) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <!-- <td><?= $sud['tipe']; ?></td> -->
                                        <td><?= $sud['event']; ?></td>
                                        <td><?= $sud['tahun']; ?></td>
                                        <td><?= $sud['posisi']; ?></td>
                                        <td><?= $sud['bobot']; ?></td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p class="text-center mt-3" style="color:red">*Jika ada kesalahan data mohon segera menghubungi Departemen INTERNAL BEM FK UWKS</p>

                    </div>
                </div>
            </div>
            <!-- TABEL SKP B -->
            <div class="card card-collapsable mb-3">
                <a class="card-header h3" href="#collapseCardSKPB" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardSKPB">Data SKP B
                    <div class="card-collapsable-arrow">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </a>
                <div class="collapsed" id="collapseCardSKPB">
                    <div class="card-body">
                        <table id="userskpb" class="table table-bordered table-hover dataTable" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <!--<th>Tipe SKP</th> -->
                                    <th>Keterangan</th>
                                    <th>Tahun</th>
                                    <th>Posisi</th>
                                    <th>Bobot</th>
                                    <!-- <th>Active</th> -->
                                    <!--<th>Action</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($skpuserdataB as $sud) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <!-- <td><?= $sud['tipe']; ?></td> -->
                                        <td><?= $sud['event']; ?></td>
                                        <td><?= $sud['tahun']; ?></td>
                                        <td><?= $sud['posisi']; ?></td>
                                        <td><?= $sud['bobot']; ?></td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <p class="text-center mt-3" style="color:red">*Jika ada kesalahan data mohon segera menghubungi Departemen INTERNAL BEM FK UWKS</p>
                    </div>
                </div>
            </div>

            <!-- TOTAL POIN SKP -->
            <div class="justify-content-center">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-success h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="small font-weight-bold text-success mb-1">Total Poin SKP A</div>
                                        <div class="h5"><?= $sdA; ?></div>

                                    </div>
                                    <div class="ml-2"><i class="fas fa-check fa-2x text-gray-200"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-success h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <div class="small font-weight-bold text-success mb-1">Total Poin SKP B</div>

                                        <div class="h5"><?= $sdB; ?></div>

                                    </div>
                                    <div class="ml-2"><i class="fas fa-check fa-2x text-gray-200"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $skp_min = $skp_req['skp_min'];
                    if ($sdB + $sdA < $skp_min) {
                        $card_info = 'card bg-danger border-0';
                    } else {
                        $card_info = 'card bg-success border-0';
                    }
                    ?>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="<?= $card_info ?>">
                            <div class="card-body">
                                <div class="text-white">Total Poin Seluruh SKP</div>
                                <div class="mb-2">
                                    <span class="display-5 text-white"><?= $sdB + $sdA; ?>/<?= $skp_req['skp_min']; ?></span>

                                </div>

                                <!--<div class="progress bg-white-25 rounded-pill" style="height: 0.5rem;">
                                    <div class="progress-bar bg-white w-100 rounded-pill" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <a target="_blank" href="<?= base_url('user/skpexport') ?> " class="btn btn-lg btn-success btn-icon-split">
                    <span class="icon text-white-10">
                        <i class="fas fa-print"></i>
                    </span>
                    <span class="text" style="width:220px">Print Total Poin SKP</span>
                </a>
            </div>
        </div>
    </main>