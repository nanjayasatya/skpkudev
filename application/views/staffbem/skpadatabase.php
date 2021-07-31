<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-database"></i></div>
                                Database SKP A
                            </h1>
                            <div class="page-header-subtitle">Informasi lengkap mengenai Data SKP A Mahasiswa</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Tekan tombol "Data SKP A" untuk melihat Data SKP A Mahasiswa terkait!</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="row">
                <!--<div class="col-xxl-4 col-xl-12 mb-4">-->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
                    <?php endif; ?>


                    <?= $this->session->flashdata('message'); ?>

                    <div class="card h-100">
                        <div class="card-header h3"><strong>Daftar Mahasiswa</strong></div>
                        <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                            <table id="userdatabase" class="table table-bordered table-hover dataTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NPM</th>
                                        <th>Angkatan & Kelas</th>
                                        <th>Email</th>
                                        <!-- <th>Active</th> -->
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($userDatabaseMahasiswa as $ud) : ?>
                                        <tr>
                                            <th scope="row"><?= $i ?></th>
                                            <td><?= $ud['name']; ?></td>
                                            <td><?= $ud['npm']; ?></td>
                                            <td><?= $ud['angkatan'] . $ud['kelas']; ?></td>
                                            <td><?= $ud['email']; ?></td>
                                            <!--<td><?= $ud['is_active']; ?></td> -->
                                            <td>
                                                <!--<a href="<?= base_url('staffbem/inputskpauser/') . $ud['id']; ?>" class="btn btn-danger">Data SKP A</a> -->
                                                <!-- <a href="" class="btn btn-danger">Delete</a> -->
                                                <a href="<?= base_url('staffbem/inputskpauser/') . $ud['id']; ?>" class="btn btn-purple btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text" style="width:120px">Data SKP A</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>


    </main>