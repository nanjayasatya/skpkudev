<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-database"></i></div>
                                SKP Database
                            </h1>
                            <div class="page-header-subtitle">Informasi lengkap mengenai Data SKP A & B Mahasiswa</div>
                        </div>
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
                    <table id="skpdatabasebem" class="table table-bordered table-hover dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">NPM</th>
                                <th class="text-center">Angkatan & Kelas</th>
                                <th class="text-center">Total Poin SKP</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>

            </div>


    </main>