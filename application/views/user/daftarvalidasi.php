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
                                        $vali = '<p style="color:orange">Menunggu Validasi</p>';
                                        $link = base_url('user/editskpdetails/') . $sud['id'];
                                        $class = 'btn btn-warning btn-icon-split';
                                        $btnname = 'Ubah Data';
                                        $split_icons = 'fas fa-exclamation-triangle';
                                    } else {
                                        if ($sud['status'] == 1) {
                                            $vali = '<p style="color:green">Validasi Diterima</p>';
                                            $link = '#';
                                            $class = '';
                                            $btnname = '-';
                                            $split_icons = '';
                                        } else {
                                            if ($sud['status'] == 2) {
                                                $vali = '<p style="color:red">Validasi Ditolak</p>';
                                                $link = base_url('user/editskpdetails/') . $sud['id'];
                                                $class = 'btn btn-warning btn-icon-split';
                                                $btnname = 'Ubah Data';
                                                $split_icons = 'fas fa-exclamation-triangle';
                                            }
                                        }
                                    }

                                    ?>
                                    <td><?= $vali ?></td>


                                    <td>
                                        <!-- <a href="<?= $link ?>" class="<?= $class ?>"><?= $btnname ?> -->
                                        <div class="text-center">
                                            <a href="<?= $link ?>" class="<?= $class ?>">
                                                <span class="icon text-white-10">
                                                    <i class="<?= $split_icons ?>"></i>
                                                </span>
                                                <span class="text" style="width:120px"><?= $btnname ?></span>
                                            </a>
                                            </a>
                                        </div>
                                    </td>


                                    </td>



                                </tr>
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