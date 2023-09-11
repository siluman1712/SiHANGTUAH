@extends('layouts.main')
@section('content')
    <div class="container-fluid mb-3 position-relative bg-purple">
        <div class="row">
            <div class="container py-2">
                <div class="row page-title-row">

                    <div class="col-8 col-md-6">
                        <h2 class="page-title text-white"> Barang Milik Negara Kodefikasi</h2>
                        <p class="text-white">| Daftar Barang Milik Negara</p>
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
                            <th>KODE BMN</th>
                            <th>URAIAN BMN</th>
                            <th>SATUAN</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dtBMN as $rs)
                            <tr>
                                <td>{{ $rs->kd_brg }}</td>
                                <td>{{ $rs->ur_sskel }}</td>
                                <td>{{ $rs->satuan }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <div class="card-footer">
                #
            </div>
        </div>
    </div>
@endsection
