<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-check"></i></div>
                                Validasi Kegiatan
                            </h1>
                            <div class="page-header-subtitle">Menerima atau menolak pengajuan validasi kegiatan BSO/SK</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Pastikan sekali lagi data yang diinput sudah benar!</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <?= $this->session->flashdata('message'); ?>
            <div class="card mb-3">
                <div class="card-header h3"><strong>Daftar Validasi Kegiatan</strong></div>
                <div class="card-body mb-3">
                    <table id="listvalidasi" class="table table-bordered table-hover dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Pelaksana</th>
                                <th>Keterangan</th>
                                <th>Tahun</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($listproposalvalidation as $lv) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $lv['pelaksana']; ?></td>
                                    <td><?= $lv['name']; ?></td>
                                    <td><?= $lv['tahun']; ?></td>
                                    <?php
                                    if ($lv['status'] == 3) {
                                        $vali = '<p style="color:orange">Menunggu Validasi DPM</p>';
                                        $link = base_url('dpm/detailvalidasiproposal/') . $lv['id'];
                                    } else {
                                        if ($lv['status'] == 6) {
                                            $vali = '<p style="color:orange">Menunggu Validasi DPM (Pengarsipan)</p>';
                                            $link = base_url('dpm/detailpengarsipan/') . $lv['id'];
                                        }
                                    }
                                    ?>
                                    <td><?= $vali; ?></td>
                                    <td>
                                        <div class="text-center">
                                            <a href="<?= $link ?>" class="btn btn-purple btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-info-circle"></i>
                                                </span>
                                                <span class="text" style="width:120px">Data Lengkap</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>