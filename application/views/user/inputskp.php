<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-upload"></i></div>
                                Input Data SKP B
                            </h1>
                            <div class="page-header-subtitle">Input Data SKP B untuk di validasi dan masuk database BEM</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Input SKP B hanya untuk acara yang sudah masuk database BEM</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10 mb-5">
            <div class="card">
                <div class="card-body mb-3">
                    <?= $this->session->flashdata('message'); ?>
                    <?php echo form_open_multipart('user/inputskp'); ?>
                    <!--<form action="<?= base_url('user/inputskp/'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">-->
                    <form action="<?= base_url('user/editskpdetails/' . $this->uri->segment(3)); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                        <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                        <div class="row justify-content-center">
                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="name"><strong>Mahasiswa</strong></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="" value="<?= $user['name']; ?>" readonly>

                            </div>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <label for="npm"><strong>NPM</strong></label>
                                <input type="text" class="form-control" id="npm" name="npm" placeholder="" value="<?= $user['npm']; ?>" readonly>

                            </div>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <select name="event_org" id="event_org" onchange="EventOrg(this)" class="form-control">
                                    <option value="">Pilih Pelaksana</option>
                                    <?php foreach ($eventorg as $eo) : ?>
                                        <option value="<?= $eo['id'] ?>"> <?= $eo['pelaksana'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <script>
                                function EventOrg(data) {
                                    var event_org = document.getElementById('event_org');
                                    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
                                    var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';

                                    console.log(event_org.value);

                                    if (event_org) {
                                        $.ajax({
                                            type: 'POST',
                                            url: '<?php echo base_url('user/getEventTahun'); ?>',
                                            data: {
                                                [csrfName]: csrfHash
                                            },

                                            success: function(data) {
                                                document.getElementById("event_year").disabled = false;
                                                document.getElementById("event_data").disabled = true;
                                                document.getElementById("event_posisi").disabled = true;

                                                $('#event_year').html('<option value="">Pilih Tahun</option>');
                                                var dataObj = jQuery.parseJSON(data);
                                                console.log(data);
                                                if (dataObj) {
                                                    $(dataObj).each(function() {
                                                        var option = $('<option />');
                                                        option.attr('value', this.tahun).text(this.tahun);
                                                        $('#event_year').append(option);
                                                    });
                                                    $('#event_data').html('<option value="">Pilih Kegiatan</option>');

                                                } else {
                                                    $('#event_year').html('<option value="">Belum ada Input</option>');
                                                    $('#event_data').html('<option value="">Belum ada Input</option>');


                                                }
                                            }
                                        });
                                    }
                                }



                                function EventTahun(data) {
                                    var event_org = document.getElementById('event_org');
                                    var event_year = document.getElementById('event_year');
                                    var event_year_info = event_year.options[event_year.selectedIndex].text;
                                    var input_post_pelaksana = event_org.value;
                                    var input_post_tahun = event_year_info;
                                    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
                                    var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
                                    console.log(event_year_info);

                                    if (event_org) {
                                        $.ajax({
                                            type: 'POST',
                                            url: '<?php echo base_url('user/getEventData'); ?>',
                                            data: {
                                                [csrfName]: csrfHash,
                                                pelaksana: input_post_pelaksana,
                                                tahun: input_post_tahun
                                            },

                                            success: function(data) {

                                                $('#event_data').html('<option value="">Pilih Kegiatan</option>');
                                                var dataObj = jQuery.parseJSON(data);
                                                console.log(data);
                                                if (dataObj) {
                                                    $(dataObj).each(function() {

                                                        document.getElementById("event_data").disabled = false;

                                                        var option = $('<option />');
                                                        option.attr('value', this.name).text(this.name);
                                                        $('#event_data').append(option);
                                                    });
                                                } else {

                                                    $('#event_data').html('<option value="">Belum ada Input</option>');

                                                }
                                            }
                                        });
                                    }
                                }

                                function EventData(data) {
                                    document.getElementById("event_posisi").disabled = false;
                                }
                            </script>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <select name="event_year" id="event_year" onchange="EventTahun(this)" class="form-control" disabled>
                                    <option value="">Pilih Tahun</option>


                                </select>
                                <?= form_error('event_year', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>


                            <div class="form-group col-lg-7 text-center mt-3">
                                <select name="event_data" id="event_data" onchange="EventData(this)" class="form-control" disabled>
                                    <option value="">Pilih Kegiatan</option>



                                </select>
                                <?= form_error('event_data', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group col-lg-7 text-center mt-3">
                                <select name="event_posisi" id="event_posisi" class="form-control" disabled>
                                    <option value="">Pilih Posisi</option>
                                    <?php foreach ($eventposisi as $ep) : ?>
                                        <option value="<?= $ep['posisi'] ?>"> <?= $ep['posisi'] ?> </option>
                                    <?php endforeach; ?>

                                </select>
                                <?= form_error('event_posisi', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!-- <div class="form-group col-lg-7 text-center mt-3">
          <label for="event">Nama Kegiatan/Keterangan</label>
          <input type="text" class="form-control" id="event" name="event" placeholder="" value="<?= set_value('event'); ?>">
          <?= form_error('event', '<small class="text-danger pl-3">', '</small>'); ?>
        </div> -->
                            <!--<div class="form-group col-lg-7 text-center">
          <label for="posisi">Posisi</label>
          <input type="text" class="form-control" id="posisi" name="posisi" placeholder="" value="<?= set_value('posisi'); ?>">
          <?= form_error('posisi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>-->
                            <!--<div class="form-group col-lg-7 text-center">
          <label for="tahun">Tahun</label>
          <input type="number" class="form-control" id="tahun" name="tahun" placeholder="" value="<?= set_value('tahun'); ?>">
          <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>-->
                            <div class="form-group col-lg-7 text-center">
                                <label for="bobot">Bobot</label>
                                <input type="number" class="form-control" id="bobot" name="bobot" placeholder="" value="<?= set_value('bobot'); ?>">
                                <?= form_error('bobot', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!-- <div class="text-center col-lg-7">
                     <img src="<?= base_url('assets/img/image-thumbnail.png'); ?>" class="img-thumbnail"></img>
                    </div> -->
                            <div class="text-center col-lg-7">
                                <img id="output" src="<?= base_url('assets/img/image-thumbnail.png'); ?>" class="img-thumbnail" />
                            </div>
                            <div class="custom-file col-lg-7 text-center mt-3 mb-5">
                                <input type="file" class="custom-file-input" id="image" name="image" onchange="loadFile(event)">
                                <label label class="custom-file-label" for="image">JPG/PNG</label>
                                <p class="text-center mt-2">File Bukti SKP tidak melebihi 2MB</p>
                                <?= form_error('image', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                        </div>
                        <div class="text-center mt-3">
                            <button type="button" data-toggle="modal" data-target="#areyousureModal" class="btn btn-lg btn-success btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text" style="width:150px">Validasi SKP</span>
                            </button>
                        </div>
                </div>
            </div>
        </div>

    </main>

    <!-- MODAL -->
    <div class="modal fade" id="areyousureModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="areyousureModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="areyousureModalLabel">Validasi SKP</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">Apakah data yang dimasukkan sudah benar ?</div>
                <div class="modal-footer"><button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button><button class="btn btn-success" type="submit">Lanjutkan</button></div>
            </div>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
            console.log("halo");

        });
    </script>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>