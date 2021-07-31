<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-dark mb-5">
                <div class="card-body">
                    <a href="<?= base_url('staffbem/editnews/' . $this->uri->segment(3)); ?>" class="btn btn-danger float-right">Edit Berita</a>
                    <h2 class="card-title"><?= $detail['title']; ?></h2>
                    <h5 class="card-subtitle">Oleh : <?= $detail['author'] ?>, <?= $detail['date_created'] ?></h5>
                    <p class="card-text"><?= $detail['contents']; ?></p>
                    <a class="btn btn-dark" href="<?= base_url('staffbem/listPost'); ?>">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>