@extends('layouts.main')
@section('content')
    <div class="content">
        <h2 class="content-heading">Database Ruangan</h2>
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title"><strong>| Tambah Unit / Ruangan</strong> <small> Daftar Ruangan </small></h3>
            </div>
            <div class="block-content">
                <!-- Hover Table -->
                <div class="block">
                    <div class="block-content">
                        <h1><strong>{{ $next }}</strong></h1>
                        <form method="post" action="/insertruangan" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">T A</label>
                                <div class="col-lg-1">
                                    @foreach ($ta as $rs)
                                        <input class="form-control form-control" maxlength="3" type="text"
                                            name="ta" value="{{ $rs->tahun_anggaran }}" readonly />
                                    @endforeach
                                </div>
                                <label class="col-lg-1 col-form-label">Nomor Urut</label>
                                <div class="col-lg-1">
                                    <input class="form-control form-control" maxlength="3" type="text"
                                        name="urutruangan" value="{{ $next }}" readonly />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Satuan Kerja</label>
                                <div class="col-lg-2">
                                    @foreach ($satker as $sk)
                                        <input class="form-control form-control" maxlength="3" type="text"
                                            name="ta" value="{{ $sk->kdukpb }}" readonly />
                                </div>
                                <div class="col-lg-5">
                                    <input class="form-control form-control" maxlength="3" type="text" name="ta"
                                        value="{{ $sk->nmukpb }}" readonly />
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Gedung</label>
                                <div class="col-sm-3">
                                    <select class="form-control s2" name='gedung' id="gedung">
                                        <option value='BLANK'>PILIH GEDUNG</option>
                                        <option value='1'>[1] Gedung Utama</option>
                                        <option value='2'>[2] Gedung Utama Arsip</option>
                                        <option value='3'>[3] Gedung UPT BKN Padang</option>
                                        <option value='4'>[4] Gedung UPT BKN Batam</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <select class="form-control" name='lantai' id="lantai">
                                        <option selected="selected">-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Unit Eselon (Ruangan)</label>
                                <div class="col-sm-3">
                                    <select class="form-control s2" id='uniteselon' name='uniteselon'>
                                        <option selected>PILIH Unit E1</option>
                                        @foreach ($eselon as $res)
                                            <option value="{{ $res->uniteselon }}">{{ $res->uniteselon }} -
                                                        {{ $res->uraian }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Kategori Ruangan (Jenis)</label>
                                <div class="col-sm-4">
                                    <select class="form-control s2" id='kategoriruang' name='kategoriruang'>
                                        <option selected>PILIH KATEGORI</option>
                                        @foreach ($kategori as $rsl)
                                            <option value="{{ $rsl->kodekategori }}">[{{ $rsl->kodekategori }}] -
                                                        {{ $rsl->namakategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Nama Ruangan</label>
                                <div class="col-sm-5">
                                <input type="text" maxlength="85" class="js-maxlength form-control" name='namaruang' id="example-maxlength3" placeholder="Tentukan Nama Ruangan" data-always-show="true" data-placement="right">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Luas Ruangan</label>
                                <div class="col-sm-1">
                                <input type="text" maxlength="5" class="js-maxlength form-control" name='luasruang' id="example-maxlength3" placeholder="Luas" data-always-show="true" data-placement="top-right">
                                </div>
                                M2
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Keterangan Ruangan</label>
                                <div class="col-sm-8">
                                    <input type="text" maxlength="150" class="js-maxlength form-control" name='keterangan' id='example-maxlength3' placeholder="Katerangan Tentang Ruangan" data-always-show="true" data-placement="top-right">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">P I C</label>
                                <div class="col-sm-2">
                                    <input class='form-control' maxlength="18" type="text" name="NIP1" id="NIP1" placeholder="NIP">
                                </div>

                                <div class="col-sm-3">
                                    <input class='form-control' maxlength="50" type="text" name="NAMA1" id="NAMA1" placeholder="NAMA" readonly>
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer">
                                <label class="col-lg-2 col-form-label"></label>
                                <button class="btn btn-sm btn-primary rounded-0" type="submit">
                                <i class="fa fa-check"></i>&nbsp;&nbsp;&nbsp;Simpan Data</button>
                                <button class="btn btn-sm btn-danger rounded-0" type="reset">
                                <i class="fa fa-retweet"></i>&nbsp;&nbsp;&nbsp;Reset Data</button>
                                <a href="/ruangan" class="btn btn-sm btn-dark rounded-0">
                                <i class="fa fa-arrow-left"></i>&nbsp;&nbsp;&nbsp; Kembali Ke Data</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
