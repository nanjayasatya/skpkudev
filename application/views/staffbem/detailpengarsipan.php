<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-upload"></i></div>
                                Detail Data Pengarsipan
                            </h1>
                            <div class="page-header-subtitle">Detail Validasi Pengarsipan Proposal Kegiatan yang diajukan oleh BSO/SK</div>
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
                    <form action="<?= base_url('staffbem/detailpengarsipan/' . $this->uri->segment(3));  ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                        <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <?php foreach ($proposalvalidationpending as $pvd) : ?>

                            <div class="row justify-content-center">

                                <div class="col-lg-6 text-center">

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

                            </div>
                            <div class="text-center mt-2">
                                <a target="_blank" href="<?= $pvd['arsip_link'] ?>" class="mt-2 btn btn-success btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-file-alt"></i>
                                    </span>
                                    <span class="text" style="width:200px">Dokumen Pengarsipan</span>
                                </a>
                                <p class="mt-3">Login dengan <strong>Akun Drive BEM</strong> untuk mengakses Drive Berkas.</p>
                                <p class="mt-1"> Perhatikan <strong>Berkas berkas pengajuan</strong> sebelum menerima validasi.</p>
                                <div class="row">
                                    <div class="col-lg">
                                        <a href="<?= base_url('bsosk/daftarvalidasiproposal'); ?>" type="button" class="btn btn-dark btn-icon-split mt-2">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-left"></i>
                                            </span>
                                            <span class="text" style="width:150px">Kembali</span>
                                        </a>
                                        <a href="#" type="button row" data-toggle="modal" data-target="#areyousurerejectvalidateModal" class="btn btn-danger btn-icon-split mt-2">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text" style="width:180px">Validasi Ditolak</span>
                                        </a>
                                        <button type="button" data-toggle="modal" data-target="#areyousureModal" class="btn btn-success btn-icon-split mt-2">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text" style="width:150px">Lanjutkan ke DPM</span>
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

    <div class="modal fade" id="areyousurerejectvalidateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousurerejectvalidateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areyousurerejectvalidateModalLabel">Penolakan Validasi Pengarsipan Proposal Kegiatan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body text-center">
                    <p>Apakah yakin ingin menolak validasi Pengarsipan Proposal kegiatan ini?</p>
                    <div class="form-group mt-2">
                        <label for="rejection_reason">Alasan Penolakan</label>
                        <?php
                        $rejection_reason = $this->input->post('rejection_reason');
                        ?>
                        <input type="text" class="form-control" id="rejection_reason" name="rejection_reason" placeholder="" value="">
                        <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><a onclick="RejectClick(this)" href="#" class="btn btn-danger">Lanjutkan</a></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function RejectClick() {
            var rejection_reason = document.getElementById("rejection_reason").value;
            window.location.href = "<?= base_url('staffbem/rejectvalidasipengarsipan/') . $this->uri->segment(3) . '/' ?>" + rejection_reason;

        }
    </script>