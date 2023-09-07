@extends('layouts.main')
@section('content')

<div class="container-fluid mb-3 position-relative bg-purple">
    <div class="row">
        <div class="container py-2">
            <div class="row page-title-row">

                <div class="col-8 col-md-6">
                    <h2 class="page-title text-white"> Satuan Kerja</h2>
                    <p class="text-white">| Konfigurasi Satuan Kerja</p>
                </div>

            </div>

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
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
                                    <th>PB</th>
                                    <th>PBI</th>
                                    <th>UKPB</th>
                                    <th>WILAYAH</th>
                                    <th>JK</th>
                                    <th>SATUAN KERJA</th>
                                    <th>PENGGUNA BARANG</th>
                                    <th>EDIT</th>
                                    <th>HAPUS</th>
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
                <div class="card-footer">
                <a href="/dbsatker/tambahsatker" class="mb-2 btn btn-sm btn-danger rounded-0"><i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Satuan Kerja</a>
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
        </div>
    </div>
</div>



















































    <section class="content">

        <br><br>
       
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">

                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
