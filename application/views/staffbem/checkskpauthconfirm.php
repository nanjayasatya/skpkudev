<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-fw fa-database"></i></div>
                                Data SKP A
                            </h1>
                            <div class="page-header-subtitle">Informasi Data SKP A Mahasiswa terkait</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Ubah data/Hapus data SKP A Mahasiswa</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->

        <div class="container mt-n10">
            <?= $this->session->flashdata('message'); ?>
            <?php foreach ($userdata as $uda) : ?>
            <?php endforeach; ?>
            <!-- TABEL SKP A -->
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mt-4">
                        <div class="card-header">Foto</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="<?= base_url('assets/img/profile/') . $uda['image']; ?>" alt="" />
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-5">Jika ada kesalahan segera hubungi bagian INFOKOM.</div>
                            <!-- Profile picture upload button-->
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4 mt-4">
                        <div class="card-header">Data Mahasiswa</div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (username)-->
                                <div class="form-group">
                                    <label class="small mb-1" for="name">Nama Lengkap</label>
                                    <input class="form-control" id="name" type="text" placeholder="" value="<?= $uda['name']; ?>" readonly />
                                </div>

                                <!-- Form Group (email address)-->
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="small mb-1" for="npm">NPM</label>
                                        <input class="form-control" id="npm" name="npm" type="text" placeholder="" value="<?= $uda['npm']; ?>" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="small mb-1" for="kelas">Kelas</label>
                                        <input class="form-control" id="kelas" type="text" placeholder="" value="<?= $uda['angkatan'] . $uda['kelas']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input class="form-control" id="email" type="text" placeholder="" value="<?= $uda['email']; ?>" readonly />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>









    <script type="text/javascript">
        $(function() {
            $('#tahun').datetimepicker({
                format: 'YYYY'
            });
        });
    </script>