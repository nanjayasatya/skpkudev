<script type="text/javascript" src="<?= base_url('vendor/sb/dist/js/bootstrap-datepicker.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('vendor/sb/dist/css/datepicker.css') ?>" />
<div id="layoutSidenav_content">
    <main>
        <?php foreach ($proposalvalidation as $pvd) : ?>
            <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                <div class="container">
                    <div class="page-header-content pt-4">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto mt-4">
                                <h1 class="page-header-title">
                                    <div class="page-header-icon"><i class="fas fa-upload"></i></div>
                                    Detail Validasi Proposal
                                </h1>
                                <div class="page-header-subtitle">Detail Validasi Proposal Kegiatan yang diajukan oleh BSO/SK
                                </div>
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


                                <form action="<?= base_url('staffbem/detailvalidasiproposal/' . $this->uri->segment(3)); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                                    <div class="form-group text-center mt-3">
                                        <label for="name" class="font-weight-700">Nama Kegiatan</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= $pvd['name']; ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group text-center mt-3">
                                        <label for="name" class="font-weight-700">Tahun Pelaksanaan</label>
                                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="" value="<?= $pvd['tahun']; ?>">
                                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <a target="_blank" href="<?= $pvd['drive_link'] ?>" class="mt-2 btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-file-alt"></i>
                                        </span>
                                        <span class="text" style="width:180px">Drive Berkas</span>
                                    </a>
                                    <p class="mt-3">Login dengan <strong>Akun Drive BEM</strong> untuk mengakses Drive Berkas.</p>
                                    <p class="mt-1"> Perhatikan <strong>Berkas berkas pengajuan</strong> sebelum menerima validasi.</p>



                            </div>
                            <div class="text-center mt-3">
                                <label for="keterangansurat" class="font-weight-700 h3">Status Berkas</label>
                                <table id="keterangansurat" class="table table-bordered mt-2 mb-3" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="thstyle">Proposal</th>
                                            <th class="thstyle">S. Izin Kegiatan</th>
                                            <th class="thstyle">S. Pengesahan SKP</th>
                                            <th class="thstyle">S. Bantuan Dana</th>
                                            <th class="thstyle">S. Peminjaman Properti</th>
                                            <th class="thstyle">S. Peminjaman Ruangan</th>

                                            <style>
                                                .thstyle {
                                                    vertical-align: middle;
                                                    text-align: center;
                                                }
                                            </style>

                                        </tr>
                                    </thead>

                                    <?php
                                    if ($pvd['proposal_status'] == 1) {
                                        $proposalbadgeclass = 'badge badge-green';
                                        $proposaltext = 'fas fa-check';
                                    } else {
                                        $proposalbadgeclass = 'badge badge-red';
                                        $proposaltext = 'fas fa-times';
                                    }

                                    if ($pvd['izinkegiatan_status'] == 1) {
                                        $izinkegiatanbadgeclass = 'badge badge-green';
                                        $izinkegiatantext = 'fas fa-check';
                                    } else {
                                        $izinkegiatanbadgeclass = 'badge badge-red';
                                        $izinkegiatantext = 'fas fa-times';
                                    }

                                    if ($pvd['pengesahanskp_status'] == 1) {
                                        $pengesahanskpbadgeclass = 'badge badge-green';
                                        $pengesahanskptext = 'fas fa-check';
                                    } else {
                                        $pengesahanskpbadgeclass = 'badge badge-red';
                                        $pengesahanskptext = 'fas fa-times';
                                    }

                                    if ($pvd['bantuandana_status'] == 1) {
                                        $bantuandanabadgeclass = 'badge badge-green';
                                        $bantuandanatext = 'fas fa-check';
                                    } else {
                                        $bantuandanabadgeclass = 'badge badge-red';
                                        $bantuandanatext = 'fas fa-times';
                                    }

                                    if ($pvd['peminjamanproperti_status'] == 1) {
                                        $peminjamanpropertibadgeclass = 'badge badge-green';
                                        $peminjamanpropertitext = 'fas fa-check';
                                        $peminjamanpropertitextshow = '';
                                        $hidden = 'checkbox';
                                        $labelstyle = '';
                                    } else {
                                        if ($pvd['type'] == 2) {
                                            $peminjamanpropertibadgeclass = 'badge badge-red';
                                            $peminjamanpropertitext = 'fas fa-times';
                                            $peminjamanpropertitextshow = '';
                                            $hidden = 'checkbox';
                                            $labelstyle = '';
                                        } else {
                                            $peminjamanpropertibadgeclass = 'badge badge-green';
                                            $peminjamanpropertitext = '';
                                            $peminjamanpropertitextshow = 'Online';
                                            $hidden = 'hidden';
                                            $labelstyle = 'display:none';
                                        }
                                    }

                                    if ($pvd['peminjamanruangan_status'] == 1) {
                                        $peminjamanruanganbadgeclass = 'badge badge-green';
                                        $peminjamanruangantext = 'fas fa-check';
                                        $peminjamanruangantextshow = '';
                                        $hidden = 'checkbox';
                                        $labelstyle = '';
                                    } else {
                                        if ($pvd['type'] == 2) {
                                            $peminjamanruanganbadgeclass = 'badge badge-red';
                                            $peminjamanruangantext = 'fas fa-times';
                                            $peminjamanruangantextshow = '';
                                            $hidden = 'checkbox';
                                            $labelstyle = '';
                                        } else {
                                            $peminjamanruanganbadgeclass = 'badge badge-green';
                                            $peminjamanruangantext = '';
                                            $peminjamanruangantextshow = 'Online';
                                            $hidden = 'hidden';
                                            $labelstyle = 'display:none';
                                        }
                                    }



                                    ?>

                                    <tbody>


                                        <tr>
                                            <td class="thstyle">
                                                <h1><span class="<?= $proposalbadgeclass ?>"><i class="<?= $proposaltext ?>"></i></span>
                                                </h1>
                                            </td>
                                            <td class="thstyle">
                                                <h1><span class="<?= $izinkegiatanbadgeclass ?>"><i class="<?= $izinkegiatantext ?>"></i></span>
                                                </h1>
                                            </td>
                                            <td class="thstyle">
                                                <h1><span class="<?= $pengesahanskpbadgeclass ?>"><i class="<?= $pengesahanskptext ?>"></i></span>
                                                </h1>
                                            </td>
                                            <td class="thstyle">
                                                <h1><span class="<?= $bantuandanabadgeclass ?>"><i class="<?= $bantuandanatext ?>"></i></span>
                                                </h1>
                                            </td>
                                            <td class="thstyle">
                                                <h1><span class="<?= $peminjamanpropertibadgeclass ?>"><i class="<?= $peminjamanpropertitext ?>"></i><?= $peminjamanpropertitextshow ?></span>
                                                </h1>
                                            </td>
                                            <td class="thstyle">
                                                <h1><span class="<?= $peminjamanruanganbadgeclass ?>"><i class="<?= $peminjamanruangantext ?>"></i><?= $peminjamanruangantextshow ?></span>
                                                </h1>
                                            </td>
                                        </tr>
                                        <tr>
                                            <?php
                                            if ($pvd['type'] == 1) {
                                                $disabled = 'disabled';
                                            } else {
                                                $disabled = '';
                                            }

                                            if ($pvd['proposal_status'] == 0) {
                                                $proposal_status = 1;
                                            } else {
                                                $proposal_status = 0;
                                            }

                                            if ($pvd['pengesahanskp_status'] == 0) {
                                                $pengesahanskp_status = 1;
                                            } else {
                                                $pengesahanskp_status = 0;
                                            }

                                            if ($pvd['bantuandana_status'] == 0) {
                                                $bantuandana_status = 1;
                                            } else {
                                                $bantuandana_status = 0;
                                            }

                                            if ($pvd['izinkegiatan_status'] == 0) {
                                                $izinkegiatan_status = 1;
                                            } else {
                                                $izinkegiatan_status = 0;
                                            }

                                            if ($pvd['peminjamanproperti_status'] == 0) {
                                                $peminjamanproperti_status = 1;
                                            } else {
                                                $peminjamanproperti_status = 0;
                                            }

                                            if ($pvd['peminjamanruangan_status'] == 0) {
                                                $peminjamanruangan_status = 1;
                                            } else {
                                                $peminjamanruangan_status = 0;
                                            }

                                            if ($pvd['bantuandana_status'] == 1) {
                                                $disabledcheckdana = 'disabled';
                                            } else {
                                                $disabledcheckdana = '';
                                            }

                                            if ($pvd['bantuandana_status'] == 2) {
                                                $disabledchecknotdana = 'disabled';
                                            } else {
                                                $disabledchecknotdana = '';
                                            }

                                            if ($pvd['peminjamanproperti_status'] == 1) {
                                                $disabledcheckproperti = 'disabled';
                                            } else {
                                                $disabledcheckproperti = '';
                                            }

                                            if ($pvd['peminjamanproperti_status'] == 2) {
                                                $disabledchecknotpeminjamanproperti = 'disabled';
                                            } else {
                                                $disabledchecknotpeminjamanproperti = '';
                                            }

                                            if ($pvd['peminjamanruangan_status'] == 1) {
                                                $disabledcheckruangan = 'disabled';
                                            } else {
                                                $disabledcheckruangan = '';
                                            }

                                            if ($pvd['peminjamanruangan_status'] == 2) {
                                                $disabledchecknotruangan = 'disabled';
                                            } else {
                                                $disabledchecknotruangan = '';
                                            }


                                            ?>





                                            <td>
                                                <div class="form-check">

                                                    <input class="form-check-input" type="checkbox" <?= checkproposal_status($pvd['proposal_status']); ?> onchange="ChangeProposalStatus(this)" value="<?= $proposal_status ?>" id="proposal_status">
                                                    <label class="form-check-label" for="proposal_status">
                                                        Lengkap
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">

                                                    <input class="form-check-input" type="checkbox" <?= checkizinkegiatan_status($pvd['izinkegiatan_status']); ?> onchange="ChangeIzinKegiatanStatus(this)" value="<?= $izinkegiatan_status ?>" id="izinkegiatan_status">
                                                    <label class="form-check-label" for="izinkegiatan_status">
                                                        Lengkap
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">

                                                    <input class="form-check-input" type="checkbox" <?= checkpengesahanskp_status($pvd['pengesahanskp_status']); ?> onchange="ChangePengesahanSKPStatus(this)" value="<?= $pengesahanskp_status ?>" id="pengesahanskp_status">
                                                    <label class="form-check-label" for="pengesahanskp_status">
                                                        Lengkap
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check">

                                                    <input class="form-check-input" type="checkbox" <?= checkbantuandana_status($pvd['bantuandana_status']); ?> onchange="ChangeBantuanDanaStatus(this)" value="<?= $bantuandana_status ?>" id="bantuandana_status" <?= $disabledchecknotdana ?>>
                                                    <label class="form-check-label" for="bantuandana_status">
                                                        Lengkap
                                                    </label>
                                                </div>
                                                <?php
                                                if ($pvd['bantuandana_status'] == 0) {
                                                    $notbantuandanastatus = 2;
                                                } else {
                                                    $notbantuandanastatus = 0;
                                                }
                                                ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="<?= $notbantuandanastatus ?>" <?= checknotbantuandana_status($pvd['bantuandana_status']); ?> onchange="ChangeNotBantuanDanaStatus(this)" id="notbantuandana_status" <?= $disabledcheckdana ?>>
                                                    <label class="form-check-label" for="notbantuandana_status">
                                                        Tidak Mengajukan
                                                    </label>
                                                </div>
                                                <script type="text/javascript">
                                                    function ChangeNotBantuanDanaStatus(data) {
                                                        var notbantuandana_status = document.getElementById("notbantuandana_status").value

                                                        var uriSegment = '<?php echo $this->uri->segment(3); ?>';
                                                        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
                                                        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

                                                        $.ajax({
                                                            url: "<?= base_url('staffbem/changeStatusProposalValidation/'); ?>" + uriSegment,
                                                            type: 'post',
                                                            data: {
                                                                bantuandana_status: notbantuandana_status,
                                                                dataindication: '4',
                                                                [csrfName]: csrfHash

                                                            },
                                                            success: function() {
                                                                document.location.reload(true);

                                                            }
                                                        });
                                                    }
                                                </script>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="<?= $hidden ?>" <?= checkpeminjamanproperti_status($pvd['peminjamanproperti_status']); ?> onchange="ChangePeminjamanPropertiStatus(this)" value="<?= $peminjamanproperti_status ?>" id="peminjamanproperti_status" <?= $disabledchecknotpeminjamanproperti ?>>
                                                    <label style="<?= $labelstyle ?>" class="form-check-label" for="peminjamanproperti_status">
                                                        Lengkap
                                                    </label>
                                                </div>
                                                <?php
                                                if ($pvd['peminjamanproperti_status'] == 0) {
                                                    $notpeminjamanproperti_status = 2;
                                                } else {
                                                    $notpeminjamanproperti_status = 0;
                                                }
                                                ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="<?= $hidden ?>" onchange="ChangeNotPeminjamanPropertiStatus(this)" <?= checknotpeminjamanproperti_status($pvd['peminjamanproperti_status']); ?> value="<?= $notpeminjamanproperti_status ?>" id="notpeminjamanproperti_status" <?= $disabledcheckproperti ?>>
                                                    <label style="<?= $labelstyle ?>" class="form-check-label" for="notpeminjamanproperti_status">
                                                        Tidak Mengajukan
                                                    </label>
                                                </div>
                                                <script type="text/javascript">
                                                    function ChangeNotPeminjamanPropertiStatus(data) {
                                                        var notpeminjamanproperti_status = document.getElementById("notpeminjamanproperti_status").value

                                                        var uriSegment = '<?php echo $this->uri->segment(3); ?>';
                                                        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
                                                        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

                                                        $.ajax({
                                                            url: "<?= base_url('staffbem/changeStatusProposalValidation/'); ?>" + uriSegment,
                                                            type: 'post',
                                                            data: {
                                                                peminjamanproperti_status: notpeminjamanproperti_status,
                                                                dataindication: '5',
                                                                [csrfName]: csrfHash

                                                            },
                                                            success: function() {
                                                                document.location.reload(true);

                                                            }
                                                        });
                                                    }
                                                </script>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="<?= $hidden ?>" <?= checkpeminjamanruangan_status($pvd['peminjamanruangan_status']); ?> onchange="ChangePeminjamanRuanganStatus(this)" value="<?= $peminjamanruangan_status ?>" id="peminjamanruangan_status" <?= $disabledchecknotruangan ?>>
                                                    <label style="<?= $labelstyle ?>" class="form-check-label" for="peminjamanruangan_status">
                                                        Lengkap
                                                    </label>
                                                </div>
                                                <?php
                                                if ($pvd['peminjamanruangan_status'] == 0) {
                                                    $notpeminjamanruangan_status = 2;
                                                } else {
                                                    $notpeminjamanruangan_status = 0;
                                                }
                                                ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="<?= $hidden ?>" onchange="ChangeNotPeminjamanRuanganStatus(this)" <?= checknotpeminjamanruangan_status($pvd['peminjamanproperti_status']); ?> value="<?= $notpeminjamanruangan_status ?>" id="notpeminjamanruangan_status" <?= $disabledcheckruangan ?>>
                                                    <label style="<?= $labelstyle ?>" class="form-check-label" for="notpeminjamanruangan_status">
                                                        Tidak Mengajukan
                                                    </label>
                                                </div>
                                                <script type="text/javascript">
                                                    function ChangeNotPeminjamanRuanganStatus(data) {

                                                        var notpeminjamanruangan_status = document.getElementById("notpeminjamanruangan_status").value



                                                        var uriSegment = '<?php echo $this->uri->segment(3); ?>';
                                                        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
                                                        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

                                                        $.ajax({
                                                            url: "<?= base_url('staffbem/changeStatusProposalValidation/'); ?>" + uriSegment,
                                                            type: 'post',
                                                            data: {

                                                                peminjamanruangan_status: notpeminjamanruangan_status,
                                                                dataindication: '6',

                                                                [csrfName]: csrfHash

                                                            },
                                                            success: function() {
                                                                document.location.reload(true);

                                                            }
                                                        });
                                                    }
                                                </script>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                                <p class="mt-2"> Centang <strong>"Lengkap"</strong> bila file yang sudah memenuhi syarat terupload.</p>

                            </div>
                            <div class="row">
                                <div class="col-lg">
                                    <a href="<?= base_url('staffbem/validasiproposal'); ?>" type="button" class="btn btn-dark btn-icon-split mt-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-arrow-left"></i>
                                        </span>
                                        <span class="text" style="width:180px">Kembali</span>
                                    </a>


                                    <a href="#" type="button row" data-toggle="modal" data-target="#areyousurerejectvalidateModal" class="btn btn-danger btn-icon-split mt-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text" style="width:180px">Validasi Ditolak</span>
                                    </a>

                                    <button type="button" data-toggle="modal" data-target="#areyousurevalidateModal" class="btn btn-success btn-icon-split mt-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text" style="width:180px">Lanjutkan ke DPM</span>
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
                <h5 class="modal-title" id="areyousurevalidateModalLabel">Menerima Validasi Proposal</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">Apakah data yang dimasukkan sudah benar?</div>
            <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
        </div>
    </div>
