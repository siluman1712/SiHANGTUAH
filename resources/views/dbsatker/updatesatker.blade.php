@extends('layouts.main')
@section('content')
<div class="container-fluid mb-3 position-relative bg-purple">
    <div class="row">
        <div class="container py-2">
            <div class="row page-title-row">

                <div class="col-8 col-md-6">
                    <h2 class="page-title text-white"> Satuan Kerja</h2>
                    <p class="text-white">| Konfigurasi Satuan Kerja</p>
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
                        <h5 class="card-title">Update | Perubahan Satuan Kerja</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                <form method="post" action="/dbsatker/updatesatker/{{$data->id}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Kode Instansi</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm s2" style="width: 100%; height:36px;" id='pebin' name='pebin'>
                                                <option selected>{{$data->pebin}}</option>
                                                @foreach ($pebin as $rs)
                                                    <option value="{{ $rs->kd_pebin }}">{{ $rs->kd_pebin }} -
                                                        {{ $rs->ur_pebin }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Kode Instansi [Eselon I]</label>
                                        <div class="col-sm-5">
                                            <select class="form-control form-control-sm" name="pbi" id="pbi">
                                                <option selected>{{$data->pbi}}</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Satuan Wilayah</label>
                                        <div class="col-sm-3">
                                        <select class="form-control form-control-sm s2" name="wilayah" id="wilayah">
                                            <option selected>{{$data->wilayah}}</option>
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
                                            <input class="form-control form-control-sm" maxlength="6" type="text" placeholder="ukpb" name="ukpb" value="{{$data->ukpb}}">
                                        </div>
                                        <div class="col-sm-1">
                                            <input class="form-control form-control-sm" type="text" value="000" placeholder="upkpb" name="upkpb" value="{{$data->upkpb}}" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Jenis Kantor</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm" name="jk">
                                                <option selected>{{$data->jk}}</option>
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
                                            <input class="form-control form-control-sm" maxlength="55" type="text"
                                                placeholder="nama instansi" name="nmukpb" value="{{$data->nmukpb}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">Nama Instansi Induk</label>
                                        <div class="col-sm-5">
                                            <input class="form-control form-control-sm" maxlength="55" type="text"
                                                placeholder="nama instansi" name="nmpb" value="{{$data->nmpb}}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 control-label">KPKNL</label>
                                        <div class="col-sm-3">
                                            <select class="form-control form-control-sm s2" data-toggle="select2" name="kpknl" id="kpknl">
                                                <option selected> {{$data->kpknl}} </option>
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
                <button class="mb-2 btn btn-sm btn-dark rounded-0" type="submit"><i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Simpan Perubahan</button>
                <button class="mb-2 btn btn-sm btn-danger rounded-0" type="reset"><i class="fa fa-retweet"></i>&nbsp;&nbsp;&nbsp;Reset Data</button>
                <a href="/satker" class="mb-2 btn btn-sm btn-success rounded-0"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp; Kembali Ke Data</a>
                </div>
                </form>
            </div>
        </div>
@endsection
