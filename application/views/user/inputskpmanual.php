<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-upload"></i></div>
                                Input Data SKP B (Manual)
                            </h1>
                            <div class="page-header-subtitle">Input Data SKP B untuk di validasi dan masuk database BEM (Manual)</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Input SKP B untuk acara yang tidak ada di database BEM</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10 mb-5">
            <div class="card">
                <div class="card-body mb-3">
                    <?= $this->session->flashdata('message'); ?>
                    <?php echo form_open_multipart('user/inputskpmanual'); ?>
                    <!--<form action="<?= base_url('user/inputskpmanual/'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">-->
                    <form action="<?= base_url('user/inputskpmanual/'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <div class="row justify-content-center">
                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="name"><strong>Mahasiswa</strong></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= $user['name']; ?>" readonly>

                            </div>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="npm"><strong>NPM</strong></label>
                                <input type="text" class="form-control" id="npm" name="npm" placeholder="" value="<?= $user['npm']; ?>" readonly>

                            </div>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="event"><strong>Nama Kegiatan/Keterangan</strong></label>
                                <input type="text" class="form-control" id="event" name="event" placeholder="" maxlength="70" value="<?= set_value('event'); ?>">
                                <?= form_error('event', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!-- <div class="form-group col-lg-7 text-center">
                                <label for="posisi"><strong>Posisi</strong></label>
                                <input type="text" class="form-control" id="event_posisi" name="event_posisi" placeholder="" value="<?= set_value('event_posisi'); ?>">
                                <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div> -->
                            <div class="form-group col-lg-7 text-center">
                                <label for="event" class="font-weight-700">Posisi</label>
                                <select name="posisi" id="posisi" class="form-control">

                                    <option value="<?= set_value('posisi'); ?>"><?= set_value('posisi'); ?></option>

                                    <?php foreach ($eventposisi as $ep) : ?>
                                        <option value="<?= $ep['posisi'] ?>"> <?= $ep['posisi'] ?> </option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="tahun" class="font-weight-700">Tahun</label>
                                <div class="input-group date" id="tahun" name="tahun" data-target-input="nearest">
                                    <input type="number" id="tahun" name="tahun" class="form-control datetimepicker-input" data-target="#tahun" value="<?= set_value('tahun'); ?>" />
                                    <div class="input-group-append" data-target="#tahun" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                <script type="text/javascript">
                                    $(function() {
                                        $('#tahun').datetimepicker({
                                            format: 'YYYY'
                                        });
                                    });
                                </script>
                            </div>

                            <div class="form-group col-lg-7 text-center">
                                <label for="bobot"><strong>Bobot</strong></label>
                                <input type="number" class="form-control" id="bobot" name="bobot" placeholder="" value="<?= set_value('bobot'); ?>">
                                <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                                <div class="mt-2">
                                    <a class="text-success" target="_blank" href="<?= base_url('assets/PEDOMAN%20SKP%20REVISI%202021.pdf'); ?>">Pedoman SKP FK UWKS 2021</a>
                                </div>
                            </div>
                            <!--<div class="text-center col-lg-7">
                                <img id="output" src="<?= base_url('assets/img/image-thumbnail.png'); ?>" class="img-thumbnail" />
                            </div> -->
                            <div class="custom-file col-lg-7 text-center mt-3 mb-5">
                                <input type="file" class="custom-file-input" id="image" name="image" onchange="loadFile(event)">
                                <label label class="custom-file-label" for="image">JPG/PNG/PDF</label>
                                <p class="text-center mt-2"><strong>File Bukti SKP tidak melebihi 2MB</strong></p>
                                <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                        </div>
                        <div class="text-center mt-3">
                            <button type="button" data-toggle="modal" data-target="#areyousureModal" class="btn btn-lg btn-success btn-icon-split mb-2">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text" style="width:150px">Validasi SKP</span>
                            </button>
                            <br>
                            <a href="<?= base_url('user/daftarvalidasi'); ?>" class="btn btn-lg btn-dark btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-left"></i>
                                </span>
                                <span class="text" style="width:150px">Kembali</span>
                            </a>
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
                    <h5 class="modal-title" id="areyousureModalLabel">Validasi SKP</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Apakah data yang dimasukkan sudah benar ?</div>
                <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
            </div>
        </div>
    </div>

    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
            console.log("halo");

        });
    </script>
    <!--<script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script> -->