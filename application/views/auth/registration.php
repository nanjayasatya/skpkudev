d
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
          
          <!-- isi gambar <div class="col-lg-7"> -->
              <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              </div>
              <form class="user" method="post" action="<?= base_url('auth/registration/'); ?> ">
              <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name'); ?>">
                  <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?> 
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?> 
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="npm" name="npm" placeholder="NPM" value="<?= set_value('npm'); ?>">
                  <?= form_error('npm', '<small class="text-danger pl-3">','</small>'); ?> 
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user" id="angkatan" name="angkatan" placeholder="Angkatan" value="<?= set_value('angkatan'); ?>">
                    <?= form_error('angkatan', '<small class="text-danger pl-3">','</small>'); ?> 
                  </div>
                  <div class="col-sm-6">
                    <input type="text" maxtlength="2" class="form-control form-control-user" id="kelas" name="kelas" placeholder="Kelas" value="<?= set_value('kelas'); ?>">
                    <?= form_error('kelas', '<small class="text-danger pl-3">','</small>'); ?> 
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1', '<small class="text-danger pl-3">','</small>'); ?> 
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-dark btn-user btn-block">
                  Daftarkan Akun
                </button>
                <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="<?= base_url(); ?>auth">Sudah punya akun? Masuk!</a>
              </div>
              
              <div class="text-center">
              <a class="small">&copy; 2020 BEM FK UWKS</a>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


