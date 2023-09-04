@extends('layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Perubahan | Satuan Kerja
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row">
                                        <label class="col-sm-1 control-label">Tanggal Awal</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" placeholder="tglAwal"
                                                name="tglAwal" value="{{$edittanggal->tglAwal}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-1 control-label">Tanggal Akhir</label>
                                        <div class="col-sm-2">
                                            <input class="form-control" type="text" placeholder="tglAkhir"
                                                name="tglAkhir" value="{{$edittanggal->tglAkhir}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-1 control-label">T A</label>
                                        <div class="col-sm-1">
                                            <input class="form-control" type="text" placeholder="tahun_anggaran"
                                                name="tahun_anggaran" value="{{$edittanggal->tahun_anggaran}}">

                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-sm flat" type="submit"><i
                                            class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Simpan Perubahan</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <small>#T A : Tahun Anggaran</small>
            </div>
        </div>
    </section>
@endsection
