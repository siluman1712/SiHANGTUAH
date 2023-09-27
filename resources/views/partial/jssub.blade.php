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
<script type="text/javascript">
    $('#gedung').change(function() {
        var gedungID = $(this).val();
        if (gedungID) {
            $.ajax({
                type: "GET",
                url: "/getLantai?gedungID=" + gedungID,
                dataType: 'JSON',
                success: function(res) {
                    if (res) {
                        $("#lantai").empty();
                        $("#lantai").append('<option> PILIH LANTAI</option>');
                        $.each(res, function(uraianlantai, ltgedung) {
                            $("#lantai").append('<option value="' + ltgedung + '">' + ltgedung +
                                ' - ' + uraianlantai + '</option>');
                        });
                    } else {
                        $("#lantai").empty();
                    }
                }
            });
        } else {
            $("#lantai").empty();
        }
    });
</script>
<script type="text/javascript">
$(document).ready(function(){

 $('#NIP1').change(function(){    // KETIKA ISI DARI FIEL 'NPM' BERUBAH MAKA ......
  var NIP1fromfield = $('#NIP1').val();  // AMBIL isi dari fiel NPM masukkan variabel 'npmfromfield'
  $.ajax({        // Memulai ajax
    method: "POST",      
    url: "_set/ambildatapegawai.php",    // file PHP yang akan merespon ajax
    data: { NIP1: NIP1fromfield}   // data POST yang akan dikirim
  })
    .done(function( hasilajax ) {   // KETIKA PROSES Ajax Request Selesai
        $('#NAMA1').val(hasilajax);  // Isikan hasil dari ajak ke field 'nama' 
    });
 })
});
</script>
<script>
    $('#table_1').DataTable({
        "lengthMenu": [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        paging: true,
        searching: true,
        ordering: true,
        info: false,
        "language": {
            "search": "Cari Data:",
            "lengthMenu": "Tampilkan _MENU_ baris",
            "zeroRecords": "Maaf - Data tidak ada",
            "infoEmpty": "Tidak ada data",
            "infoFiltered": "(pencarian dari _MAX_ data)"
        },
        "responsive": true,
        "stateSave": true // keep paging
    });

    $('#table_2').DataTable({
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
    });
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

