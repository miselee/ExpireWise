
@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-heading', 'Dashboard')
@section('page-description', 'Pantau dan kelola rekomendasi diskon produk dengan lebih cerdas.')

@section('content')

<div class="card-modern mb-4 overflow-hidden"
     style="background:linear-gradient(115deg,#102A43,#176B70);color:white;position:relative">
    <div class="row align-items-center">
        <div class="col-lg-8 position-relative" style="z-index:1">
            <span class="badge rounded-pill mb-3 px-3 py-2"
                  style="background:#D0F5EF;color:#087E78">
                SMART DISCOUNT SYSTEM
            </span>

            <h2 class="fw-bold mb-3" style="font-size:30px">
                Kelola Diskon Produk<br>Lebih Cerdas dengan AI Fuzzy
            </h2>

            <p style="color:#D5E8EA;font-size:13px;max-width:480px;line-height:1.8">
                Tentukan rekomendasi diskon berdasarkan sisa masa kedaluwarsa,
                jumlah stok, dan minat pembeli menggunakan metode Fuzzy Mamdani.
            </p>

            <a href="{{ route('diskon.index') }}"
               class="btn btn-light fw-bold mt-2 px-4 py-3"
               style="color:#0D8178;border-radius:10px;font-size:13px">
                <i class="bi bi-calculator me-2"></i> Mulai Hitung Diskon
            </a>
        </div>

        <div class="col-lg-4 text-center d-none d-lg-block">
            <i class="bi bi-box-seam"
               style="font-size:125px;color:#A7F3E8;opacity:.85"></i>
        </div>
    </div>
</div>

<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card-modern h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="text-secondary small fw-semibold">Total Perhitungan</div>
                    <h3 class="fw-bold mt-2 mb-0">0</h3>
                    <small class="text-secondary">Seluruh riwayat perhitungan</small>
                </div>
                <div class="stat-icon" style="background:#E0F2FE;color:#0284C7">
                    <i class="bi bi-calculator"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-modern h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="text-secondary small fw-semibold">Rata-rata Diskon</div>
                    <h3 class="fw-bold mt-2 mb-0">0%</h3>
                    <small class="text-secondary">Rata-rata rekomendasi</small>
                </div>
                <div class="stat-icon" style="background:#D1FAE5;color:#059669">
                    <i class="bi bi-percent"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-modern h-100">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="text-secondary small fw-semibold">Metode Digunakan</div>
                    <h3 class="fw-bold mt-2 mb-0" style="font-size:21px">Mamdani</h3>
                    <small class="text-secondary">Fuzzy Inference System</small>
                </div>
                <div class="stat-icon" style="background:#F3E8FF;color:#9333EA">
                    <i class="bi bi-diagram-3"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-lg-7">
        <div class="card-modern h-100">
            <h6 class="fw-bold mb-3">Bagaimana ExpireWise Bekerja?</h6>

            <div class="d-flex gap-3 mb-3">
                <div class="stat-icon flex-shrink-0"
                     style="background:#E0F2FE;color:#0284C7">
                    <i class="bi bi-box"></i>
                </div>
                <div>
                    <div class="fw-bold small">Input Data Produk</div>
                    <div class="text-secondary" style="font-size:12px">
                        Masukkan masa kedaluwarsa, jumlah stok, dan minat pembeli.
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3 mb-3">
                <div class="stat-icon flex-shrink-0"
                     style="background:#CCFBF1;color:#0D9488">
                    <i class="bi bi-gear"></i>
                </div>
                <div>
                    <div class="fw-bold small">Proses Fuzzy Mamdani</div>
                    <div class="text-secondary" style="font-size:12px">
                        Sistem menjalankan fuzzifikasi, implikasi, agregasi, dan defuzzifikasi.
                    </div>
                </div>
            </div>

            <div class="d-flex gap-3">
                <div class="stat-icon flex-shrink-0"
                     style="background:#FEF3C7;color:#D97706">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
                <div>
                    <div class="fw-bold small">Rekomendasi Diskon</div>
                    <div class="text-secondary" style="font-size:12px">
                        Dapatkan persentase diskon dan harga setelah diskon.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="card-modern h-100">
            <h6 class="fw-bold mb-3">Variabel Sistem</h6>

            <div class="d-flex justify-content-between border-bottom py-3">
                <span class="small">Sisa Kedaluwarsa</span>
                <span class="badge bg-info-subtle text-info">0–30 hari</span>
            </div>

            <div class="d-flex justify-content-between border-bottom py-3">
                <span class="small">Jumlah Stok</span>
                <span class="badge bg-success-subtle text-success">0–100 unit</span>
            </div>

            <div class="d-flex justify-content-between border-bottom py-3">
                <span class="small">Minat Pembeli</span>
                <span class="badge bg-warning-subtle text-warning">0–100 poin</span>
            </div>

            <div class="d-flex justify-content-between py-3">
                <span class="small">Output Diskon</span>
                <span class="badge bg-primary-subtle text-primary">0–50%</span>
            </div>
        </div>
    </div>
</div>

@endsection
