@extends('layouts.main')

@section('content')
    <section class="page-heading">
        <h4 class="page-title">
            Tabel Satuan Kerja
        </h4>
    </section>
    <a href="/tambahsatker" class="btn btn-danger btn-ms btn-fix"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah
        Satuan Kerja</a>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">Data Unit Satuan</div>
                        </div>
                        <div class="ibox-body">
                            <table id="table_3" class="table table-bordered table-striped responsive">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>KODE PB</th>
                                        <th>KODE PBI</th>
                                        <th>UKPB</th>
                                        <th>KODE UAKPB</th>
                                        <th>NAMA SATUAN KERJA</th>
                                        <th>NAMA PB</th>
                                        <th>JK</th>
                                        <th width='130'>Aksi</th>
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
                                                <button type="button" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-edit"></i>&nbsp;&nbsp;Edit</button>
                                                <button type="button" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
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
    </section>
@endsection
