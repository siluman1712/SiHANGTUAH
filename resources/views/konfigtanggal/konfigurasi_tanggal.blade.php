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

                        <table id="table_4" class="table table-bordered table-striped responsive">
                            <thead>
                                <tr>
                                    <th bgcolor="#dcdcdc">ID</th>
                                    <th bgcolor="#dcdcdc">TAHUN ANGGARAN</th>
                                    <th bgcolor="#dcdcdc">TANGGAL AWAL</th>
                                    <th bgcolor="#dcdcdc">TANGGAL AKHIR</th>

                                </tr>
                            </thead>
                            @foreach ($konfig_tanggals as $result)
                                <tbody>
                                    <tr>
                                        <td>{{ $result->id }}</td>
                                        <td>{{ $result->tglAwal }}</td>
                                        <td>{{ $result->tglAkhir }}</td>
                                        <td>{{ $result->tahun_anggaran }}</td>
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
