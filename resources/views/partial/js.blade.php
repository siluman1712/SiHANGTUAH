<script src="{!! asset('assets/js/codebase.core.min.js') !!}"></script>
<script src="{!! asset('assets/js/codebase.app.min.js') !!}"></script>

<!-- Page JS Plugins -->
<script src="{!! asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/select2/js/select2.full.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/masked-inputs/jquery.maskedinput.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/dropzonejs/dropzone.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js') !!}"></script>
<!-- Page JS Plugins -->
<script src="{!! asset('assets/js/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') !!}"></script>

<!-- Page JS Code -->
<script src="{!! asset('assets/js/pages/be_tables_datatables.min.js') !!}"></script>

<!-- Page JS Code -->
<script src="{!! asset('assets/js/pages/be_forms_plugins.min.js') !!}"></script>


<!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->
<script>jQuery(function(){ Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>

<script>
  $(function() {
    $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
    });
  });
</script>

