@extends('layouts.main')
@section('content')
    <section class="content-header">
        <h1>
            Tabel Satuan Kerja
        </h1>
    </section>

    <section class="content">
        <a href="/dbsatker/tambahsatker" class="btn btn-danger btn-ms btn-flat"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Satuan Kerja</a>
        <br><br>
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
                                    <th bgcolor="#dcdcdc">KODE PB</th>
                                    <th bgcolor="#dcdcdc">KODE PBI</th>
                                    <th bgcolor="#dcdcdc">UKPB</th>
                                    <th bgcolor="#dcdcdc">KODE UAKPB</th>
                                    <th bgcolor="#dcdcdc">NAMA SATUAN KERJA</th>
                                    <th bgcolor="#dcdcdc">NAMA PB</th>
                                    <th bgcolor="#dcdcdc">JK</th>
                                    <th width='130' bgcolor="#dcdcdc">Aksi</th>
                                </tr>
                            </thead>
                            @foreach ($dbsatker as $result)
                                <tbody>
                                    <tr>
                                        <td>{{ $result->id }}</td>
                                        <td>{{ $result->pebin }}</td>
                                        <td>{{ $result->pbi }}</td>
                                        <td>{{ $result->ukpb }}</td>
                                        <td>{{ $result->kdukpb }}</td>
                                        <td>{{ $result->nmukpb }}</td>
                                        <td>{{ $result->nmpb }}</td>
                                        <td>{{ $result->jk }}</td>
                                        <td align="center">
                                        <a href="/dbsatker/tampilkandata/{{ $result->id }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp;&nbsp;Edit </a>
                                        <a href="/dbsatker/deletedata/{{ $result->id }}" class="btn btn-danger btn-sm btn-flat">
                                        <i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</a>
                                        </td>
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
