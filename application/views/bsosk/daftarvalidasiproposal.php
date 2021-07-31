<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-list"></i></div>
                                Status Validasi Proposal Kegiatan
                            </h1>
                            <div class="page-header-subtitle">Informasi status validasi Proposal Kegiatan BSO/SK</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Tekan "Edit Details" untuk mengubah data proposal kegiatan yang akan di validasi.</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <?= $this->session->flashdata('validasi'); ?>
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
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($proposalvalidationpending as $pvd) : ?>
                                <tr>
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $pvd['name']; ?></td>
                                    <td><?= $pvd['tahun']; ?></td>
                                    <?php if ($pvd['status'] == 0) {
                                        $vali = '<p style="color:orange">Menunggu Validasi BEM</p>';
                                        $link = base_url('bsosk/editproposaldetails/') . $pvd['id'];
                                        $class = 'btn btn-warning btn-icon-split';
                                        $btnname = 'Edit Details';
                                        $split_icons = 'fas fa-exclamation-triangle';
                                    } else {
                                        if ($pvd['status'] == 1) {
                                            $vali = '<p style="color:green">Validasi Diterima</p>';
                                            $link = '#';
                                            $class = '';
                                            $btnname = '-';
                                            $split_icons = '';
                                        } else {
                                            if ($pvd['status'] == 2) {
                                                $vali = '<p style="color:red">Validasi Ditolak</p>';
                                                $link = base_url('bsosk/editproposaldetails/') . $pvd['id'];
                                                $class = 'btn btn-warning btn-icon-split';
                                                $btnname = 'Edit Details';
                                                $split_icons = 'fas fa-exclamation-triangle';
                                            } else {
                                                if ($pvd['status'] == 3) {
                                                    $vali = '<p style="color:orange">Menunggu Validasi DPM</p>';
                                                    $link = base_url('bsosk/editproposaldetails/') . $pvd['id'];
                                                    $class = 'btn btn-warning btn-icon-split';
                                                    $btnname = 'Edit Details';
                                                    $split_icons = 'fas fa-exclamation-triangle';
                                                } else {
                                                    if ($pvd['status'] == 4) {
                                                        $vali = '<p style="color:orange">Menunggu Pengarsipan</p>';
                                                        $link = base_url('bsosk/proposalarchive/') . $pvd['id'];
                                                        $class = 'btn btn-warning btn-icon-split';
                                                        $btnname = 'Arsipkan Proposal';
                                                        $split_icons = 'fas fa-upload';
                                                    } else {
                                                        if ($pvd['status'] == 5) {
                                                            $vali = '<p style="color:orange">Menunggu Validasi BEM (Pengarsipan)</p>';
                                                            $link = base_url('bsosk/editproposalarchivedetails/') . $pvd['id'];
                                                            $class = 'btn btn-warning btn-icon-split';
                                                            $btnname = 'Edit Details';
                                                            $split_icons = 'fas fa-exclamation-triangle';
                                                        } else {
                                                            if ($pvd['status'] == 6) {
                                                                $vali = '<p style="color:orange">Menunggu Validasi DPM (Pengarsipan)</p>';
                                                                $link = base_url('bsosk/editproposalarchivedetails/') . $pvd['id'];
                                                                $class = 'btn btn-warning btn-icon-split';
                                                                $btnname = 'Edit Details';
                                                                $split_icons = 'fas fa-exclamation-triangle';
                                                            } else {
                                                                if ($pvd['status'] == 7) {
                                                                    $vali = '<p style="color:red">Validasi Ditolak (Pengarsipan)</p>';
                                                                    $link = base_url('bsosk/editproposalarchivedetails/') . $pvd['id'];
                                                                    $class = 'btn btn-warning btn-icon-split';
                                                                    $btnname = 'Edit Details';
                                                                    $split_icons = 'fas fa-exclamation-triangle';
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
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
            </div>
        </div>
    </main>