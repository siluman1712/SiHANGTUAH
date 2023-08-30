@extends('layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Tabel Satuan Kerja
        </h1>
    </section>

    <section class="content">
        <a href="/tambahsatker" class="btn btn-danger btn-ms btn-flat"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah
            Satuan Kerja</a>
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">

                        <table id="table_1" class="table table-bordered table-striped responsive">
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
    </section>
@endsection
