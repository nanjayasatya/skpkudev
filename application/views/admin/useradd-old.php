<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-user"></i></div>
                                Input Data User Baru (Mahasiswa)
                            </h1>
                            <div class="page-header-subtitle">Input Data User Baru (Mahasiswa) untuk akses Website</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4"></div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10 mb-5">
            <div class="card">
                <div class="card-body mb-3">
                    <?= $this->session->flashdata('message'); ?>
                    <!-- <?php echo form_open_multipart('admin/useradd'); ?> -->
                    <form action="<?= base_url('admin/useradd/' . $this->uri->segment(3)); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <div class="row">
                            <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->

                            <!-- isi gambar <div class="col-lg-7"> -->
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Daftar User Baru</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('admin/useradd/'); ?> ">
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
                                            <div class="col-sm-6">
                                                <input type="text" maxtlength="2" class="form-control form-control-user" id="kelas" name="kelas" placeholder="Kelas" value="<?= set_value('kelas'); ?>">
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
                                        <div class="text-center">
                                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#areyousureModal">
                                                Daftarkan User
                                            </button>
                                            <a class="btn btn-dark btn-block" href="<?= base_url('admin/userdatabase'); ?>">Kembali</a>
                                        </div>


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
                    <h5 class="modal-title" id="areyousureModalLabel">Validasi SKP</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Apakah data yang dimasukkan sudah benar ?</div>
                <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
            console.log("halo");

        });
    </script>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>