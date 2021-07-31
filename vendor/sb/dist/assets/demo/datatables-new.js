// Call the dataTables jQuery plugin
$(document).ready(function () {
  $("#userskpa").DataTable({
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
  $('#userdatabase').DataTable({
    lengthMenu: [10, 20],
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


