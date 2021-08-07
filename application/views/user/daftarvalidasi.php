<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-check"></i></div>
                                Validasi SKP B
                            </h1>
                            <div class="page-header-subtitle">Informasi status validasi SKP B mahasiswa</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Tekan "Ubah Data" untuk mengubah data SKP B yang akan di validasi</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <?= $this->session->flashdata('validasiulang'); ?>
            <?= $this->session->flashdata('deletevalidasiberhasil'); ?>
            <?= $this->session->flashdata('message'); ?>


            <div class="card">

                <div class="card-body">
                    <table id="userskpvalidation" class="table table-bordered table-hover dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <!-- <th>Tipe SKP</th>-->
                                <th>Keterangan</th>
                                <th>Tahun</th>
                                <th>Posisi</th>
                                <th>Bobot</th>
                                <th>Status</th>
                                <th>Action</th>
                                <!-- <th>Active</th> -->
                                <!--<th>Action</th> -->

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($skpuserpendingvalidation as $sud) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <!-- <td><?= $sud['tipe']; ?></td> -->
                                    <td><?= $sud['event']; ?></td>
                                    <td><?= $sud['tahun']; ?></td>
                                    <td><?= $sud['posisi']; ?></td>
                                    <td><?= $sud['bobot']; ?></td>
                                    <?php if ($sud['status'] == 0) {
                                        $vali = '<div class="badge bg-warning text-white rounded-pill">Menunggu Validasi</div>';
                                        $link = base_url('user/editskpdetails/') . $sud['id'];
                                        $deletevalidation = base_url('user/deletevalidation/') . $sud['id'];
                                        $button = '<button class="btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>';
                                        $delete = base_url('user/deletevalidation/') . $sud['id'];
                                    } else {
                                        if ($sud['status'] == 1) {
                                            $vali = '<div class="badge bg-green text-white rounded-pill">Validasi Diterima</div>';
                                            $link = '#';
                                            $button = '-';
                                            $delete = '-';
                                        } else {
                                            if ($sud['status'] == 2) {
                                                $vali = '<div class="badge bg-red text-white rounded-pill">Validasi Ditolak</div>';
                                                $link = base_url('user/editskpdetails/') . $sud['id'];
                                                $button = '<button class="btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>';
                                                $delete = base_url('user/deletevalidation/') . $sud['id'];
                                            }
                                        }
                                    }

                                    ?>
                                    <td>
                                        <div class="text-center"><?= $vali ?></div>
                                    </td>


                                    <td>
                                        <div class="text-center">
                                            <div class="dropdown">
                                                <?= $button ?>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="<?= $link ?>">
                                                        <div class="dropdown-item-icon">
                                                            <i class="fas fa-edit"></i>
                                                        </div>Ubah Data
                                                    </a>
                                                    <a class="dropdown-item" href="<?= $delete ?>" data-toggle="modal" data-target="#areyousureDeleteValidationModal-<?= $sud['id']; ?>">
                                                        <div class="dropdown-item-icon">
                                                            <i class="fas fa-trash"></i>
                                                        </div>Batal Validasi
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                                <div class="modal fade" id="areyousureDeleteValidationModal-<?= $sud['id']; ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousureDeleteValidationModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="areyousureDeleteValidationModalLabel">Batal Ajukan Validasi SKP</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">Apakah yakin membatalkan validasi SKP?

                                            </div>
                                            <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><a href="<?= $delete ?>" class="btn btn-danger">Lanjutkan</a></div>
                                        </div>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="text-center mb-5">
                    <a href="<?= base_url('user/inputskpmanual') ?> " class="btn btn-lg btn-success btn-icon-split">
                        <span class="icon text-white-10">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text" style="width:230px">Input Data SKP B Baru</span>
                    </a>
                </div>
            </div>
        </div>
    </main>