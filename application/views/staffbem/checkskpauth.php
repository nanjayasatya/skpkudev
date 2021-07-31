<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i class="fas fa-fw fa-database"></i></div>
                                Check SKP Authentication
                            </h1>
                            <div class="page-header-subtitle">Informasi Keaslian Data SKP Mahasiswa</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">Melihat apakah data SKP yang diberikan Mahasiswa asli</div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <script type="text/javascript" src="<?= base_url('assets/js/html5qrcode/html5-qrcode.min.js') ?>"></script>
        <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
        <div class="container mt-n10">
            <div class="mt-3 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 justify-content-center">
                        <div class="form-group text-center mb-2">
                            <div style="width: 300px; display:inline-block; margin-left:-10px;" id="reader"></div>
                        </div>
                        <div class="text-center mb-4">
                            <input id="csrf_token " type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                            <br>
                            <div class="mt-1">
                                <a href="<?= base_url('staffbem/skpadatabase'); ?>" class="btn btn-lg btn-dark btn-icon-split">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-arrow-left"></i>
                                    </span>
                                    <span class="text" style="width:180px">Kembali</span>
                                </a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

    </main>

    <script type="text/javascript">
        var redirect = '../staffbem/checkskpauthconfirm';
        $.extend({
            redirectPost: function(location, args) {
                var form = '';
                var csrf = '';
                var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
                var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
                $.each(args, function(key, value) {
                    form += '<input type="hidden" name="' + key + '" value="' + value + '">';
                    csrf += '<input type="hidden" name="' + csrfName + '" value="' + csrfHash + '">';
                });
                $('<form action="' + location + '" enctype="multipart/form-data" method="post">' + form + csrf + '</form>').appendTo('body').submit();
            }
        });

        function onScanSuccess(qrCodeMessage) {
            // handle on success condition with the decoded message
            $.redirectPost(redirect, {
                resultcode: qrCodeMessage
            });
        }
        var html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: 250
            });
        html5QrcodeScanner.render(onScanSuccess);
    </script>







    <script type="text/javascript">
        $(function() {
            $('#tahun').datetimepicker({
                format: 'YYYY'
            });
        });
    </script>