<div class="container">


  <div class="loader"></div>
  <script>
    function LoginClick(data) {
      $(".loader").fadeIn(200);
    }
  </script>
  <?php foreach ($web_motd as $wm) : ?>
    <?php
    if ($wm['web_motd'] == "") {
      $pengumuman = '';
    } else {
      $pengumuman = ' <div class="card shadow mb-4">
      <!-- Card Header - Accordion -->
      <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
      
        <h5 class="m-0 font-weight-bold text-danger"><strong>PENGUMUMAN</strong> <i class="fas fa-exclamation"></i></h5>
      </a>
      <!-- Card Content - Collapse -->
      <div class="collapse" id="collapseCardExample">
        <div class="card-body">
          ' . $wm['web_motd'] . '
        </div>
      </div>
    </div>';
    }

    ?>
  <?php endforeach; ?>




  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-7">
      <!-- <div class="col-xl-10 col-lg-12 col-md-9"> -->

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <!-- Kalo mau isi gambar disini ilangin
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
            <div class="col-lg">
              <!-- isi gambar ganti jadi lg-6-->
              <div class="p-5">
                <div class="text-center">
                  <?= $pengumuman ?>

                  <img class="mb-4" src="<?= base_url('assets/img/LOGO_BEM.jpg') ?>" alt="Logo BEM" width="100" height="100">
                </div>
                <div class="text-center">
                  <h1 class="h2 text-gray-900 mb-4">Sistem Terintegrasi BEM FK UWKS</h1>
                  <!-- <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1> -->
                  <h2 class="h4 text-gray-900 mb-4">Silahkan Login untuk lanjut..</h2>

                </div>
                <?= $this->session->flashdata('message'); ?>
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="npm" name="npm" placeholder="NPM" value="<?= set_value('npm'); ?>">
                    <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <!-- Kalau mau pake remember me inget cookie
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                  <div class="text-center">
                    <!--<button type="submit" onclick="loginClick(this)" class="btn btn-dark btn-user btn-block">
                      Login
                    </button> -->
                    <button type="submit" onclick="LoginClick(this)" class="btn btn-lg btn-secondary btn-icon-split">
                      <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                      </span>
                      <span class="text">Login</span>
                    </button>
                  </div>
                  <!-- <hr> -->
                  <!-- Kalo butuh login with google buka aja
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Lupa Password?</a>
                </div>
                <!-- <div class="text-center">
                    <a class="small" href="<?= base_url('auth/blocked'); ?>">Buat Akun!</a>
                  </div> -->
                <div class="text-center">
                  <a class="small">&copy; BEM FK UWKS <?= date('Y'); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>