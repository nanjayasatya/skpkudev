<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-edit"></i></div>
                                Ubah Data SKP B
                            </h1>
                            <div class="page-header-subtitle">Ubah data SKP sebelum di validasi oleh BEM</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Pastikan sekali lagi data yang diinput sudah benar!</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <?php foreach ($detailskpvalidation as $dv) : ?>
                                <?php
                                if ($dv['status'] == 0) {
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
                                    $button = 'Ubah Data';
                                    $rejection = '';
                                    $alasan = '';
                                } else {
                                    if ($dv['status'] == 2) {
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
                                        $rj = $dv['rejection_reason'];
                                        $alasan = '<div class="card bg-danger text-white mb-3">
                                        <div class="card-header text-white"><strong style="h4">Alasan Penolakan</strong></div>
                                        <div class="card-body">
                                        <input type="text" class="form-control text-center" id="name" name="name"  placeholder="" value="' . $rj . '" readonly>
                                        </div>
                                        
                                    </div>';
                                    }
                                }
                                ?>
                                <?= $status ?>
                                <?= $alasan ?>
                                <script type="text/javascript">
                                    var rejection_reason = document.getElementById("name").value;
                                    var replaced = decodeURI(rejection_reason);
                                    console.log(replaced);
                                    document.getElementById("name").value = replaced;
                                </script>
                                <!--<?php echo form_open_multipart('user/editskpdetails/' . $this->uri->segment(3)); ?> -->
                                <form action="<?= base_url('user/editskpdetails/' . $this->uri->segment(3)); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                                    <div class="form-group">
                                        <label for="name" class="font-weight-700">Nama Mahasiswa</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= $dv['name']; ?>" readonly>
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="npm" class="font-weight-700">NPM</label>
                                        <input type="text" class="form-control" id="npm" name="npm" placeholder="" value="<?= $dv['npm']; ?>" readonly>
                                        <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <!--<label for="tipe" class="font-weight-700">Tipe SKP</label>-->
                                        <input type="hidden" class="form-control" id="tipe" name="tipe" placeholder="" value="<?= $dv['tipe']; ?>" readonly>
                                        <?= form_error('tipe', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="event" class="font-weight-700">Keterangan</label>
                                        <input type="text" class="form-control" id="event" name="event" placeholder="" value="<?= $dv['event']; ?>">
                                        <?= form_error('event', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun" class="font-weight-700">Tahun</label>
                                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="" value="<?= $dv['tahun']; ?>">
                                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="event" class="font-weight-700">Posisi</label>
                                        <select name="posisi" id="posisi" class="form-control">

                                            <option value="<?= $dv['posisi']; ?>"><?= $dv['posisi']; ?></option>

                                            <?php foreach ($eventposisi as $ep) : ?>
                                                <option value="<?= $ep['posisi'] ?>"> <?= $ep['posisi'] ?> </option>
                                            <?php endforeach; ?>

                                        </select>
                                        <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label for="bobot" class="font-weight-700">Bobot</label>
                                        <input type="number" class="form-control" id="bobot" name="bobot" placeholder="" value="<?= $dv['bobot']; ?>">
                                        <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <!--<img id="output" src="<?= base_url('assets/user_directory/') . $dv['npm'] . "/" . $dv['skp_proof']; ?>" class="img-thumbnail"></img> -->
                                    <a target="_blank" href="<?= base_url('assets/user_directory/') . $dv['npm'] . "/" . $dv['skp_proof']; ?>" class="btn btn-success btn-icon-split mt-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                        <span class="text" style="width:160px">Preview Sertifikat</span>
                                    </a>
                                    <div class="custom-file mt-4">
                                        <input type="file" class="custom-file-input mb-2" id="image" name="image" onchange="loadFile(event)">
                                        <label label class="custom-file-label" for="image">JPG/PNG/PDF</label>
                                        <p class="text-center mt-2 font-weight-700">File Bukti SKP tidak melebihi 2MB</p>

                                        <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>





                        </div>

                        <div class="row mt-4">
                            <div class="col-xl text-center">
                                <a href="<?= base_url('user/daftarvalidasi'); ?>" class="btn btn-dark btn-icon-split mt-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-left"></i>
                                    </span>
                                    <span class="text" style="width:180px">Kembali</span>
                                </a>


                                <a href="#" type="button row" data-toggle="modal" data-target="#areyousureDeleteValidationModal" class="btn btn-danger btn-icon-split mt-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text" style="width:180px">Batal Validasi</span>
                                </a>

                                <button type="button" data-toggle="modal" data-target="#areyousurevalidateModal" class="btn btn-success btn-icon-split mt-2">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text" style="width:180px"><?= $button ?></span>
                                </button>
                            </div>
                        </div>


                    <?php endforeach; ?>




                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MODAL -->
    <div class="modal fade" id="areyousurevalidateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousurevalidateModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areyousurevalidateModalLabel">Edit SKP Details</h5>
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
                    <h5 class="modal-title" id="areyousureDeleteValidationModalLabel">Batal Ajukan Validasi SKP</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Apakah yakin membatalkan validasi SKP?

                </div>
                <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><a href="<?= base_url('user/deletevalidation/') . $this->uri->segment(3); ?>" class="btn btn-danger">Lanjutkan</a></div>
            </div>
        </div>
    </div>

    <!--<script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script> -->