<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Berita Manager</h1>
    <div class="alert alert-danger" role="alert">Sistem belum sempurna, Override lewat PHPmyadmin, gunakan hati-hati!</div>
    <div class="row justify-content-left">
        <div class="col-md-8">
            <h5>Edit Berita</h5>
            <?php foreach ($newsdata as $nd) : ?>
                <form action="" method="post">
                    <div class="form-group mb-4">
                        <!--<label for="title">Judul</label> -->
                        <input type="text" name="title" class="form-control" placeholder="Judul berita" value="<?= $nd['title']; ?>">
                        <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <!-- <label>Isi post</label> -->
                        <textarea name="contents" id="summernote" value="<?= $nd['contents']; ?>"></textarea>
                        <?= form_error('contents', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-dark btn-block">Edit Berita</button>
                    <a class="btn btn-dark btn-block" href="<?= base_url('staffbem/detailPost/' . $this->uri->segment(3)) ?>">Kembali</a>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>