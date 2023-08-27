@extends('dashboard.layouts.master')

@section('content')
    <section class="content-header">
        {{ Breadcrumbs::render('keluarga') }}
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <button tupe="button"
                    class="btn btn-primary btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block mb-1">Tambah
                    Anggota
                </button>
                <a href=""
                    class="btn btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block mb-1">Kartu
                    Keluarga
                </a>
                <a href="{{ url('adminduk/keluarga') }}"
                    class="btn btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block mb-1">Kembali
                    Ke Daftar Keluarga
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped mb-3">
                    <tbody>
                        <tr>
                            <td class="text-xs" width="10%">Nomor Kartu Keluarga</td>
                            <td class="text-xs">{{ $keluarga->no_kk }}</td>
                        </tr>
                        <tr>
                            <td class="text-xs" width="10%">Kepala Keluarga</td>
                            <td class="text-xs">{{ $keluarga->penduduk->nama }}</td>
                        </tr>
                        <tr>
                            <td class="text-xs" width="10%">Alamat</td>
                            <td class="text-xs">{{ $keluarga->alamat }} RT {{ $keluarga->rt->rt }}
                                RW {{ $keluarga->rw->rw }}
                                {{ $keluarga->wilayah->name }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="table-responsive p-0">
                    <table class="table table-bordered table-striped align-items-center mb-0">
                        <thead>
                            <tr>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-600 opacity-7 font-outfit ps-3">
                                    NIK</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-600 opacity-7 font-outfit ps-3">
                                    Nama</th>
                                <th
                                    class="text-uppercase text-center text-secondary text-xxs font-weight-600 opacity-7 font-outfit">
                                    Tanggal Lahir</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-600 opacity-7 font-outfit">
                                    Jenis Kelamin</th>
                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-600 opacity-7 font-outfit ps-3">
                                    Hubungan Keluarga</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($penduduk as $item) --}}
                            <tr>
                                <td class="text-center align-middle text-xs">
                                    <p class="text-sm text-secondary font-outfit font-weight-500 mb-0">
                                        {{ $keluarga->penduduk->nik }}</p>
                                </td>
                                <td class="align-middle text-xs">
                                    <p class="text-sm text-secondary font-outfit font-weight-500 mb-0">
                                        {{ $keluarga->penduduk->nama }}</p>
                                </td>
                                <td class="text-center align-middle text-xs">
                                    <p class="text-sm text-secondary font-outfit font-weight-500 mb-0">
                                        {{ \Carbon\Carbon::parse($keluarga->penduduk->tanggal_lahir)->format('d F Y') }}
                                    </p>
                                </td>
                                <td class="text-center align-middle text-sm">
                                    <p class="text-sm text-secondary mb-0">
                                        {{ $keluarga->penduduk->kelamin->name }}
                                    </p>
                                </td>
                                <td class="align-middle text-sm">
                                    <p class="text-sm text-secondary mb-0">
                                        {{ $keluarga->penduduk->hubungan_keluarga->name }}
                                    </p>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>
@endsection
