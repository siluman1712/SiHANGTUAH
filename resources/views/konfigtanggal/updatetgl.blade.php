@extends('layouts.main')
@section('content')

<div class="content">
    <h2 class="content-heading">Tanggal dan Tahun Anggaran</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title"><strong>| Update</strong> <small> Tanggal dan TA </small></h3>
        </div>
        <div class="block-content">
            <!-- Hover Table -->
            <div class="block">
                <div class="block-content">
                    <form method="post" action="/konfigtanggal/updatetgl/{{$data->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">

                            <div class="col-sm-2">
                                <input class="js-datepicker form-control" id="example-datepicker1" type="text" name="tglAwal" value="{{ $data->tglAwal }}" data-today-highlight="true" data-date-format="yyyy-mm-dd">
                                <small>Tanggal Awal</small>
                            </div>

                            <div class="col-sm-2">
                                <input class="js-datepicker form-control" id="example-datepicker2" type="text" name="tglAkhir" value="{{ $data->tglAkhir }}" data-today-highlight="true" data-date-format="yyyy-mm-dd">
                                <small>Tanggal Akhir</small>
                            </div>

                            <div class="col-sm-1">
                                <input class="form-control" maxlength="4" type="text" name="tahun_anggaran" value="{{ $data->tahun_anggaran }}">
                                <small>T A</small>
                            </div>
                        <button class="btn btn-ms btn-primary" type="submit">
                        <i class="fa fa-check"></i>
                        &nbsp;&nbsp;&nbsp;Simpan Perubahan
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    # T A : Tahun Anggaran
</div>


        @if ($message = Session::get('sukses'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if ($message = Session::get('gagal'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if ($message = Session::get('peringatan'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
@endsection
