@extends('layouts.main')
@section('content')
<div class="content">
    <h2 class="content-heading">Database Ruangan</h2>
    <a href="/dataruangan/tambahruang" class="btn btn-sm btn-danger rounded-0">
    <i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Ruangan / Unit</a>

    <a href="/" class="btn btn-sm btn-dark rounded-0">
    <i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Halaman Utama</a>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title"><strong>| Ruangan</strong> <small> List / Daftar Ruangan / Unit </small></h3>
        </div>
        <div class="block-content">
            <!-- Hover Table -->
            <div class="block">
                <div class="block-content"> 
                <table id="table_1" class="table table-bordered table-striped responsive">
                    <thead>
                        <tr>
                            <th bgcolor='#002480' class="text-white">SATUAN KERJA</th>
                            <th bgcolor='#002480' class="text-white">KODE</th>
                            <th bgcolor='#002480' class="text-white">NAMA RUANGAN</th>
                            <th bgcolor='#002480' class="text-white">GEDUNG</th>
                            <th bgcolor='#002480' class="text-white">UNIT ESELON</th>
                            <th bgcolor='#002480' class="text-white">KATEGORI</th>
                            <th bgcolor='#002480' class="text-white">LUAS</th>
                            <th bgcolor='#002480' class="text-white" width='50'>AKSI</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtruangan as $rs)
                            <tr>
                                <td>{{ $rs->kdukpb }}</td>
                                <td>{{ $rs->koderuangan }}</td>
                                <td>{{ $rs->namaruangan }}</td>
                                <td>[{{ $rs->ruanggedung }}] {{ $rs->uraiangedung }}</td>
                                <td>[{{ $rs->uniteselon }}] {{ $rs->uraian }}</td>
                                <td>[{{ $rs->kategori }}] {{ $rs->namakategori }}</td>
                                <td>{{ $rs->luasruangan }}</td>
                                <td>
                                <a href="/dataruangan/tampilruangan/{{ $rs->koderuangan }}">Ubah</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
