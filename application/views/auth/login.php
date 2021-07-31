<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="mt-4 text-center">
                                    <img class="logobem mb-4" src="<?= base_url('assets/img/SKPKULOGO.png') ?>" alt="Logo BEM">

                                </div>
                                <style>
                                    .logobem {
                                        width: 80%;
                                        max-height: 300px;
                                    }
                                </style>
                                <div class="text-center">
                                    <!--<h2 class="font-weight-light my-4"><strong>Sistem Terintegrasi BEM FK UWKS</strong></h2>-->
                                </div>
                                <div class="card-body">
                                    <!-- Login form-->
                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                                        <!-- Form Group (email address)-->
                                        <?= $this->session->flashdata('message'); ?>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">NPM</label>
                                            <input class="form-control form-control-solid py-4" id="npm" name="npm" type="text" placeholder="Masukkan NPM..." />
                                            <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <!-- Form Group (password)-->
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control form-control-solid py-4" id="password" name="password" type="password" placeholder="Masukkan Password..." />
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                            
                                        </div>
                                        <!-- Form Group (login box)-->
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Lupa password?</a>
                                            
                                            <button type="submit" class="btn btn-primary">Login</button>
                                            
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                                         <a class="small" target="_blank" href="<?= base_url('assets/PEDOMAN_SKP-KU_BEM%20FK%20UWKS.pdf'); ?>">Pedoman SKP-KU</a>
                                         </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>