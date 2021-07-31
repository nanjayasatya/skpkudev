<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-sitemap"></i></div>
                                BEM Status
                            </h1>

                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card">
                        <div class="card-header">TTD Gubernur BEM</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile mb-2" src="<?= $bemstatus['gubem_ttd']; ?>" alt="" />
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mt-2 mb-3">Jika ada kesalahan segera upload dengan TTD yang benar.</div>
                            <!-- Profile picture upload button-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <form class="user" method="post" action="<?= base_url('admin/bemstatus/'); ?> ">
                            <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                            <div class="card-header">Data BEM</div>
                            <div class="card-body">

                                <!-- Form Group (username)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="gubem_name">Nama Lengkap Gubernur BEM</label>
                                    <input class="form-control" id="gubem_name" name="gubem_name" type="text" placeholder="" value="<?= $bemstatus['gubem_name']; ?>" />
                                    <?= form_error('gubem_name', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <!-- Form Group (email address)-->
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="small mb-1" for="gubem_npm">NPM</label>
                                        <input class="form-control" id="gubem_npm" name="gubem_npm" type="text" placeholder="" value="<?= $bemstatus['gubem_npm']; ?>" />
                                        <?= form_error('gubem_npm', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="small mb-1" for="tahun_bakti">Tahun Bakti</label>
                                        <input class="form-control" id="tahun_bakti" name="tahun_bakti" type="text" placeholder="" value="<?= $bemstatus['tahun_bakti']; ?>" />
                                        <?= form_error('tahun_bakti', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                </div>
                                <!-- <div class="form-group">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input class="form-control" id="email" type="text" placeholder="" value="<?= $user['email']; ?>" readonly />
                                </div> -->
                                <div class="text-center mt-1 mb-2">
                                    <button type="button" data-toggle="modal" data-target="#areyousurevalidateModal" class="btn btn-success btn-icon-split mt-2">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text" style="width:180px">Simpan Perubahan</span>
                                    </button>
                                </div>


                            </div>

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
                    <h5 class="modal-title" id="areyousurevalidateModalLabel">Simpan Perubahan BEM Status</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Apakah data yang dimasukkan sudah benar?</div>
                <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
            </div>
        </div>
    </div>