<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-fluid">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                Mahasiswa - Profil
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <a class="nav-link active ml-0" href="<?= base_url('user'); ?>">Profil</a>
                <a class="nav-link" href="<?= base_url('user/changepassword'); ?>">Rubah Password</a>
            </nav>
            <hr class="mt-0 mb-4" />
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mt-4">
                        <div class="card-header">Foto</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="" />
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
                                    <input class="form-control" id="name" type="text" placeholder="" value="<?= $user['name']; ?>" readonly />
                                </div>

                                <!-- Form Group (email address)-->
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label class="small mb-1" for="npm">NPM</label>
                                        <input class="form-control" id="npm" type="text" placeholder="" value="<?= $user['npm']; ?>" readonly />
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label class="small mb-1" for="kelas">Kelas</label>
                                        <input class="form-control" id="kelas" type="text" placeholder="" value="<?= $user['angkatan'] . $user['kelas']; ?>" readonly />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="email">Email</label>
                                    <input class="form-control" id="email" type="text" placeholder="" value="<?= $user['email']; ?>" readonly />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>