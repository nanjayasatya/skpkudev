<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center">Penolakan Validasi SKP</h1>
    <div class="alert alert-danger" role="alert">Sistem belum sempurna, Override lewat PHPmyadmin, gunakan hati-hati!</div>


    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">









            <?php foreach ($detailskpvalidation as $dv) : ?>


                <form class="mt-3" action="<?= base_url('staffbem/rejectvalidasi/' . $this->uri->segment(3)); ?>" method="post">


                    <div class="form-group">
                        <label for="name">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= $dv['name']; ?>" readonly>
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm" placeholder="" value="<?= $dv['npm']; ?>" readonly>
                        <?= form_error('npm', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe SKP</label>
                        <input type="text" class="form-control" id="tipe" name="tipe" placeholder="" value="<?= $dv['tipe']; ?>" readonly>
                        <?= form_error('tipe', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="event">Keterangan</label>
                        <input type="text" class="form-control" id="event" name="event" placeholder="" value="<?= $dv['event']; ?>" readonly>
                        <?= form_error('event', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="posisi">Posisi</label>
                        <input type="text" class="form-control" id="posisi" name="posisi" placeholder="" value="<?= $dv['posisi']; ?>" readonly>
                        <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="" value="<?= $dv['tahun']; ?>" readonly>
                        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="bobot">Bobot</label>
                        <input type="number" class="form-control" id="bobot" name="bobot" placeholder="" value="<?= $dv['bobot']; ?>" readonly>
                        <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <img src="<?= base_url('assets/user_directory/') . $dv['npm'] . "/" . $dv['skp_proof']; ?>" class="img-thumbnail"></img>
                    <div class="form-group mt-5">
                        <label for="rejection_reason">Alasan Penolakan</label>
                        <input type="text" class="form-control" id="rejection_reason" name="rejection_reason" placeholder="" value="">
                        <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="row mt-3 mb-5">
                        <div class="col-lg 7">
                            <a href="<?= base_url('staffbem/validasiskp'); ?>" type="button" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-left"></i>
                                </span>
                                <span class="text" style="width:100px">Kembali</span>
                            </a>
                            <button type="button" data-toggle="modal" data-target="#areyousurerejectvalidateModal" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text" style="width:150px">Validasi Ditolak</span>
                            </button>

                        </div>
                    </div>



                <?php endforeach; ?>



        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Button trigger modal -->

<!-- START MODAL -->


<div class="modal fade" id="areyousurerejectvalidateModal" tabindex="-1" role="dialog" aria-labelledby="areyousurerejectvalidateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="areyousurerejectvalidateModalLabel">Penolakan Validasi SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah yakin ingin menolak validasi SKP mahasiswa ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-dark">Ya, lanjutkan</button>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL -->