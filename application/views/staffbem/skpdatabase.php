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
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form id="form-filter" class="form-horizontal">
                                <div class="form-group row">

                                    <div class="col-lg-2">
                                        <label for="angkatan" class="control-label">Angkatan</label>
                                        <?php echo $angkatan; ?>
                                    </div>

                                    <div class="col-lg-2">
                                        <label for="kelas" class="control-label">Kelas</label>
                                        <select class="form-control" name="kelas" id="kelas">
                                            <option value=""></option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label for="npm" class="control-label">NPM</label>
                                        <input type="text" class="form-control" id="npm">
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="name" class="control-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name">

                                    </div>

                                </div>
                                <div class="form-group mb-4">
                                    <div class="form-group d-flex align-items-center justify-content-between mb-0">

                                        <div class="text-center">
                                            <button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
                                            <button type="button" id="btn-reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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