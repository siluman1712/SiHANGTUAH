<script type="text/javascript">
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
                        $("#pbi").append('<option> Unit Eselon I </option>');
                        $.each(res, function(ur_pbi, kd_pbi) {
                            $("#pbi").append('<option value="' + kd_pbi + '">' + kd_pbi +
                                ' - ' + ur_pbi + '</option>');
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
    "use strict";
    donutchart();

    function donutchart() {
        var ctx3 = document.getElementById("donutchart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx3, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                    ],
                    backgroundColor: [

                        '#673ab7',
                        '#ec4061',
                        '#ffb803',
                        '#66cd2e',
                        '#11a0f8',
                    ],
                    label: 'Dataset 1'
                }],
                labels: [
                    "Eagle Ltd",
                    "Foogle Ltd",
                    "Chinmayaar",
                    "OpenField",
                    "MarsXspace"
                ]
            },
            options: {
                responsive: true,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Chart.js Doughnut Chart'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                }
            }
        });

        setInterval(function() {
            myDoughnut.data.datasets.forEach(function(dataset) {
                dataset.data = dataset.data.map(function() {
                    return randomScalingFactor();
                });
            });
            window.myDoughnut.update();
        }, 2000);


        /* Footable */
        $('.footable').footable();



    }

    var gdpData = {
        "AF": 16.63,
        "AL": 11.58,
        "AU": 158.97,
        "IN": 100.97,
    };
    $('#mapwrap2').vectorMap({
        map: 'world_mill',
        regionStyle: {
            initial: {
                fill: '#b7c8ff'
            }
        },
        series: {
            regions: [{
                values: gdpData,
                scale: ['#b7c8ff', '#3158d8'],
                normalizeFunction: 'polynomial'
            }]
        },
        onRegionTipShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
    });
    $('#mapasiawrap').vectorMap({
        map: 'asia_mill',
        regionStyle: {
            initial: {
                fill: '#7a99ff'
            }
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
        "responsive": true,
        "stateSave": true // keep paging
    });


    $('#table_1').DataTable({
        "lengthMenu": [
            [5, 10, 25, 50, 100, -1],
            [5, 10, 25, 50, 100, "All"]
        ],
        paging: true,
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
        "responsive": true,
        "stateSave": true // keep paging
    });

    $('#table_2').DataTable({
        "lengthMenu": [
            [3, 10, 25, 50, 100, -1],
            [3, 10, 25, 50, 100, "All"]
        ],
        paging: true,
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
        "responsive": true,
        "stateSave": true // keep paging
    });

    $('#table_4').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': false,
        "language": {
            "search": "Cari Data:",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "zeroRecords": "Maaf - Data tidak ada",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(pencarian dari _MAX_ data)"
        },
        "responsive": true,
        "stateSave": true // keep paging
    })

    $('#table_5').DataTable({
        'paging': false,
        'lengthChange': false,
        'searching': false,
        'ordering': false,
        'info': false,
        'autoWidth': false,
        "language": {
            "search": "Cari Data:",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "zeroRecords": "Maaf - Data tidak ada",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(pencarian dari _MAX_ data)"
        },
        "responsive": true,
        "stateSave": true // keep paging
    })
</script>
<script type="text/javascript">
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2({
            minimumInputLength: 5
        });

        $('.s2').select2();
    })
</script>
<script type="text/javascript">
    $('#tanggal').datepicker({
        orientation: "bottom auto",
        format: 'yyyy-mm-dd'
    });
    $('#tanggals').datepicker({
        orientation: "bottom auto",
        format: 'yyyy-mm-dd'
    });
    $('#datepicker_month').datepicker({
        startView: 1,
        autoclose: true,
        orientation: "bottom auto"
    });

    $('#datepicker_month_disabled').datepicker({
        startView: 1,
        clearBtn: true,
        orientation: "bottom auto",
        daysOfWeekDisabled: "0,6",
        autoclose: true
    });

    $('#datepicker_month_disabled_weeks').datepicker({
        startView: 1,
        clearBtn: true,
        orientation: "bottom auto",
        daysOfWeekDisabled: "0,6",
        calendarWeeks: true,
        autoclose: true
    });
</script>
