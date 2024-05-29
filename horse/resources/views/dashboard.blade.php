@section('content')
    <link rel="stylesheet" href="css/root/style.css">
    <x-app-layout>
        <x-slot name="header">
        </x-slot>

        {{-- Admin --}}
        @if ($user == 'admin')
            @if ($page == 'dashboard')
                @include('admin.dashboard-admin')
            @endif

            @if ($page == 'list-karyawan')
                @include('admin.list-karyawan')
            @endif
        @endif

        {{-- Karyawan --}}
        @if ($user == 'karyawan')
            @if ($page == 'dashboard')
                @include('karyawan.dashboard-karyawan')
            @endif

            @if ($page == 'list-dokter')
                @include('karyawan.list-dokter')
            @endif

            @if ($page == 'list-pasien')
                @include('karyawan.list-pasien')
            @endif

            @if ($page == 'list-modalitas')
                @include('karyawan.list-modalitas')
            @endif

            @if ($page == 'list-pemeriksaan')
                @include('karyawan.list-pemeriksaan-karyawan')
            @endif
            @if ($page == 'list-DICOM')
                @include('karyawan.list-DICOM')
            @endif
            @if ($page == 'list-jenis-pemeriksaan')
                @include('karyawan.list-jenis-pemeriksaan')
            @endif
        @endif

        {{-- Dokter --}}
        @if ($user == 'dokter')
            @if ($page == 'dashboard')
                @include('dokter.dashboard-dokter')
            @endif

            @if ($page == 'list-pasien')
                @include('dokter.list-pemeriksaan-dokter')
            @endif
        @endif

        {{-- Pasien --}}
        @if ($user == 'pasien')
            @if ($page == 'halaman-utama')
                @include('pasien.home-pasien')
            @endif

            @if ($page == 'pemeriksaan-saya')
                @include('pasien.list-pemeriksaan-pasien')
            @endif

            @if ($page == 'daftar-pemeriksaan')
                @include('pasien.form-pendaftaran-pemeriksaan')
            @endif
        @endif

    </x-app-layout>
