<div class="container">
<h1 class="h3 mb-4 text-gray-900 text-center">Berita Manager</h1>
<div class="alert alert-danger" role="alert">Sistem belum sempurna, Override lewat PHPmyadmin, gunakan hati-hati!</div>
    <div class="row justify-content-left">
        <div class="col-md-8">
            <h5>Tambahkan Berita Baru</h5>
            <form action="" method="post">
                <div class="form-group mb-4">
                    <!--<label for="title">Judul</label> -->
                    <input type="text" name="title" class="form-control" placeholder="Judul berita" value="<?= set_value('title'); ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">','</small>'); ?> 
                </div>
                <div class="form-group">
                    <!-- <label>Isi post</label> -->
                    <textarea name="contents" id="summernote" value="<?= set_value('contents'); ?>"></textarea>
                    <?= form_error('contents', '<small class="text-danger pl-3">','</small>'); ?> 
                </div>
                <button type="submit" class="btn btn-dark btn-block">Buat Berita</button>
                <a class="btn btn-dark btn-block" href="<?= base_url('admin/listPost'); ?>">Daftar Berita</a>
            </form>
        </div>
    </div>
</div>