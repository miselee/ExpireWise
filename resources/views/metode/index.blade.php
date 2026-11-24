
@extends('layouts.app')

@section('title', 'Metode Fuzzy')
@section('page-heading', 'Informasi Metode')
@section('page-description', 'Pelajari proses pengambilan keputusan menggunakan Fuzzy Mamdani.')

@section('content')

<div class="card-modern mb-4">
    <span class="badge rounded-pill mb-3"
          style="background:#CCFBF1;color:#0D9488;width:max-content">
        METODE SISTEM
    </span>

    <h4 class="fw-bold">Fuzzy Mamdani</h4>

    <p class="text-secondary" style="font-size:13px;line-height:1.9">
        Fuzzy Mamdani merupakan metode sistem inferensi fuzzy yang digunakan
        untuk menghasilkan keputusan berdasarkan beberapa variabel input.
        Pada ExpireWise, metode ini digunakan untuk menentukan rekomendasi
        besaran diskon produk berdasarkan sisa masa kedaluwarsa, jumlah stok,
        dan minat pembeli.
    </p>
</div>

<div class="card-modern mb-4">
    <h5 class="fw-bold mb-3">Variabel dan Himpunan Fuzzy</h5>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Variabel</th>
                    <th>Himpunan</th>
                    <th>Rentang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Sisa Kedaluwarsa</td>
                    <td>Sangat Dekat, Sedang, Lama</td>
                    <td>0–30 hari</td>
                </tr>
                <tr>
                    <td>Jumlah Stok</td>
                    <td>Sedikit, Sedang, Banyak</td>
                    <td>0–100 unit</td>
                </tr>
                <tr>
                    <td>Minat Pembeli</td>
                    <td>Rendah, Sedang, Tinggi</td>
                    <td>0–100 poin</td>
                </tr>
                <tr>
                    <td>Besaran Diskon</td>
                    <td>Kecil, Sedang, Besar</td>
                    <td>0–50%</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card-modern">
    <h5 class="fw-bold mb-4">Tahapan Perhitungan</h5>

    @php
        $steps = [
            ['Fuzzifikasi', 'Mengubah nilai input menjadi derajat keanggotaan fuzzy.'],
            ['Implikasi', 'Menghitung kekuatan aturan IF–THEN menggunakan operator MIN.'],
            ['Agregasi', 'Menggabungkan keluaran aturan menggunakan operator MAX.'],
            ['Defuzzifikasi', 'Menghasilkan nilai diskon akhir menggunakan metode Centroid.']
        ];
    @endphp

    @foreach($steps as $i => $step)
        <div class="d-flex gap-3 mb-4">
            <div class="stat-icon flex-shrink-0"
                 style="background:#CCFBF1;color:#0D9488">
                {{ $i + 1 }}
            </div>
            <div>
                <h6 class="fw-bold mb-1">{{ $step[0] }}</h6>
                <p class="text-secondary small mb-0">{{ $step[1] }}</p>
            </div>
        </div>
    @endforeach

    <div class="alert alert-info mb-0" style="font-size:12px">
        <i class="bi bi-info-circle me-2"></i>
        Sistem menggunakan 27 aturan IF–THEN berdasarkan kombinasi
        tiga variabel input, masing-masing memiliki tiga himpunan fuzzy.
    </div>
</div>

@endsection
