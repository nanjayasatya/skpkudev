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
                    <p class="mt-4 mb-4">Silahkan masukan email yang terhubung dengan akun SKP-KU untuk reset password</p>
                    <form class="user" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
                      <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                      <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email.." value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
                      <button type="submit" class="btn btn-primary btn-user btn-block" class="mt-2">
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