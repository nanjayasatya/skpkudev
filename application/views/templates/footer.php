<!-- FOOTER -->
<footer class="footer mt-auto footer-light">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 small">Copyright &copy; SKP-KU <a href="https://bemfkuwks.com">BEM FK UWKS</a> <?= date('Y'); ?></div>
            <div class="col-md-6 text-md-right small">
                <p>Proudly Designed & Developed by <a href="https://instagram.com/nanjayasatya">Nanjaya Satya</a></p>
            </div>
        </div>
    </div>
</footer>
</div>



</div>

</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('vendor/sb/dist/js/scripts.js') ?>"></script>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>

<!-- ROW REORDER -->
<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
<!--<script src="<?= base_url('assets/js/skpku-datatables-baru.js'); ?>"></script>-->

<script type="text/javascript">
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
        $("#userskpa").DataTable({
            "paging": false,
            "ordering": false,
            "info": false,
            "searching": false,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian-Alternative.json"
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });

    var userdatabase;
    var skpdatabasebem;
    var listvalidasiskpbem;
    var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
    var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
    $(document).ready(function() {

        //datatables
        userdatabase = $('#userdatabase').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "user_ajax_list",
                "type": "POST",
                "data": {
                    "csrf_bemfkuwks": csrfHash
                },
            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": [0], //first column / numbering column
                "orderable": false, //set not orderable
            }, ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian-Alternative.json"
            },
            "responsive": true,
            "rowReorder": {
                "selector": "td:nth-child(2)",
            }

        });

    });

    $(document).ready(function() {

        //datatables
        skpdatabasebem = $('#skpdatabasebem').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "user_ajax_list",
                "type": "POST",
                "data": {
                    "csrf_bemfkuwks": csrfHash
                },
            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": [0], //first column / numbering column
                "orderable": false, //set not orderable
            }, ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian-Alternative.json"
            },
            "responsive": true,
            "rowReorder": {
                "selector": "td:nth-child(2)",
            }

        });

    });

    $(document).ready(function() {

        //datatables
        listvalidasiskpbem = $('#listvalidasiskp').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "skpb_ajax_list",
                "type": "POST",
                "data": {
                    "csrf_bemfkuwks": csrfHash
                },
            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": [0], //first column / numbering column
                "orderable": false, //set not orderable
            }, ],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian-Alternative.json"
            },
            "responsive": true,
            "rowReorder": {
                "selector": "td:nth-child(2)",
            }

        });

    });

    $(document).ready(function() {
        $("#userskp_a").DataTable({
            lengthMenu: [5, 10],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian-Alternative.json"
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });

    $(document).ready(function() {
        $("#userskpb").DataTable({
            lengthMenu: [5, 10],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian-Alternative.json"
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
    $(document).ready(function() {
        $('#userskpvalidation').DataTable({
            lengthMenu: [5, 10],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian-Alternative.json"
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });

    $(document).ready(function() {
        $('#test').DataTable({
            lengthMenu: [5, 10],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian-Alternative.json"
            },
            rowReorder: {
                selector: 'td:nth-child(2)'
            }
        });
    });

    $(document).ready(function() {
        $("#dataTable").DataTable();
    });

    $(document).ready(function() {
        $("#dataTableActivity").DataTable({
            order: [
                [0, "desc"]
            ],
        });
    });
</script>


</html>