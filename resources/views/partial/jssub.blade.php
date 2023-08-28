<script>
    $(function() {
        $('.select2').select2();
    })
</script>
<script>
    $('#pebin').change(function() {
        var pebinKd = $(this).val();
        if (pebinKd) {
            $.ajax({
                type: "GET",
                url: "/getPbi?pebinKd=" + pebinKd,
                dataType: 'JSON',
                success: function(res) {
                    if (res) {
                        $("#pbi").empty();
                        $("#pbi").append('<option> Pilih Unit PBI </option>');
                        $.each(res, function(nama, kode) {
                            $("#pbi").append('<option value="' + kode + '">' + kode +
                                ' - ' + nama + '</option>');
                        });
                    } else {
                        $("#pbi").empty();
                    }
                }
            });
        } else {
            $("#pbi").empty();
        }
    });
</script>
<script>
    $('#table_3').DataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        paging: true,
        responsive: true,
        searching: true,
        ordering: true,
        info: true,
        "language": {
            "search": "Cari:",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "zeroRecords": "Maaf - Data tidak ada",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(pencarian dari _MAX_ data)"
        },
        'responsive': true,
        'stateSave': true // keep paging
    });


    $('#table_1').DataTable({
        "lengthMenu": [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"]
        ],
        paging: true,
        responsive: true,
        searching: true,
        ordering: true,
        info: true,
        "language": {
            "search": "Cari:",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "zeroRecords": "Maaf - Data tidak ada",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(pencarian dari _MAX_ data)"
        },
        'responsive': true,
        'stateSave': true // keep paging
    });

    $('#table_2').DataTable({
        "lengthMenu": [
            [3, 10, 25, 50, 100, -1],
            [3, 10, 25, 50, 100, "All"]
        ],
        paging: true,
        responsive: true,
        lengthChange: false,
        searching: false,
        ordering: false,
        info: false,
        "language": {
            "search": "Cari:",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "zeroRecords": "Maaf - Data tidak ada",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(pencarian dari _MAX_ data)"
        },
        'responsive': true,
        'stateSave': true // keep paging
    });

    $('#table_4').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': true,
        'responsive': true,
        'ordering': true,
        'info': false,
        'autoWidth': true,
        "language": {
            "search": "Cari:",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "zeroRecords": "Maaf - Data tidak ada",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(pencarian dari _MAX_ data)"
        },
        'responsive': true,
        'stateSave': true // keep paging
    })
</script>
