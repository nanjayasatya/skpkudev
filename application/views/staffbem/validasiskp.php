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
                            <div class="page-header-subtitle">Menerima atau menolak pengajuan validasi SKP B mahasiswa</div>
                        </div>
                        <!--<div class="col-12 col-xl-auto mt-4">Pastikan data yang diinput mahasiswa sudah benar!</div> -->
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <?= $this->session->flashdata('message'); ?>
            <div class="card mb-3">
                <div class="card-header h3"><strong>Daftar Validasi SKP B</strong></div>
                <div class="card-body mb-3">
                    <table id="listvalidasi" class="table table-bordered table-hover dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Keterangan</th>
                                <th>Tahun</th>
                                <th>Posisi</th>
                                <th>Bobot</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($listvalidasi as $lv) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $lv['name']; ?></td>
                                    <td><?= $lv['npm']; ?></td>
                                    <td><?= $lv['event']; ?></td>
                                    <td><?= $lv['tahun']; ?></td>
                                    <td><?= $lv['posisi']; ?></td>
                                    <td><?= $lv['bobot']; ?></td>
                                    <?php if ($lv['status'] == 0) {
                                        $vali = '<div class="badge bg-warning text-white rounded-pill">Menunggu Validasi</div>';
                                    }

                                    ?>
                                    <td><?= $vali ?></td>
                                    <td>
                                        <!-- <a href="<?= base_url('staffbem/detailvalidasi/') . $lv['id']; ?>" class="btn btn-danger">Data Lengkap</a> -->
                                        <a href="<?= base_url('staffbem/detailvalidasi/') . $lv['id']; ?>" class="btn btn-purple btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info-circle"></i>
                                            </span>
                                            <span class="text" style="width:120px">Data Lengkap</span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <p class="text-lg text-center mt-3" style="color:red">*Pastikan data yang diinput sudah benar!</p>
                </div>
            </div>
        </div>
    </main>