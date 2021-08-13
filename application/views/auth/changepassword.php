<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="mt-4 mb-1 text-center">
                                    <img class="logobem" src="<?= base_url('assets/img/SKPKULOGO.png') ?>" alt="Logo BEM">
                                </div>
                                <style>
                                    .logobem {
                                        width: 80%;
                                        max-height: 300px;
                                    }
                                </style>
                                <div class="card-body">
                                    <div class="text-center mt-4">
                                        <h1>Lupa Password</h1>

                                        <?= $this->session->flashdata('message'); ?>
                                        <p class="mt-4 mb-4">Silahkan masukan password yang baru</p>
                                        <form class="user" method="post" action="<?= base_url('auth/changepassword'); ?>">
                                            <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />

                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukan password baru..">
                                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Masukan kembali password baru..">
                                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Reset Password
                                            </button>
                                        </form>
                                        <div class="mt-4">
                                            <a href="<?= base_url(); ?>">Kembali ke login</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>