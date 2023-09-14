@extends('layouts.main')
@section('content')
    <div class="container-fluid mb-3 position-relative bg-purple">
        <div class="row">
            <div class="container py-2">
                <div class="row page-title-row">

                    <div class="col-8 col-md-6">
                        <h2 class="page-title text-white"> Database Ruangan | Unit</h2>
                        <p class="text-white">| Update Ruangan dan Unit</p>
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
                        <h5 class="card-title">Update Data</h5>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <form method="post" action="/dataruangan/updateruangan/{{ $dtruangan->koderuangan }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Satuan Kerja</label>
                        <div class="col-sm-2">
                            <input class="form-control form-control-ms" maxlength="9" type="text"
                                placeholder="koderuang" name="koderuangan" value="{{ $dtruangan->kdukpb }}" readonly />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Ruangan (kode - nama)</label>
                        <div class="col-sm-2">
                            <input class="form-control form-control-ms" maxlength="9" type="text"
                                placeholder="koderuang" name="koderuangan" value="{{ $dtruangan->koderuangan }}" readonly />
                        </div>

                        <div class="col-sm-5">
                            <input class="form-control form-control-ms" type="text" placeholder="nmruangan"
                                name="namaruangan" value="{{ $dtruangan->namaruangan }}" />
                        </div>
                    </div>


            </div>
            <div class="card-footer">
                <button class="mb-2 btn btn-sm btn-dark rounded-0" type="submit">
                    <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Simpan Perubahan</button>
                <button class="mb-2 btn btn-sm btn-danger rounded-0" type="reset">
                    <i class="fa fa-retweet"></i>&nbsp;&nbsp;&nbsp;Reset Data</button>
                <a href="/kategoriruang" class="mb-2 btn btn-sm btn-success rounded-0"><i
                        class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp; Kembali Ke Data</a>
            </div>
        </div>
        </form>
    </div>
@endsection
