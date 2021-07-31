<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 text-center">Web Maintenance</h1>


  <?= $this->session->flashdata('erroraktif'); ?>

  <?= $this->session->flashdata('message'); ?>

  <div class="text-center">
    <form action="<?= base_url('admin/webmaintenance/'); ?>" method="post">
      <h4 class="text-center">Masukkan password Admin untuk Aktif/Non-aktifkan Sistem Website</h4>
      <div class="form-group">
        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <button type="submit" class="btn btn-dark text-center" data><?= $this->session->flashdata('buttonaktif'); ?></button>
    </form>
  </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->