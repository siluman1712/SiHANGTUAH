@extends('layouts.main')
@section('content')

<div class="container-fluid mb-3 position-relative bg-purple">
    <div class="row">
        <div class="container py-2">
            <div class="row page-title-row">

                <div class="col-8 col-md-6">
                    <h2 class="page-title text-white"> Tanggal dan Tahun Anggaran</h2>
                    <p class="text-white">| Konfigurasi Tanggal Transaksi dan Tahun Anggaran</p>
                </div>

            </div>

        </div>
    </div>
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

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card rounded-0 border-0 mb-3">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                        <h5 class="card-title">Update Perubahan</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                    <form method="post" action="konfigtanggal/updatetgl/{id}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">

                            <div class="col-sm-2">
                                <input class="form-control" id="tanggal" type="text" name="tglAwal" value="{{ $data->tglAwal }}">
                                <small>Tanggal Awal</small>
                            </div>

                            <div class="col-sm-2">
                                <input class="form-control" id="tanggals" type="text" name="tglAkhir" value="{{ $data->tglAkhir }}">
                                <small>Tanggal Akhir</small>
                            </div>

                            <div class="col-sm-1">
                                <input class="form-control" maxlength="4" type="text" name="tahun_anggaran" value="{{ $data->tahun_anggaran }}">
                                <small>T A</small>
                            </div>
                        </div>
                        <button class="mb-2 btn btn-sm btn-primary rounded-0" type="submit"><i
                        class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Simpan Perubahan</button>

                    </form>
                </div>
            </div>
            # T A : Tahun Anggaran
        </div>
@endsection
