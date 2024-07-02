@extends('layouts.app')
@section('title', 'Detail Pemeriksaan Saya')
@section('setAktifDetailPemeriksaanSaya', 'active')

@section('customCSS')

    <!-- Custom styles for this template -->
    <link href="/templating-assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="/templating-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection

@section('content')
<div class="container">
    <h1 class="biggest-font mt-5 mb-5">Detail Pemeriksaan Saya</h1>
    @if ($detail->isEmpty())
        <p>Belum ada detail pemeriksaan.</p>
    @else
        <div class="card shadow mb-4">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No. Pemeriksaan</th>
                            <th>Tanggal Pemeriksaan</th>
                            <th>Jam Mulai Pemeriksaan Alat</th>
                            <th>Jam Selesai Pemeriksaan Alat</th>
                            <th>Ruangan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detail as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nomorPemeriksaan }}</td>
                                <td>{{ $item->tanggalPemeriksaan }}</td>
                                <td>{{ $item->jamMulaiPemeriksaanAlat }}</td>
                                <td>{{ $item->jamSelesaiPemeriksaanAlat }}</td>
                                <td>{{ $item->ruangan }}</td>
                                <td>{{ $item->status }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $detail->links() }}
        </div>
    @endif
</div>
@endsection
