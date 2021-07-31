<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-user"></i></div>
                                Tambah User Baru (Mahasiswa)
                            </h1>

                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="row">
                <div class="col-xxl-4 col-xl-12 mb-4">
                    <div class="card h-100">
                        <div class="col-lg">
                            <div class="p-5">

                                <form class="user" method="post" action="<?= base_url('admin/useradd/'); ?> ">
                                    <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />

                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control form-control-user" id="npm" name="npm" placeholder="NPM" value="<?= set_value('npm'); ?>">
                                        <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="number" class="form-control form-control-user" id="angkatan" name="angkatan" placeholder="Angkatan" value="<?= set_value('angkatan'); ?>">
                                            <?= form_error('angkatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <!--<div class="col-sm-6">
                                            <input type="text" maxtlength="2" class="form-control form-control-user" id="kelas" name="kelas" placeholder="Kelas" value="<?= set_value('kelas'); ?>">
                                            <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div> -->
                                        <div class="col-sm-6">
                                            <select name="kelas" id="kelas" class="form-control">
                                                <option value="">Kelas</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>

                                            </select>
                                            <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                                        </div>
                                    </div>
                                    <!--<div class="text-center">
                                        <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#areyousureModal">
                                            Daftarkan User
                                        </button>
                                        <a class="btn btn-dark btn-block" href="<?= base_url('admin/userdatabase'); ?>">Kembali</a>
                                    </div> -->
                                    <div class="text-center">
                                        <button type="button" data-toggle="modal" data-target="#areyousureModal" class="btn btn-lg btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text" style="width:180px">Daftarkan User</span>
                                        </button>
                                    </div>
                                    <div class="text-center mt-2">
                                        <a href="<?= base_url('admin/userdatabase'); ?>" type="button" class="btn btn-lg btn-dark btn-icon-split">
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

    <!-- MODAL -->
    <div class="modal fade" id="areyousureModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousureModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areyousureModalLabel">Tambahkan User Baru (Mahasiswa)</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Apakah data yang dimasukkan sudah benar?</div>
                <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
            </div>
        </div>
    </div>