<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                Staff BEM Internal - Ubah Password
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-4">
            <!-- Account page navigation-->
            <div class="row">

                <div class="col-xl-8">
                    <div class="card mb-4">

                        <div class="card-body">
                            <?= $this->session->flashdata('message'); ?>
                            <form action="<? base_url('user/changepassword'); ?>" method="post">
                                <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />

                                <!-- CHANGE PASSWORD MODAL -->
                                <div class="modal fade" id="ChangePasswordModal" tabindex="-1" role="dialog" aria-labelledby="ChangePasswordModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ChangePasswordModalLabel">Ubah Password</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">Apakah password yang dimasukkan sudah benar ?
                                            </div>
                                            <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button type="submit" class="btn btn-danger">Lanjutkan</button></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="current_password">Password Lama</label>
                                    <input class="form-control" id="current_password" name="current_password" type="password" placeholder="" value="" />
                                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="new_password1">Password Baru</label>
                                    <input class="form-control" id="new_password1" name="new_password1" type="password" placeholder="" value="" />
                                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="new_password2">Ulangi Password Baru</label>
                                    <input class="form-control" id="new_password2" name="new_password2" type="password" placeholder="" value="" />
                                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div class="text-center">

                                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#ChangePasswordModal">Ubah Password</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </main>