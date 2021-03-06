<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-fw fa-database"></i></div>
                                Data SKP A
                            </h1>
                            <div class="page-header-subtitle">Informasi Data SKP A Mahasiswa terkait</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Ubah data/Hapus data SKP A Mahasiswa</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->

        <div class="container mt-n10">
            <?= $this->session->flashdata('message'); ?>
            <?php foreach ($userdata as $uda) : ?>
            <?php endforeach; ?>
            <!-- TABEL SKP A -->
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mt-4">
                        <div class="card-header">Foto</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="<?= base_url('assets/img/profile/') . $uda['image']; ?>" alt="" />
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-5">Jika ada kesalahan segera hubungi bagian INFOKOM.</div>
                            <!-- Profile picture upload button-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4 mt-4">
                        <div class="card-header">Data Mahasiswa</div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (username)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="name">Nama Lengkap</label>
                                    <input class="form-control" id="name" type="text" placeholder="" value="<?= $uda['name']; ?>" readonly />
                                </div>

                                <!-- Form Group (email address)-->
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="small mb-1" for="npm">NPM</label>
                                        <input class="form-control" id="npm" name="npm" type="text" placeholder="" value="<?= $uda['npm']; ?>" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="small mb-1" for="kelas">Kelas</label>
                                        <input class="form-control" id="kelas" type="text" placeholder="" value="<?= $uda['angkatan'] . $uda['kelas']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input class="form-control" id="email" type="text" placeholder="" value="<?= $uda['email']; ?>" readonly />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card h-100">
                <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">


                    <table id="userskp_a" class="table table-bordered table-hover dataTable" style=" width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>

                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Tahun</th>
                                <th class="text-center">Posisi</th>
                                <th class="text-center">Bobot</th>

                                <th class="text-center">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($skpuserdataA as $sud) : ?>
                                <tr>
                                    <th class="text-center" scope="row"><?= $i ?></th>
                                    <!-- <td><?= $sud['tipe']; ?></td> -->
                                    <td><?= $sud['event']; ?></td>
                                    <td class="text-center"><?= $sud['tahun']; ?></td>
                                    <?php
                                    if ($sud['posisi'] == "Telah Mengikuti") {
                                        $badge = 'badge bg-green text-white rounded-pill';
                                    } else if ($sud['posisi'] == "Belum Mengikuti") {
                                        $badge = 'badge bg-red text-white rounded-pill';
                                    } else {
                                        $badge = 'badge bg-green text-white rounded-pill';
                                    }
                                    ?>
                                    <td class="text-center">
                                        <div class="<?= $badge ?>"><?= $sud['posisi']; ?></div>
                                    </td>
                                    <td class="text-center"><?= $sud['bobot']; ?></td>
                                    <td class="text-center">
                                        <!--<a href="<?= base_url('staffbem/editskabdata/') . $sud['id']; ?>" class="btn btn-warning">Ubah Data</a> -->
                                        <!-- <a href="" class="btn btn-danger">Delete</a> -->
                                        <a href="<?= base_url('staffbem/editskpadata/') . $sud['id']; ?>" class="btn btn-warning btn-icon-split mt-2">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-exclamation-triangle"></i>
                                            </span>
                                            <span class="text" style="width:120px">Ubah Data</span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="mt-3 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 justify-content-center">
                        <?php echo form_open_multipart('staffbem/inputskpauser/' . $this->uri->segment(3)); ?>
                        <form action="<?= base_url('staffbem/inputskpauser/' . $this->uri->segment(3)); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                            <!--<div class="form-group text-center mt-3">
                                <label for="event" class="font-weight-700">Nama Kegiatan/Keterangan</label>
                                <input type="text" class="form-control" id="event" name="event" placeholder="" value="<?= set_value('event'); ?>">
                                <?= form_error('event', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>-->
                            <div class="form-group text-center">
                                <label for="event" class="font-weight-700">Keterangan</label>
                                <select name="event" id="event" class="select form-control">

                                    <option value="<?= set_value('event_ref'); ?>"><?= set_value('event_ref'); ?></option>

                                    <?php foreach ($skp_a_ref as $sar) : ?>
                                        <option value="<?= $sar['event_ref'] ?>"> <?= $sar['event_ref'] ?> </option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('event', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group text-center">
                                <label for="posisi" class="font-weight-700">Status</label>
                                <select name="posisi" id="posisi" class="form-control">
                                    <option value="<?= set_value('posisi'); ?>"><?= set_value('posisi'); ?></option>
                                    <option value="Telah Mengikuti">Telah Mengikuti</option>
                                    <option value="Belum Mengikuti">Belum Mengikuti</option>
                                </select>
                                <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group text-center mt-3">
                                <label for="tahun" class="font-weight-700">Tahun Pelaksanaan</label>
                                <div class="input-group date" id="tahun" name="tahun" data-target-input="nearest">
                                    <input type="number" id="tahun" name="tahun" class="form-control datetimepicker-input" data-target="#tahun" />
                                    <div class="input-group-append" data-target="#tahun" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>

                            </div>
                            <div class="form-group text-center">
                                <label for="bobot" class="font-weight-700">Bobot</label>
                                <input type="number" class="form-control" id="bobot" name="bobot" placeholder="" value="<?= set_value('bobot'); ?>">
                                <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                    </div>
                    <div class="text-center mb-5">
                        <button type="button" data-toggle="modal" data-target="#areyousureModal" class="btn btn-lg btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text" style="width:180px">Input Data SKP A</span>
                        </button>
                        <br>
                        <div class="mt-2">
                            <a href="<?= base_url('staffbem/skpdatabase'); ?>" class="btn btn-lg btn-dark btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-left"></i>
                                </span>
                                <span class="text" style="width:180px">Kembali</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>






    <div class="modal fade" id="areyousureModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousureModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areyousureModalLabel">Input Data SKP A</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
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
        $(function() {
            var select = $('select.select');
            select.change(function() {
                select.not(this).val(this.value);
            });
        });
    </script>