</div>

<div class="modal fade" id="areyousurerejectvalidateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousurerejectvalidateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="areyousurerejectvalidateModalLabel">Penolakan Validasi Proposal Kegiatan</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body text-center">
                <p>Apakah yakin ingin menolak validasi Proposal kegiatan ini?</p>
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

<script>
    function ChangeProposalStatus(data) {
        var proposal_status = document.getElementById("proposal_status").value



        var uriSegment = '<?php echo $this->uri->segment(3); ?>';
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            url: "<?= base_url('staffbem/changeStatusProposalValidation/'); ?>" + uriSegment,
            type: 'post',
            data: {
                proposal_status: proposal_status,
                dataindication: '1',
                [csrfName]: csrfHash

            },
            success: function() {
                document.location.reload(true);

            }
        });
    }

    function ChangeIzinKegiatanStatus(data) {

        var izinkegiatan_status = document.getElementById("izinkegiatan_status").value



        var uriSegment = '<?php echo $this->uri->segment(3); ?>';
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            url: "<?= base_url('staffbem/changeStatusProposalValidation/'); ?>" + uriSegment,
            type: 'post',
            data: {

                izinkegiatan_status: izinkegiatan_status,
                dataindication: '2',

                [csrfName]: csrfHash

            },
            success: function() {
                document.location.reload(true);

            }
        });
    }

    function ChangePengesahanSKPStatus(data) {

        var pengesahanskp_status = document.getElementById("pengesahanskp_status").value



        var uriSegment = '<?php echo $this->uri->segment(3); ?>';
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            url: "<?= base_url('staffbem/changeStatusProposalValidation/'); ?>" + uriSegment,
            type: 'post',
            data: {

                pengesahanskp_status: pengesahanskp_status,
                dataindication: '3',

                [csrfName]: csrfHash

            },
            success: function() {
                document.location.reload(true);

            }
        });
    }

    function ChangeBantuanDanaStatus(data) {

        var bantuandana_status = document.getElementById("bantuandana_status").value



        var uriSegment = '<?php echo $this->uri->segment(3); ?>';
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            url: "<?= base_url('staffbem/changeStatusProposalValidation/'); ?>" + uriSegment,
            type: 'post',
            data: {

                bantuandana_status: bantuandana_status,
                dataindication: '4',

                [csrfName]: csrfHash

            },
            success: function() {
                document.location.reload(true);

            }
        });
    }

    function ChangePeminjamanPropertiStatus(data) {

        var peminjamanproperti_status = document.getElementById("peminjamanproperti_status").value



        var uriSegment = '<?php echo $this->uri->segment(3); ?>';
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            url: "<?= base_url('staffbem/changeStatusProposalValidation/'); ?>" + uriSegment,
            type: 'post',
            data: {

                peminjamanproperti_status: peminjamanproperti_status,
                dataindication: '5',

                [csrfName]: csrfHash

            },
            success: function() {
                document.location.reload(true);

            }
        });
    }

    function ChangePeminjamanRuanganStatus(data) {

        var peminjamanruangan_status = document.getElementById("peminjamanruangan_status").value



        var uriSegment = '<?php echo $this->uri->segment(3); ?>';
        var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
        var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

        $.ajax({
            url: "<?= base_url('staffbem/changeStatusProposalValidation/'); ?>" + uriSegment,
            type: 'post',
            data: {

                peminjamanruangan_status: peminjamanruangan_status,
                dataindication: '6',

                [csrfName]: csrfHash

            },
            success: function() {
                document.location.reload(true);

            }
        });
    }
</script>

<script type="text/javascript">
    function RejectClick() {
        var rejection_reason = document.getElementById("rejection_reason").value;
        window.location.href = "<?= base_url('staffbem/rejectvalidasiproposal/') . $this->uri->segment(3) . '/' ?>" + rejection_reason;

    }
</script>


<!-- JQUERY AJAX LIBRARY + MOMENT JS -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> -->
<!-- DATE TIME PICKER COMPONENT -->
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/js/tempusdominus-bootstrap-4.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha14/css/tempusdominus-bootstrap-4.min.css" /> -->