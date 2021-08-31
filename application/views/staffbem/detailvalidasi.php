<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-file-alt"></i></div>
                                Detail Validasi SKP B
                            </h1>
                            <div class="page-header-subtitle">Detail Validasi SKP B yang diajukan Mahasiswa</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Pastikan data yang diinput mahasiswa sudah benar!</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="card">
                <!--<div class="card-header">Example Card</div> -->
                <div class="card-body">
                    <?php foreach ($detailskpvalidation as $dv) : ?>

                        <form class="mt-3 text-center" action="<?= base_url('staffbem/detailvalidasi/' . $this->uri->segment(3)); ?>" method="post">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                            <div class="row justify-content-center">
                                <div class="form-group col-lg-7 text-center">
                                    <label for="name" class="font-weight-700">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= $dv['name']; ?>" readonly>
                                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group col-lg-7 text-center">
                                    <label for="npm" class="font-weight-700">NPM</label>
                                    <input type="text" class="form-control" id="npm" name="npm" placeholder="" value="<?= $dv['npm']; ?>" readonly>
                                    <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-lg-7 text-center">
                                    <!--<label for="tipe" class="font-weight-700">Tipe SKP</label>-->
                                    <input type="hidden" class="form-control" id="tipe" name="tipe" placeholder="" value="<?= $dv['tipe']; ?>" readonly>
                                    <?= form_error('tipe', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-lg-7 text-center">
                                    <label for="tahun" class="font-weight-700">Tahun</label>
                                    <input type="number" class="form-control" id="tahun" name="tahun" placeholder="" value="<?= $dv['tahun']; ?>" >
                                    <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-lg-7 text-center">
                                    <label for="event" class="font-weight-700">Keterangan</label>
                                    <input type="text" class="form-control" id="event" name="event" placeholder="" value="<?= $dv['event']; ?>" >
                                    <?= form_error('event', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-lg-7 text-center">
                                    <label for="posisi" class="font-weight-700">Posisi</label>
                                    <input type="text" class="form-control" id="posisi" name="posisi" placeholder="" maxlength="18" value="<?= $dv['posisi']; ?>" >
                                    <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group col-lg-7 text-center">
                                    <label for="bobot" class="font-weight-700">Bobot</label>
                                    <input type="number" class="form-control" id="bobot" name="bobot" placeholder="" value="<?= $dv['bobot']; ?>">
                                    <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <!--<div class="text-center col-lg-7">
                                    <img src="<?= base_url('assets/user_directory/') . $dv['npm'] . "/" . $dv['skp_proof']; ?>" class="img-thumbnail"></img>
                                </div> -->
                                <div class="text-center col-lg-7">
                                    <a target="_blank" href="<?= base_url('assets/user_directory/') . $dv['npm'] . "/" . $dv['skp_proof']; ?>" class="btn btn-success btn-icon-split mt-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                        <span class="text" style="width:160px">Preview Sertifikat</span>
                                    </a>
                                </div>
                                <!--<?php foreach ($detailevent as $ed) : ?>
                                    <div class="row mt-2">
                                        <div class="col-lg 7">

                                            <a target="_blank" href="<?= $ed['lpj_proof']; ?>" class="mt-2 btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-file-alt"></i>
                                                </span>
                                                <span class="text" style="width:130px">LPJK Kegiatan</span>
                                            </a>


                                            <a target="_blank" href="<?= $ed['lhk_proof']; ?>" class="mt-2 btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-file-alt"></i>
                                                </span>
                                                <span class="text" style="width:130px">LHK Kegiatan</span>
                                            </a>


                                            <a target="_blank" href="<?= $ed['sertif_proof']; ?>" class="mt-2 btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-file-alt"></i>
                                                </span>
                                                <span class="text" style="width:170px">Sertifikat Kegiatan</span>
                                            </a>
                                            <p class="mt-3">Perhatikan <strong>Bukti LPJK, LHK & Contoh Sertifikat</strong> dengan data yang diajukan mahasiswa sebelum menerima validasi.</p>

                                        </div>
                                    </div>
                                <?php endforeach; ?> -->

                                <div class="row mt-3 mb-5">
                                    <div class="col-lg 7">
                                        <a href="<?= base_url('staffbem/validasiskp'); ?>" class="btn btn-dark btn-icon-split mt-2">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-left"></i>
                                            </span>
                                            <span class="text" style="width:100px">Kembali</span>
                                        </a>

                                        <a href="#" data-toggle="modal" data-target="#areyousurerejectvalidateModal" type="button row" class="btn btn-danger btn-icon-split mt-2">
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





                            <?php endforeach; ?>
                            </div>


                            <!-- MODAL -->

                            <div class="modal fade" id="areyousurerejectvalidateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousurerejectvalidateModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="areyousurerejectvalidateModalLabel">Penolakan Validasi SKP</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <p>Apakah yakin ingin menolak validasi SKP mahasiswa ini?</p>
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

                            <div class="modal fade" id="areyousurevalidateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousurevalidateModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="areyousurevalidateModalLabel">Menerima Validasi SKP</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">Apakah data yang diajukan mahasiswa sudah benar?
                                        </div>
                                        <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
        </div>
    </main>

    <script type="text/javascript">
        function RejectClick() {
            var rejection_reason = document.getElementById("rejection_reason").value;
            window.location.href = "<?= base_url('staffbem/rejectvalidasiskp/') . $this->uri->segment(3) . '/' ?>" + rejection_reason;

        }
    </script>