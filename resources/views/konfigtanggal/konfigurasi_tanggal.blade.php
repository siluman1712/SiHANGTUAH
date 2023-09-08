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
                        <h5 class="card-title">Tabel</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body ">
                        <table id="table_4" class="table">
                          <thead>
                            <tr>
                                <th bgcolor="#dcdcdc">TAHUN ANGGARAN</th>
                                <th bgcolor="#dcdcdc">TANGGAL AWAL</th>
                                <th bgcolor="#dcdcdc">TANGGAL AKHIR</th>
                                <th bgcolor="#dcdcdc" width="50">AKSI</th>
                            </tr>
                          </thead>
                          @foreach ($data as $result)
                          <tbody>
                            <tr>
                                <td>{{ $result->tglAwal }}</td>
                                <td>{{ $result->tglAkhir }}</td>
                                <td>{{ $result->tahun_anggaran }}</td>
                                <td>
                                <a href="/konfigtanggal/tampildata/{{ $result->id }}" class="mb-2 btn btn-sm btn-danger rounded-0"><i class="fa fa-edit"></i>&nbsp;&nbsp; Perbaharui Tanggal</a>  
                                </td>
                            </tr>
                          </tbody>
                           @endforeach
                        </table>
                </div>
            </div>
            # T A : Tahun Anggaran
        </div>
@endsection
