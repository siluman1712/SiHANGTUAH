@extends('layouts.main')
@section('content')
            <div class="container-fluid mb-3 position-relative bg-purple">
                <div class="row">
                    <div class="container py-2">
                        <div class="row page-title-row">

                            <div class="col-8 col-md-6">
                                <h2 class="page-title text-white"> Satuan Kerja</h2>
                                <p class="text-white">| Tambah Satuan Kerja</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card rounded-0 border-0 mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                            <h5 class="card-title">Tabel</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">

                         <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                          <option value="AL">Alabama</option>
                            ...
                          <option value="WY">Wyoming</option>
                        </select>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btn-sm"> Footer Button</button>
                    </div>
                </div>
            </div>













    <section class="content">
        <a href="/satker" class="btn btn-danger btn-sm"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp; Kembali Ke
            Data</a>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="/insertsatker" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Kode Instansi</label>
                                        <div class="col-sm-3">
                                            <select class="form-control s2" style="width: 100%; height:36px;" id='pebin'
                                                name='pebin'>
                                                <option selected>Unit PB</option>
                                                @foreach ($pebin as $r_pb)
                                                    <option value="{{ $r_pb->kd_pebin }}">{{ $r_pb->kd_pebin }} -
                                                        {{ $r_pb->ur_pebin }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Kode Instansi [Eselon I]</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" data-toggle="select2" name="pbi"
                                                id="pbi">
                                                <option selected>Unit PBI</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Satuan Wilayah</label>
                                        <div class="col-sm-3">
                                            <select class="form-control s2" data-toggle="select2" name="wilayah"
                                                id="wilayah">
                                                <option selected>Wilayah</option>
                                                @foreach ($wilayah as $rs_wil)
                                                    <option value="{{ $rs_wil->kd_wilayah }}">{{ $rs_wil->kd_wilayah }} -
                                                        {{ $rs_wil->ur_wilayah }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Kode Satuan Kerja [Instansi]</label>
                                        <div class="col-sm-1">
                                            <input class="form-control" maxlength="6" type="text" placeholder="ukpb"
                                                name="ukpb">
                                        </div>
                                        <div class="col-sm-1">
                                            <input class="form-control" type="text" value="000" placeholder="upkpb"
                                                name="upkpb" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Jenis Kantor</label>
                                        <div class="col-sm-3">
                                            <select class="form-control s2" name="jk">
                                                <option selected>Jenis Kantor</option>
                                                <option value="KD">[KD] KANTOR DAERAH</option>
                                                <option value="KP">[KP] KANTOR PUSAT</option>
                                                <option value="DK">[DK] DEKONSENTRASI</option>
                                                <option value="TP">[TP] TUGAS PEMBANTUAN</option>
                                                <option value="UB">[UB] URUSAN BERSAMA</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Nama Satuan Kerja [Instansi]</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" maxlength="55" type="text"
                                                placeholder="nama instansi" name="nmukpb">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">Nama Instansi Induk</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" maxlength="55" type="text"
                                                placeholder="nama instansi" name="nmpb">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 control-label">KPKNL</label>
                                        <div class="col-sm-3">
                                            <select class="form-control s2" data-toggle="select2" name="kpknl"
                                                id="kpknl">
                                                <option selected> KPKNL </option>
                                                @foreach ($kpknl as $rs)
                                                    <option value="{{ $rs->kdkpknl }}">{{ $rs->kdkpknl }} -
                                                        {{ $rs->urkpknl }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary btn-ms" type="submit"><i
                                            class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Simpan Data</button>
                                    <button class="btn btn-danger btn-ms" type="reset"><i
                                            class="fa fa-retweet"></i>&nbsp;&nbsp;&nbsp;Reset Data</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
