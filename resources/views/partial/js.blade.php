    <!-- CORE PLUGINS-->
    <script src="assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
    <script src="assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js" type="text/javascript"></script>
    <script src="assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/vendors/jquery-knob/dist/jquery.knob.min.js" type="text/javascript"></script>
    <script src="assets/vendors/moment/min/moment.min.js" type="text/javascript"></script>
    <script src="assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <script src="assets/vendors/jquery-minicolors/jquery.minicolors.min.js" type="text/javascript"></script>
    <script src="assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="assets/js/scripts/form-plugins.js" type="text/javascript"></script>
    <script>
        $(function() {
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });

            $('.timepicker').timepicker({
                format: 'HH:mm',
                showMeridian: false,
                showInputs: false,
                use24hours: true,
            })
        });
    </script>
    <script type="text/javascript">
        $(".s1").select2();
        $(".s2").select2({
            placeholder: "Pilih Data",
            allowClear: true
        });
    </script>
