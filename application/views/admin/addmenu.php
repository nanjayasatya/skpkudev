

    
    

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 text-center">Menu Management</h1>
          <div class="alert alert-danger" role="alert">Sistem belum sempurna, Override lewat PHPmyadmin, gunakan hati-hati!</div>
          <div class="alert alert-danger" role="alert">Tolong jangan diedit tanpa sepengetahuan webmaster!</div>
          
          <div class="row">
            <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">',
            '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>
            
            <a href="" class="btn btn-dark mb-3" data-toggle="modal" data-target="#newMenuModal">Tambahkan Menu Baru</a> 
            <table class="table table-hover">
            <thead>
              <tr>
                 <th scope="col">No</th>
                 <th scope="col">Menu</th>
                 <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach($menu as $m) : ?>
               <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $m['menu']; ?></td>
                <td>
                <a href="" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                </td>
               </tr>
               <?php $i++; ?>
              <?php endforeach; ?>
             </tbody>
            </table>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<!-- Button trigger modal -->

<!-- START MODAL -->
<!-- newMenuModal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Tambahkan Menu Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/addmenu');?>" method="post">
      <div class="modal-body">
        <div class="form-group">
        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
  </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-dark">Tambahkan</button>
      </div>
      </form>
    </div>
  </div>
  
  <!-- END MODAL -->
  </div> 
</div>