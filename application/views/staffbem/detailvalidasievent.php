<script type="text/javascript" src="<?= base_url('vendor/sb/dist/js/bootstrap-datepicker.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('vendor/sb/dist/css/datepicker.css') ?>" />
<div id="layoutSidenav_content">
    <main>
        <?php foreach ($eventdatavalidation as $ed) : ?>
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i class="fas fa-file-alt"></i></div>
                                    Detail Validasi Kegiatan
                                </h1>
                                <div class="page-header-subtitle">Detail Validasi data Kegiatan yang diajukan oleh BSO/SK</div>
                            </div>
                            <!-- <div class="col-12 col-xl-auto mt-4">Pastikan sekali lagi data yang diinput sudah benar!</div> -->
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main page content-->
            <div class="container mt-n10 mb-5">

                <div class="card">
                    <div class="card-body mb-3">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">

                                <!--<?php echo form_open_multipart('staffbem/detailvalidasievent/' . $this->uri->segment(3)); ?> -->
                                <form action="<?= base_url('staffbem/detailvalidasievent/' . $this->uri->segment(3)); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                                    <div class="form-group text-center mt-3">
                                        <label for="name" class="font-weight-700">Nama Kegiatan</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= $ed['name']; ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group text-center mt-3">
                                        <label for="name" class="font-weight-700">Tahun Pelaksanaan</label>
                                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="" value="<?= $ed['tahun']; ?>">
                                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group text-center mt-3">
                                        <label for="name" class="font-weight-700">Pelaksana</label>
                                        <input type="text" class="form-control" id="pelaksana" name="pelaksana" placeholder="" value="<?= $ed['pelaksana']; ?>" readonly>
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg 7">

                                            <a target="_blank" href="<?= $ed['lpj_proof'] ?>" class="mt-2 btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-file-alt"></i>
                                                </span>
                                                <span class="text" style="width:100px">Bukti LPJK</span>
                                            </a>


                                            <a target="_blank" href="<?= $ed['lhk_proof'] ?>" class="mt-2 btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-file-alt"></i>
                                                </span>
                                                <span class="text" style="width:100px">Bukti LHK</span>
                                            </a>


                                            <a target="_blank" href="<?= $ed['sertif_proof'] ?>" class="mt-2 btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-file-alt"></i>
                                                </span>
                                                <span class="text" style="width:150px">Contoh Sertifikat</span>
                                            </a>
                                            <p class="mt-3">Perhatikan <strong>Bukti LPJK, LHK & Contoh Sertifikat</strong> sebelum menerima validasi.</p>

                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-lg">
                                <a href="<?= base_url('staffbem/validasievent'); ?>" class="btn btn-dark btn-icon-split mt-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-left"></i>
                                    </span>
                                    <span class="text" style="width:100px">Kembali</span>
                                </a>

                                <a href="#" type="button row" data-toggle="modal" data-target="#areyousurerejectvalidateModal" class="btn btn-danger btn-icon-split mt-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text" style="width:150px">Validasi Ditolak</span>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#areyousurevalidateModal" class="btn btn-success btn-icon-split mt-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text" style="width:150px">Validasi Diterima</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>

    <!-- MODAL -->
    <div class="modal fade" id="areyousureModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousureModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areyousureModalLabel">Menerima Validasi Data Kegiatan</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Apakah data yang dimasukkan sudah benar ?</div>
                <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- MODAL -->

<div class="modal fade" id="areyousurevalidateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousurevalidateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="areyousurevalidateModalLabel">Menerima Validasi Data Kegiatan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">Apakah data yang dimasukkan sudah benar?</div>
            <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
        </div>
    </div>
</div>

<div class="modal fade" id="areyousureDeleteValidationModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousureDeleteValidationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="areyousureDeleteValidationModalLabel">Batal Ajukan Validasi Data Kegiatan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">Apakah yakin membatalkan validasi data kegiatan?

            </div>
            <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><a href="<?= base_url('bsosk/deletevalidation/') . $this->uri->segment(3); ?>" class="btn btn-danger">Lanjutkan</a></div>
        </div>
    </div>
</div>

<div class="modal fade" id="areyousurerejectvalidateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousurerejectvalidateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="areyousurerejectvalidateModalLabel">Penolakan Validasi Data Kegiatan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body text-center">
                <p>Apakah yakin ingin menolak validasi Data Kegiatan ini?</p>
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
        window.location.href = "<?= base_url('staffbem/rejectvalidasievent/') . $this->uri->segment(3) . '/' ?>" + rejection_reason;

    }
</script>


<!-- JQUERY AJAX LIBRARY + MOMENT JS -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> -->
<!-- DATE TIME PICKER COMPONENT -->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" /> -->