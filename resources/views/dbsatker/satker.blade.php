@extends('layouts.main')
@section('content')

<div class="content">
    <h2 class="content-heading">Satuan Kerja</h2>
    <a href="/dbsatker/tambahsatker" class="mb-2 btn btn-sm btn-danger rounded-0"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Satuan Kerja</a>    

    <a href="/" class="mb-2 btn btn-sm btn-dark rounded-0"><i class="fa fa-home"></i>&nbsp;&nbsp; Halaman Utama</a> 
    <div class="block">
        <div class="block-header block-header-default">
             <h3 class="block-title"><strong>| Konfigurasi</strong> <small> Satuan Kerja</small></h3>
        </div>
        <div class="block-content">
            <!-- Hover Table -->
            <div class="block">
                <div class="block-content">
                        <table id="table_1" class="table table-bordered table-striped responsive">
                            <thead>
                                <tr>
                                    <th bgcolor='#002480' class="text-white">PB</th>
                                    <th bgcolor='#002480' class="text-white">PBI</th>
                                    <th bgcolor='#002480' class="text-white">UKPB</th>
                                    <th bgcolor='#002480' class="text-white">WILAYAH</th>
                                    <th bgcolor='#002480' class="text-white">JK</th>
                                    <th bgcolor='#002480' class="text-white">SATUAN KERJA</th>
                                    <th bgcolor='#002480' class="text-white">PENGGUNA BARANG</th>
                                    <th bgcolor='#002480' class="text-white">EDIT</th>
                                    <th bgcolor='#002480' class="text-white">HAPUS</th>
                                </tr>
                            </thead>
                            @foreach ($dbsatker as $result) 
                                <tbody>
                                    <tr>
                                        <td>{{ $result->pebin }}</td>
                                        <td>{{ $result->pbi }}</td>
                                        <td>{{ $result->ukpb }}</td>
                                        <td>{{ $result->wilayah }}</td>
                                        <td>{{ $result->jk }}</td>
                                        <td>{{ $result->nmukpb }}</td>
                                        <td>{{ $result->nmpb }}</td>
                                        <td align="center">
                                        <a href="/dbsatker/tampilkandata/{{ $result->id }}" class="mb-2 btn btn-sm btn-warning rounded-0"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td>
                                        <a href="/dbsatker/deletedata/{{ $result->id }}" class="mb-2 btn btn-sm btn-danger rounded-0"> <i class="fa fa-trash"></i></a>
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
