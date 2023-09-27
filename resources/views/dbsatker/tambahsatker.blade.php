@extends('layouts.main')
@section('content')
<div class="content">
    <h2 class="content-heading">Satuan Kerja</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title"><strong>| Tambah</strong> <small> Data </small></h3>
        </div>
        <div class="block-content">
            <!-- Hover Table -->
            <div class="block">
                <div class="block-content">
                    <form method="POST" action="/insertsatker" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Kode Instansi</label>
                                        <div class="col-sm-5">
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
                                        <label class="col-sm-3 control-label">Kode Instansi [Eselon I]</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control" name="pbi" id="pbi">
                                                <option selected>Unit PBI</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Satuan Wilayah</label>
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
                                        <label class="col-sm-3 control-label">Kode Satuan Kerja [Instansi]</label>
                                        <div class="col-sm-1">
                                            <input class="form-control form-control" maxlength="6" type="text" placeholder="ukpb"
                                                name="ukpb">
                                        </div>
                                        <div class="col-sm-1">
                                            <input class="form-control form-control" type="text" value="000" placeholder="upkpb"
                                                name="upkpb" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Jenis Kantor</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control" name="jk">
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
                                        <label class="col-sm-3 control-label">Nama Satuan Kerja [Instansi]</label>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control" maxlength="55" type="text"
                                                placeholder="nama instansi" name="nmukpb">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Nama Instansi Induk</label>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control" maxlength="55" type="text"
                                                placeholder="nama instansi" name="nmpb">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">KPKNL</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control s2" name="kpknl" id="kpknl">
                                                <option selected> KPKNL </option>
                                                @foreach ($kpknl as $rs)
                                                    <option value="{{ $rs->kdkpknl }}">{{ $rs->kdkpknl }} -
                                                        {{ $rs->urkpknl }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-sm btn-primary rounded-0" type="submit">
                    <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Simpan Data</button>
                    <button class="btn btn-sm btn-danger rounded-0" type="reset">
                    <i class="fa fa-retweet"></i>&nbsp;&nbsp;&nbsp;Reset Data</button>
                    <a href="/satker" class="btn btn-sm btn-dark rounded-0"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp; Kembali Ke Data</a>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
