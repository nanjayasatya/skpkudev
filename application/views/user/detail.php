<div class="container">
    <div class="row justify-content-center">

        <!-- News Card -->
        <div class="col-lg-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h2 class="m-0 font-weight-bold text-dark"><?= $detail['title']; ?></h2>
                </div>
                <div class="card-body">

                    <h5 class="card-subtitle">Oleh : <?= $detail['author'] ?>, <?= $detail['date_created'] ?></h5>
                    <p class="card-text"><?= $detail['contents']; ?></p>
                    <!--<a class="btn btn-dark" href="<?= base_url('user/listPost'); ?>">Kembali</a> -->
                    <div class="mt-5">
                        <a href="<?= base_url('user/listPost'); ?>" class="btn btn-dark btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-left"></i>
                            </span>
                            <span class="text">Kembali</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>