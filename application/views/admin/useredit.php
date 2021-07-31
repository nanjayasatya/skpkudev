<div id="layoutSidenav_content">
  <main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
      <div class="container">
        <div class="page-header-content pt-4">
          <div class="row align-items-center justify-content-between">
            <div class="col-auto mt-4">
              <h1 class="page-header-title">
                <div class="page-header-icon"><i class="fas fa-fw fa-database"></i></div>
                Data Mahasiswa
              </h1>
              <div class="page-header-subtitle">Informasi Mahasiswa terkait</div>
            </div>
            <div class="col-12 col-xl-auto mt-4">Ubah data Mahasiswa</div>
          </div>
        </div>
      </div>
    </header>
    <!-- Main page content-->

    <div class="container mt-n10">
      <?= $this->session->flashdata('message'); ?>
      <?php foreach ($userfulldata as $ufd) : ?>
      <?php endforeach; ?>

      <div class="row">
        <div class="col-xl-4">
          <!-- Profile picture card-->
          <div class="card mt-4">
            <div class="card-header">Foto</div>
            <div class="card-body text-center">
              <!-- Profile picture image-->
              <img class="img-account-profile rounded-circle mb-2" src="<?= base_url('assets/img/profile/') . $ufd['image']; ?>" alt="" />
              <!-- Profile picture help block-->
              <div class="small font-italic text-muted mb-5">Saat ini sistem foto masih belum bisa digunakan.</div>
              <!-- Profile picture upload button-->
            </div>
          </div>
        </div>
        <div class="col-xl-8">

          <!-- Account details card-->
          <div class="card mb-4 mt-4">
            <div class="card-header">Data Mahasiswa</div>
            <div class="card-body">
              <form action="<?= base_url('admin/useredit/' . $this->uri->segment(3)); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                <!-- Form Group (username)-->

                <div class="form-group">
                  <label class="small mb-1" for="name">Nama Lengkap</label>
                  <input class="form-control" id="name" name="name" ntype="text" placeholder="" value="<?= $ufd['name']; ?>" />
                  <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <!-- Form Group (email address)-->
                <div class="row">
                  <div class="form-group col-lg-6">
                    <label class="small mb-1" for="npm">NPM</label>
                    <input class="form-control" id="npm" name="npm" type="text" placeholder="" value="<?= $ufd['npm']; ?>" />
                    <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group col-lg-3">
                    <label class="small mb-1" for="kelas">Angkatan</label>
                    <input class="form-control" id="angkatan" name="angkatan" type="text" placeholder="" value="<?= $ufd['angkatan']; ?>" />
                    <?= form_error('angkatan', '<small class="text-danger pl-3">', '</small>'); ?>

                  </div>
                  <div class="form-group col-lg-3">
                    <label class="small mb-1" for="kelas">Kelas</label>
                    <input class="form-control" id="kelas" name="kelas" type="text" placeholder="" value="<?= $ufd['kelas']; ?>" />
                    <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="small mb-1" for="email">Email</label>
                  <input class="form-control" id="email" name="email" type="text" placeholder="" value="<?= $ufd['email']; ?>" />
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

            </div>
          </div>
        </div>
        <div class="col-xxl-4">
          <div class="text-center mb-2">
            <button type="button" data-toggle="modal" data-target="#areyousureModal" class="btn btn-lg btn-success btn-icon-split">
              <span class="icon text-white-10">
                <i class="fas fa-save"></i>
              </span>
              <span class="text" style="width:200px">Simpan Perubahan</span>
            </button>
          </div>
          <div class="text-center mb-5">
            <a href="<?= base_url('admin/userdatabase'); ?>" class="btn btn-lg btn-dark btn-icon-split">
              <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
              </span>
              <span class="text" style="width:200px">Kembali</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>

  <div class="modal fade" id="areyousureModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousureModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="areyousureModalLabel">Ubah Data Mahasiswa</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        <?php echo form_open_multipart('admin/useredit/' . $this->uri->segment(3)); ?>

        <div class="modal-body">Apakah data yang dimasukkan sudah benar ?</div>
        <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
      </div>
    </div>
  </div>