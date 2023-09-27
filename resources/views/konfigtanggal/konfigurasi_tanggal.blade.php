@extends('layouts.main')
@section('content')
<div class="content">
    <h2 class="content-heading">Tanggal dan Tahun Anggaran</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title"><strong>| Konfigurasi</strong> <small> Tanggal dan TA </small></h3>
        </div>
        <div class="block-content">
            <!-- Hover Table -->
            <div class="block">
                <div class="block-content">
                <table id="table_1" class="table table-bordered table-striped responsive">
                    <thead>
                        <tr>
                            <th bgcolor='#002480' class="text-white">TAHUN ANGGARAN</th>
                            <th bgcolor='#002480' class="text-white">TANGGAL AWAL</th>
                            <th bgcolor='#002480' class="text-white">TANGGAL AKHIR</th>
                            <th bgcolor='#002480' class="text-white" width="50">AKSI</th>
                        </tr>
                    </thead>
                    @foreach ($data as $result)
                        <tbody>
                            <tr>
                                <td>{{ $result->tahun_anggaran }}</td>
                                <td>{{ $result->tglAwal }}</td>
                                <td>{{ $result->tglAkhir }}</td>
                                <td>
                                    <a href="/konfigtanggal/tampildata/{{ $result->id }}"
                                        class="mb-2 btn btn-sm btn-danger rounded-0"><i class="fa fa-edit"></i>&nbsp;&nbsp;
                                        Perbaharui Tanggal</a>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
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

@endsection
