@extends('layouts.main')
@section('content')
<div class="content">
    <h2 class="content-heading">Database Ruangan</h2>
    <a href="/dataruangan/tambahkategori" class="mb-2 btn btn-sm btn-danger rounded-0">
    <i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Kategori</a>
    <a href="/" class="mb-2 btn btn-sm btn-dark rounded-0">
    <i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Halaman Utama</a>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title"><strong>| Kategori</strong> <small> Ruangan (Jenis) </small></h3>
        </div>
        <div class="block-content">
            <!-- Hover Table -->
            <div class="block">
                <div class="block-content">
                <table id="table_1" class="table table-bordered table-striped responsive">

                    <thead>
                        <tr>
                            <th bgcolor='#002480' class="text-white">KODE</th>
                            <th bgcolor='#002480' class="text-white">URAIAN</th>
                            <th bgcolor='#002480' class="text-white" width='100'>AKSI</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($RuangKategori as $rs)
                            <tr>
                                <td>{{ $rs->kodekategori }}</td>
                                <td>{{ $rs->namakategori }}</td>
                                <td>
                                    <a href="/dataruangan/tampildata/{{ $rs->kodekategori }}"> Ubah</a>
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
