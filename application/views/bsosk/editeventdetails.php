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
                                    <div class="page-header-icon"><i class="fas fa-upload"></i></div>
                                    Edit Event Details
                                </h1>
                                <div class="page-header-subtitle">Edit data Kegiatan sebelum di validasi oleh BEM</div>
                            </div>
                            <div class="col-12 col-xl-auto mt-4">Pastikan sekali lagi data yang diinput sudah benar!</div>
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
                                <?php
                                if ($ed['status'] == 0) {
                                    $status = '<div class="card card-icon mb-4">
                                        <div class="row no-gutters">
                                            <div class="col-auto card-icon-aside bg-warning">
                                                <i class="text-white-50 fas fa-clock"></i>
                                            </div>
                                            <div class="col">
                                                <div class="card-body py-5">
                                                    <h5 class="card-title" style="color:orange"><strong>Menunggu Validasi.</strong></h5>
                                                    <p class="card-text">Sembari menunggu validasi, mohon diperiksa kembali data yang dimasukkan.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                    $button = 'Edit Detail';
                                    $rejection = '';
                                    $alasan = '';
                                } else {
                                    if ($ed['status'] == 2) {
                                        $status = '<div class="card card-icon mb-4">
                                        <div class="row no-gutters">
                                            <div class="col-auto card-icon-aside bg-danger">
                                                <i class="text-white-50 fas fa-times"></i>
                                            </div>
                                            <div class="col">
                                                <div class="card-body py-5">
                                                    <h5 class="card-title" style="color:red"><strong>Validasi Ditolak</strong></h5>
                                                    <p class="card-text">Dimohon periksa kembali data yang dimasukkan dan validasi kembali.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                        $button = 'Validasi Ulang';
                                        $rj = $ed['rejection_reason'];
                                        $alasan = '<div class="card bg-danger text-white mb-3">
                                        <div class="card-header text-white"><strong style="h4">Alasan Penolakan</strong></div>
                                        <div class="card-body">
                                        <input type="text" class="form-control text-center" id="alasan" alasan="alasan"  placeholder="" value="' . $rj . '" readonly>
                                        </div>
                                        
                                    </div>';
                                    }
                                }
                                ?>

                                <?= $status ?>
                                <?= $alasan ?>
                                <script type="text/javascript">
                                    var rejection_reason = document.getElementById("alasan").value;
                                    var replaced = decodeURI(rejection_reason);
                                    console.log(replaced);
                                    document.getElementById("alasan").value = replaced;
                                </script>

                                <!-- <?php echo form_open_multipart('bsosk/editeventdetails/' . $this->uri->segment(3)); ?> -->
                                <form action="<?= base_url('bsosk/editeventdetails/' . $this->uri->segment(3)); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
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
                                        <label for="name" class="font-weight-700">Bukti LPJK</label>
                                        <input type="text" class="form-control" id="lpj_proof" name="lpj_proof" placeholder="Link Google Drive" value="<?= $ed['lpj_proof']; ?>">
                                        <?= form_error('lpj_proof', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group text-center mt-3">
                                        <label for="name" class="font-weight-700">Bukti LHK</label>
                                        <input type="text" class="form-control" id="lhk_proof" name="lhk_proof" placeholder="Link Google Drive" value="<?= $ed['lhk_proof']; ?>">
                                        <?= form_error('lhk_proof', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group text-center mt-3">
                                        <label for="name" class="font-weight-700">Contoh Sertifikat</label>
                                        <input type="text" class="form-control" id="sertif_proof" name="sertif_proof" placeholder="Link Google Drive" value="<?= $ed['sertif_proof']; ?>">
                                        <?= form_error('sertif_proof', '<small class="text-danger pl-3">', '</small>'); ?>
                                        <p class="mt-1">Perhatikan pedoman mengenai <strong>Bukti LPJK, LHK & Contoh Sertifikat</strong> untuk pengajuan input ke database.</p>
                                    </div>









                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <a href="<?= base_url('bsosk/daftarvalidasi'); ?>" class="btn btn-dark btn-icon-split mt-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text" style="width:180px">Kembali</span>
                                    </a>


                                    <a href="#" type="button row" data-toggle="modal" data-target="#areyousureDeleteValidationModal" class="btn btn-danger btn-icon-split mt-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text" style="width:180px">Batal Ajukan Validasi</span>
                                    </a>

                                    <button type="button" data-toggle="modal" data-target="#areyousurevalidateModal" class="btn btn-success btn-icon-split mt-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text" style="width:180px"><?= $button ?></span>
                                    </button>
                                </div>
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
                    <h5 class="modal-title" id="areyousureModalLabel">Validasi Data Kegiatan</h5>
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
                <h5 class="modal-title" id="areyousurevalidateModalLabel">Edit Event Details</h5>
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


<!-- JQUERY AJAX LIBRARY + MOMENT JS -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> -->
<!-- DATE TIME PICKER COMPONENT -->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" /> -->