// Call the dataTables jQuery plugin
$(document).ready(function () {
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

var table;
var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
$(document).ready(function () {

  //datatables
  table = $('#userdatabase').DataTable({

    "processing": true, //Feature control the processing indicator.
    "serverSide": true, //Feature control DataTables' server-side processing mode.
    "order": [], //Initial no order.

    // Load data for the table's content from an Ajax source
    "ajax": {
      "url": "<?php echo base_url('admin/user_ajax_list') ?>",
      "type": "POST",
      "data": {
        "csrf_bemfkuwks": csrfHash
      },
    },

    //Set column definition initialisation properties.
    "columnDefs": [{
      "targets": [0], //first column / numbering column
      "orderable": false, //set not orderable
    },],

  });

});

$(document).ready(function () {
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

$(document).ready(function () {
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
$(document).ready(function () {
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

$(document).ready(function () {
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

$(document).ready(function () {
  $('#listvalidasi').DataTable({
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

$(document).ready(function () {
  $("#dataTable").DataTable();
});

$(document).ready(function () {
  $("#dataTableActivity").DataTable({
    order: [[0, "desc"]],
  });
});


