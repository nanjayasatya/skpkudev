<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-upload"></i></div>
                                Edit Data Pengarsipan
                            </h1>
                            <div class="page-header-subtitle">Mengubah data pengarsipan untuk divalidasi BEM & DPM</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4"></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-5">
                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>
                    <form action="<?= base_url('bsosk/editproposalarchivedetails/' . $this->uri->segment(3));  ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                        <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <?php foreach ($proposalvalidationpending as $pvd) : ?>

                            <div class="row justify-content-center">
                                <?php
                                if ($pvd['status'] == 5) {
                                    $status = '<div class="card card-icon mb-4">
                                        <div class="row no-gutters">
                                            <div class="col-auto card-icon-aside bg-warning">
                                                <i class="text-white-50 fas fa-clock"></i>
                                            </div>
                                            <div class="col">
                                                <div class="card-body py-5">
                                                    <h5 class="card-title" style="color:orange"><strong>Menunggu Validasi BEM</strong></h5>
                                                    <p class="card-text">BEM sedang melakukan pemeriksaan berkas arsip.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    $button = 'Edit Detail';
                                    $rejection = '';
                                    $alasan = '';
                                    $disabled = '';
                                } else {
                                    if ($pvd['status'] == 7) {
                                        $status = '<div class="card card-icon mb-4">
                                            <div class="row no-gutters">
                                                <div class="col-auto card-icon-aside bg-danger">
                                                    <i class="text-white-50 fas fa-times"></i>
                                                </div>
                                                <div class="col">
                                                    <div class="card-body py-5">
                                                        <h5 class="card-title" style="color:red"><strong>Validasi Ditolak!</strong></h5>
                                                        <p class="card-text">Dimohon periksa kembali data yang dimasukkan dan validasi kembali.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                        $button = 'Validasi Ulang';
                                        $rj = $pvd['rejection_reason'];
                                        $alasan = '<div class="card bg-danger text-white mb-3">
                                        <div class="card-header text-white"><strong style="h4">Alasan Penolakan</strong></div>
                                        <div class="card-body">
                                        <input type="text" class="form-control text-center" id="alasan" alasan="alasan"  placeholder="" value="' . $rj . '" readonly>
                                        </div>
                                        
                                    </div>';
                                        $disabled = '';
                                    } else {
                                        if ($pvd['status'] == 6) {
                                            $status = '<div class="card card-icon mb-4">
                                                <div class="row no-gutters">
                                                    <div class="col-auto card-icon-aside bg-warning">
                                                        <i class="text-white-50 fas fa-clock"></i>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card-body py-5">
                                                            <h5 class="card-title" style="color:orange"><strong>Menunggu Validasi DPM</strong></h5>
                                                            <p class="card-text">DPM sedang melakukan pemeriksaan berkas arsip.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>';
                                            $button = 'Edit Detail';
                                            $rejection = '';
                                            $alasan = '';
                                            $disabled = 'disabled';
                                        }
                                    }
                                }

                                ?>
                                <div class="col-lg-6 text-center">
                                    <?= $status ?>
                                    <?= $alasan ?>
                                </div>
                                <div class="form-group col-lg-7 text-center mt-3">
                                    <label for="name" class="font-weight-700">Nama Kegiatan</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= $pvd['name']; ?>" readonly>
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-lg-7 text-center mt-3">
                                    <label for="name" class="font-weight-700">Tahun Pelaksanaan</label>
                                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="" value="<?= $pvd['tahun']; ?>" readonly>
                                    <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-lg-7 text-center mt-3">
                                    <label for="drive_link" class="font-weight-700">Berkas Pengajuan</label>
                                    <input type="text" class="form-control" id="drive_link" name="drive_link" placeholder="Link Google Drive" value="<?= $pvd['arsip_link'] ?>" <?= $disabled ?>>
                                    <?= form_error('drive_link', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <p class="mt-1">Perhatikan pedoman mengenai Alur pengajuan kegiatan oleh DPM.</p>
                            </div>
                            <div class="text-center mt-2">
                                <div class="row">
                                    <div class="col-lg">
                                        <a href="<?= base_url('bsosk/daftarvalidasiproposal'); ?>" type="button" class="btn btn-dark btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-left"></i>
                                            </span>
                                            <span class="text" style="width:150px">Kembali</span>
                                        </a>

                                        <button type="button" data-toggle="modal" data-target="#areyousureModal" class="btn btn-success btn-icon-split" <?= $disabled ?>>
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text" style="width:150px"><?= $button ?></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>
    </main>

    <!-- MODAL -->

    <div class="modal fade" id="areyousureModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousureModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areyousureModalLabel">Validasi Data Kegiatan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Apakah data yang dimasukkan sudah benar ?</div>
                <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
            </div>
        </div>
    </div>