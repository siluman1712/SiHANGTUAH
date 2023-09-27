@extends('layouts.main')
@section('content')
<div class="content">
    <h2 class="content-heading">Daftar Tabel Bangunan dan Gedung Utama</h2>
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title"><strong>| List</strong> <small> Bangunan dan Gedung </small></h3>
        </div>
        <div class="block-content">
            <!-- Hover Table -->
            <div class="block">
                <div class="block-content">
                # Daftar Gedung
                <table id="table_2" class="table table-bordered table-striped responsive">
                    <thead>
                        <tr>
                            <th bgcolor='#002480' class="text-white">GEDUNG</th>
                            <th bgcolor='#002480' class="text-white">URAIAN GEDUNG</th>
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
                # Daftar Lantai Gedung
                <table id="table_2" class="table table-bordered table-striped responsive">
                    <thead>
                        <tr>
                            <th bgcolor='#002480' class="text-white">GEDUNG</th>
                            <th bgcolor='#002480' class="text-white">LANTAI GEDUNG</th>
                            <th bgcolor='#002480' class="text-white">URAIAN LANTAI</th>
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
                # Daftar Unit Eselon
                <table id="table_2" class="table table-bordered table-striped responsive">
                    <thead>
                        <tr>
                            <th bgcolor='#002480' class="text-white">UNIT ESELON</th>
                            <th bgcolor='#002480' class="text-white">URAIAN</th>
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
            </div>
        </div>
    </div>
</div>

    
@endsection
