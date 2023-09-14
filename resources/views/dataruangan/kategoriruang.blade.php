@extends('layouts.main')
@section('content')
    <div class="container-fluid mb-3 position-relative bg-purple">
        <div class="row">
            <div class="container py-2">
                <div class="row page-title-row">

                    <div class="col-8 col-md-6">
                        <h2 class="page-title text-white"> Kategori Ruangan</h2>
                        <p class="text-white">| Daftar Kategori</p>
                    </div>

                </div>

            </div>
        </div>
    </div>
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
                            <th>KODE</th>
                            <th>URAIAN</th>
                            <th width='50'>AKSI</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($RuangKategori as $rs)
                            <tr>
                                <td>{{ $rs->kodekategori }}</td>
                                <td>{{ $rs->namakategori }}</td>
                                <td>
                                    <a href="/dataruangan/tampildata/{{ $rs->kodekategori }}"
                                        class="mb-2 btn btn-sm btn-warning rounded-0"> <i
                                            class="fa fa-edit"></i>&nbsp;&nbsp;&nbsp; Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="card-footer">
                <a href="/dataruang/tambahkategori" class="mb-2 btn btn-sm btn-danger rounded-0">
                    <i class="fa fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Kategori</a>
            </div>
        </div>
    </div>
@endsection
