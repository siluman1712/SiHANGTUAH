@extends('layouts.main')
@section('content')

                <div class="content">
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title"><strong>Database</strong> <small> Kodefikasi bmn </small></h3>
                        </div>
                        <div class="block-content">
                            <!-- Hover Table -->
                            <div class="block">
                                <div class="block-content">

                                    <table id="table_1" class="table table-bordered table-striped responsive">

                                        <thead>
                                            <tr>
                                                <th bgcolor='#002480' class="text-white">KODE BMN</th>
                                                <th bgcolor='#002480' class="text-white">URAIAN BMN</th>
                                                <th bgcolor='#002480' class="text-white">SATUAN</th>
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
                            </div>
                        </div>
                    </div>
                </div>

@endsection
