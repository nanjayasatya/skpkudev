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


            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert"><?= validation_errors(); ?></div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <div class="card mb-2">
                <div class="card-body">
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
                                        <div class="text-center">
                                            <button class="btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="<?= base_url('admin/useredit/') . $ud['id']; ?>">
                                                    <div class="dropdown-item-icon">
                                                        <i class="fas fa-edit"></i>
                                                    </div>Data Lengkap
                                                </a>
                                                <a class="dropdown-item" href="<?= base_url('admin/userpasswordreset/') . $ud['id']; ?>">
                                                    <div class="dropdown-item-icon">
                                                        <i class="fas fa-key"></i>
                                                    </div>Reset Password
                                                </a>
                                            </div>
                                        </div>
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




    </main>