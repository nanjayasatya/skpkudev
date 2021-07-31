<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-upload"></i></div>
                                Validasi Data Kegiatan
                            </h1>
                            <div class="page-header-subtitle">Input Data Kegiatan untuk di validasi dan masuk database BEM</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Hanya untuk kegiatan yang sudah menyelesaikan LPJK dan LHK</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10 mb-5">
            <div class="card">
                <div class="card-body mb-3">
                    <?= $this->session->flashdata('message'); ?>
                    <!--<?php echo form_open_multipart('bsosk/inputeventdata'); ?> -->
                    <form action="<?= base_url('bsosk/inputeventdata'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

                        <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />

                        <div class="row justify-content-center">

                            <!--<div class="form-group col-lg-7 text-center mt-3">
                                <label for="name" class="font-weight-700">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="" value="">
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div> -->

                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="name" class="font-weight-700">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kegiatan" value="">
                                <?= form_error('lpj_proof', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!--<div class="form-group col-lg-7 text-center mt-3">
                                <label for="name" class="font-weight-700">Nama Kegiatan</label>
                                <select name="name" id="name" onchange="EventTahun(this)" class="form-control">
                                    <option value="">Pilih Kegiatan</option>
                                    <?php foreach ($eventdata as $ed) : ?>
                                        <option value="<?= $ed['id'] ?>"> <?= $ed['name'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div> -->

                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="tahun" class="font-weight-700">Tahun Pelaksanaan</label>
                                <div class="input-group date" id="tahun" name="tahun" data-target-input="nearest">
                                    <input type="number" id="tahun" name="tahun" class="form-control datetimepicker-input" data-target="#tahun" />
                                    <div class="input-group-append" data-target="#tahun" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="name" class="font-weight-700">Bukti LPJK</label>
                                <input type="text" class="form-control" id="lpj_proof" name="lpj_proof" placeholder="Link Google Drive" value="">
                                <?= form_error('lpj_proof', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="name" class="font-weight-700">Bukti LHK</label>
                                <input type="text" class="form-control" id="lhk_proof" name="lhk_proof" placeholder="Link Google Drive" value="">
                                <?= form_error('lhk_proof', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="name" class="font-weight-700">Contoh Sertifikat</label>
                                <input type="text" class="form-control" id="sertif_proof" name="sertif_proof" placeholder="Link Google Drive" value="">
                                <?= form_error('sertif_proof', '<small class="text-danger pl-3">', '</small>'); ?>
                                <p class="mt-1">Perhatikan pedoman mengenai Bukti LPJK, LHK & Contoh Sertifikat untuk pengajuan input ke database.</p>
                            </div>






                        </div>
                        <div class="text-center mt-2">
                            <button type="button" data-toggle="modal" data-target="#areyousureModal" class="btn btn-lg btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text" style="width:240px">Validasi Data Kegiatan</span>
                            </button>
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

    <script type="text/javascript">
        $(function() {
            $('#tahun').datetimepicker({
                format: 'YYYY'
            });
        });
    </script>