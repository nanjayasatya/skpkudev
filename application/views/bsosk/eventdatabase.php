<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800 text-center">Event Database</h1>
  <div class="alert alert-danger" role="alert">Sistem belum sempurna, Override lewat PHPmyadmin, gunakan hati-hati!</div>
  <!-- Tabel SKP A -->
  <h3 class="text-center">Data Event</h3>
  <table id="eventdata" class="display" style="width:100%">
    <thead>
      <tr>
        <th>No</th>
        <!--<th>Tipe SKP</th> -->
        <th>Keterangan/Nama Event</th>
        <th>Tahun</th>
        <!--<th>Posisi</th> -->
        <!-- <th>Bobot</th> -->
        <!-- <th>Active</th> -->
        <!--<th>Action</th> -->

      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($eventdata as $ed) : ?>
        <tr>
          <th scope="row"><?= $i ?></th>
          <td><?= $ed['name']; ?></td>
          <td><?= $ed['tahun']; ?></td>


        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<div class="text-center mt-5">
  <a href="<?= base_url('bsosk/inputeventdata'); ?>" type=" button" class="btn btn-success btn-icon-split">
    <span class="icon text-white-50">
      <i class="fas fa-check"></i>
    </span>
    <span class="text">Input & Validasi Data Event</span>
  </a>
</div>


<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
  $(document).ready(function() {
    $('#eventdata').DataTable({
      " lengthMenu": [3, 5]
    });
  });
</script>