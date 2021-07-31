<div class="container">
    <h1 class="text-center">Berita</h1>
    <?= $this->session->flashdata('message'); ?>
    <a class="btn btn-dark" href="<?= base_url('staffbem/newsmanager'); ?>">Buat Berita</a>
    <div class="row mt-5">
    <?php
        

    ?>
    <?php foreach($daftar as $da) :  ?>
        <div class="col-md-12 mb-5">
            <div class="card border-dark mb-1" >
            <div class="card-header"><h5><?= $da['title']; ?><h5></div>
            <div class="card-body text-dark">
                    <!--<h3 class="card-title"><?= $da['title']; ?></h3> -->
                    <p>Oleh : <?= $da['author']?>, <?= $da['date_created']?></p>
                    
                    <p class="card-text"><?= word_limiter($da['contents'], 20); ?></p>
                    <a class="btn btn-dark mt-1" href="<?= base_url('staffbem/detailPost/') . $da['id']; ?>">Selengkapnya</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <?= $this->pagination->create_links(); ?>
    </div>
</div>
