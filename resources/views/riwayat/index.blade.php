
@extends('layouts.app')

@section('title', 'Riwayat')
@section('page-heading', 'Riwayat Perhitungan')
@section('page-description', 'Lihat kembali hasil rekomendasi diskon yang telah dilakukan.')

@section('content')

<div class="card-modern">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="fw-bold mb-1">Data Perhitungan</h5>
            <p class="text-secondary small mb-0">Daftar riwayat rekomendasi diskon produk.</p>
        </div>
        <a href="{{ route('diskon.index') }}" class="btn btn-teal">
            <i class="bi bi-plus-lg me-1"></i> Hitung Baru
        </a>
    </div>

    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Produk</th>
                    <th>Kedaluwarsa</th>
                    <th>Stok</th>
                    <th>Minat</th>
                    <th>Diskon</th>
                    <th>Harga Akhir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" class="text-center py-5">
                        <i class="bi bi-inbox fs-1 text-secondary"></i>
                        <p class="fw-bold mt-3 mb-1">Belum Ada Riwayat</p>
                        <p class="text-secondary small">
                            Hasil perhitungan akan muncul di halaman ini.
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
