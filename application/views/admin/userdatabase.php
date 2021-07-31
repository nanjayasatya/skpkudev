<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-database"></i></div>
                                User Database (Mahasiswa)
                            </h1>
                            <div class="page-header-subtitle">Database User Mahasiswa</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4"></div>
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
                                                <!--<a href="<?= base_url('admin/useredit/') . $ud['id']; ?>" class="btn btn-danger">Data SKP A</a> -->
                                                <!-- <a href="" class="btn btn-danger">Delete</a> -->
                                                <a href="<?= base_url('admin/useredit/') . $ud['id']; ?>" class="btn btn-purple btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text" style="width:130px">Data Lengkap</span>
                                                </a>
                                                <br>
                                                <a href="<?= base_url('admin/userpasswordreset/') . $ud['id']; ?>" class="btn btn-danger btn-icon-split mt-2">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-exclamation"></i>
                                                    </span>
                                                    <span class="text" style="width:140px">Reset Password</span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center mb-5">
                            <a href="<?= base_url('admin/useradd') ?> " class="btn btn-lg btn-success btn-icon-split">
                                <span class="icon text-white-10">
                                    <i class="fas fa-plus"></i>
                                </span>
                                <span class="text" style="width:190px">Tambah User Baru</span>
                            </a>
                        </div>

                    </div>

                </div>


    </main>