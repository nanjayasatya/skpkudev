

    
    

        <!-- Begin Page Content -->
        
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 text-center">User Password Reset</h1>
          <?php foreach($userfulldata as $ud) : ?> 
            <h5 class="text-center">Mahasiswa : <?= $ud['name']; ?></h5>
                 
            
            

          <div class="row mt-3 justify-content-center">
                <div class="col-lg-6 text-center">
                <?= $this->session->flashdata('message'); ?>
                    <form action="<? base_url('admin/passwordedit/'.$this->uri->segment(3));?>" method="post">
                         <div class="form-group">
                         <label for="new_password1">Password Baru</label>
                         <input type="password" class="form-control" id="new_password1" name="new_password1" placeholder="">
                         <?= form_error('new_password1', '<small class="text-danger pl-3">','</small>'); ?>   
                        </div>
                         <div class="form-group">
                         <label for="new_password2">Ulangi Password Baru</label>
                         <input type="password" class="form-control" id="new_password2" name="new_password2" placeholder="">
                         <?= form_error('new_password2', '<small class="text-danger pl-3">','</small>'); ?>   
                        </div>
                         <div class="text-center">
                         <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#areyousureModal">
                              Reset Password
                              </button>
                             <a class="btn btn-dark btn-block" href="<?= base_url('admin/useredit/'.$this->uri->segment(3)); ?>">Kembali</a>
                         </div>
                         
                <!-- </form>  -->

                </div>
                <?php endforeach; ?>
          </div>
          
        </div>
        <!-- /.container-fluid -->

      </div>
        
      <!-- End of Main Content -->

      <!-- MODAL RESET PASSWORD -->
      
  <div class="modal fade" id="areyousureModal" tabindex="-1" role="dialog" aria-labelledby="areyousureModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="areyousureModalLabel">Reset Password User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin mereset password user ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-dark">Ya, lanjutkan</button>
      </div>
    </div>
  </div>
</div>


      <!-- END MODAL -->

      