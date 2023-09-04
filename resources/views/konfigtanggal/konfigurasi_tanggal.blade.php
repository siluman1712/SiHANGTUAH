@extends('layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Konfigurasi Tanggal Aplikasi - Sistem
        </h1>
    </section>

    <section class="content">
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
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-striped responsive">
                          <thead>
                            <tr>
                                <th scope="col" bgcolor="#dcdcdc">ID</th>
                                <th scope="col" bgcolor="#dcdcdc">TAHUN ANGGARAN</th>
                                <th scope="col" bgcolor="#dcdcdc">TANGGAL AWAL</th>
                                <th scope="col" bgcolor="#dcdcdc">TANGGAL AKHIR</th>
                                <th scope="col" bgcolor="#dcdcdc">AKSI</th>
                            </tr>
                          </thead>
                          @foreach ($konfig_tanggals as $result)
                          <tbody>
                            <tr>
                                <td scope="row">{{ $result->id }}</td>
                                <td scope="row">{{ $result->tglAwal }}</td>
                                <td scope="row">{{ $result->tglAkhir }}</td>
                                <td scope="row">{{ $result->tahun_anggaran }}</td>
                                <td scope="row"><a href="konfigtanggal/edittanggal/{{ $result->id }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp; Setting Tanggal</a></td>
                            </tr>
                          </tbody>
                           @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
