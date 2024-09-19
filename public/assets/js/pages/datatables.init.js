$(document).ready(function () {
    // Inisialisasi DataTable
    let table = $("#datatable").DataTable({
        dom: "Bftip",
        scrollX: true,
        lengthChange: false,
        buttons: [
            {
                extend: "copy",
                exportOptions: {
                    columns: ':not(:nth-child(3)):not(:last-child)' // Abaikan kolom "Report" dan "Action"
                }
            },
            {
                extend: "excel",
                exportOptions: {
                    columns: ':not(:nth-child(3)):not(:last-child)' // Abaikan kolom "Report" dan "Action"
                }
            },
            {
                extend: "pdf",
                exportOptions: {
                    columns: ':not(:nth-child(3)):not(:last-child)' // Abaikan kolom "Report" dan "Action"
                }
            },
            {
                extend: "colvis",
                className: "custom-colvis-btn",
                postfixButtons: ["colvisRestore"],
                columnText: function (dt, idx, title) {
                    return title;
                },
            },
        ],
        searching: true,
        columnDefs: [
            { targets: [/* indeks kolom yang ingin disembunyikan */], visible: false },
            { targets: '_all', defaultContent: '' } // Tambahkan ini untuk memastikan kolom tidak kosong
        ],
        initComplete: function () {
            // Simpan referensi API DataTables dalam variabel
            var api = this.api();

            // Iterasi setiap kolom
            api.columns().every(function () {
                var column = this;
                var title = column.header().textContent;
                var columnIndex = column.index();
                var totalColumns = api.columns().count();
                var statusColumnIndex = totalColumns - 2;

                // Jika ini adalah kolom status
                if (columnIndex === statusColumnIndex) {
                    var select = $(
                        '<select class="form-control"><option value="">All</option><option value="Aktif">Aktif</option><option value="Non Aktif">Nonaktif</option></select>'
                    )
                        .appendTo($(column.footer()).empty())
                        .on("change", function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column
                                .search(val ? "^" + val + "$" : "", true, false)
                                .draw();
                        });
                } else {
                    $( 
                        '<input class="form-control" type="text" placeholder="Search ' +
                            title +
                            '" />'
                    )
                        .appendTo($(column.footer()).empty())
                        .on("keyup change clear", function () {
                            if (column.search() !== this.value) {
                                column.search(this.value).draw();
                            }
                        });
                }
            });
        },
    });

    // Menempatkan tombol di dalam kontainer yang sesuai
    table.buttons().container().appendTo("#datatable_wrapper .col-md-6:eq(0)");
});
