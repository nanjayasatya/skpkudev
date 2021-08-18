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
                    <table id="listvalidasiskp" class="table table-bordered table-hover dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">NPM</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Tahun</th>
                                <th class="text-center">Posisi</th>
                                <th class="text-center">Bobot</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <p class="text-lg text-center mt-3" style="color:red">*Pastikan data yang diinput sudah benar!</p>
                </div>
            </div>
        </div>
    </main>