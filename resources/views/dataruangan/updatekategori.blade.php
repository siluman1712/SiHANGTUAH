@extends('layouts.main')
@section('content')
<div class="content">
    <h2 class="content-heading">Database Ruangan</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title"><strong>| Kategori</strong> <small> Updata / Ubah Data </small></h3>
        </div>
        <div class="block-content">
            <!-- Hover Table -->
            <div class="block">
                <div class="block-content">
                    <form method="post" action="/dataruangan/updatekategori/{{ $dtkategori->kodekategori }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Kode Kategori</label>
                                    <div class="col-sm-1">
                                        <input class="form-control form-control-ms" maxlength="3" type="text" placeholder="kdkat"
                                            name="kodekategori" value="{{ $dtkategori->kodekategori }}" readonly />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 control-label">Nama Kategori</label>
                                    <div class="col-sm-5">
                                        <input class="form-control form-control-ms" type="text" placeholder="kdkat"
                                            name="namakategori" value="{{ $dtkategori->namakategori }}" />
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-sm btn-primary rounded-0" type="submit">
                                <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Simpan Perubahan</button>
                            <button class="btn btn-sm btn-danger rounded-0" type="reset">
                                <i class="fa fa-retweet"></i>&nbsp;&nbsp;&nbsp;Reset Data</button>
                            <a href="/kategoriruang" class="btn btn-sm btn-dark rounded-0"><i
                                    class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp; Kembali Ke Data</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
