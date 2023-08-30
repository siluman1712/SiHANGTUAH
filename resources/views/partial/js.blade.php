<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="{!! asset('bower_components/jquery/dist/jquery.min.js') !!}"></script>
<script src="{!! asset('bower_components/jquery-ui/jquery-ui.min.js') !!}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{!! asset('bower_components/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('bower_components/raphael/raphael.min.js') !!}"></script>
<script src="{!! asset('bower_components/morris.js/morris.min.js') !!}"></script>
<script src="{!! asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') !!}"></script>
<script src="{!! asset('bower_components/jquery-knob/dist/jquery.knob.min.js') !!}"></script>
<script src="{!! asset('bower_components/moment/min/moment.min.js') !!}"></script>
<script src="{!! asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') !!}"></script>

<script src="{!! asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') !!}"></script>
<script src="{!! asset('bower_components/fastclick/lib/fastclick.js') !!}"></script>
<script src="{!! asset('bower_components/datatables.net/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}"></script>
<script src="{!! asset('bower_components/select2/dist/js/select2.full.min.js') !!}"></script>
<script src="{!! asset('bower_components/PACE/pace.min.js') !!}"></script>

<script src="{!! asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
<script src="{!! asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
<script src="{!! asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}"></script>
<script src="{!! asset('plugins/iCheck/icheck.min.js') !!}"></script>
<script src="{!! asset('plugins/timepicker/bootstrap-timepicker.min.js') !!}"></script>

<script src="{!! asset('dist/js/adminlte.min.js') !!}"></script>
<script src="{!! asset('dist/js/pages/dashboard.js') !!}"></script>

<script src="{!! asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') !!}"></script>
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
