@extends('layouts.main')
@section('content')
    <div class="container-fluid mb-3 position-relative bg-purple">
        <div class="row">
            <div class="container py-2">
                <div class="row page-title-row">

                    <div class="col-8 col-md-6">
                        <h2 class="page-title text-white"> Daftar Tabel Bangunan dan Gedung Utama</h2>
                        <p class="text-white">| List</p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-4">
        <div class="card rounded-0 border-0 mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title">Tabel Gedung</h5>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <table id="table_5" class="table">
                    <thead>
                        <tr>
                            <th>GEDUNG</th>
                            <th>URAIAN GEDUNG</th>
                        </tr>
                    </thead>
                    @foreach ($dbgedung as $rs)
                        <tbody>
                            <tr>
                                <td>{{ $rs->gedung }}</td>
                                <td>{{ $rs->uraiangedung }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <div class="card-footer">
                #daftar gedung
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-6">
        <div class="card rounded-0 border-0 mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title">Tabel Lantai</h5>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <table id="table_5" class="table">
                    <thead>
                        <tr>
                            <th>GEDUNG</th>
                            <th>LANTAI GEDUNG</th>
                            <th>URAIAN LANTAI</th>
                        </tr>
                    </thead>
                    @foreach ($dblantai as $rsl)
                        <tbody>
                            <tr>
                                <td>{{ $rsl->gedung }}</td>
                                <td>{{ $rsl->ltgedung }}</td>
                                <td>{{ $rsl->uraianlantai }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <div class="card-footer">
                #daftar lantai gedung
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-md-4 col-lg-5">
        <div class="card rounded-0 border-0 mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5 class="card-title">Tabel Unit Eselon</h5>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <table id="table_5" class="table">
                    <thead>
                        <tr>
                            <th>UNIT ESELON</th>
                            <th>URAIAN</th>
                        </tr>
                    </thead>
                    @foreach ($dbuniteselon as $rst)
                        <tbody>
                            <tr>
                                <td>{{ $rst->uniteselon }}</td>
                                <td>{{ $rst->uraian }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
            <div class="card-footer">
                #daftar unit eselon
            </div>
        </div>
    </div>
@endsection
