
@extends('layouts.app')

@section('title', 'Hitung Diskon')
@section('page-heading', 'Hitung Diskon')
@section('page-description', 'Masukkan informasi produk untuk mendapatkan rekomendasi diskon.')

@section('content')

<div class="row g-4">
    <div class="col-lg-8">
        <div class="card-modern">
            <div class="d-flex align-items-center gap-3 mb-4">
                <div class="stat-icon" style="background:#CCFBF1;color:#0D9488">
                    <i class="bi bi-calculator"></i>
                </div>
                <div>
                    <h5 class="fw-bold mb-1">Formulir Data Produk</h5>
                    <p class="text-secondary small mb-0">Lengkapi seluruh data berikut.</p>
                </div>
            </div>

            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" class="form-control"
                           placeholder="Contoh: Biskuit Cokelat">
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Awal (Rp)</label>
                    <input type="number" class="form-control"
                           placeholder="Contoh: 20000" min="1">
                </div>

                <hr class="my-4">

                <h6 class="fw-bold mb-3">Variabel Input Fuzzy</h6>

                <div class="mb-4">
                    <label class="form-label">
                        Sisa Masa Kedaluwarsa (Hari)
                    </label>
                    <input type="number" class="form-control"
                           placeholder="Masukkan 0–30 hari"
                           min="0" max="30">
                    <div class="form-text">
                        Rentang input: 0–30 hari
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Jumlah Stok (Unit)</label>
                    <input type="number" class="form-control"
                           placeholder="Masukkan 0–100 unit"
                           min="0" max="100">
                    <div class="form-text">
                        Rentang input: 0–100 unit
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Minat Pembeli (0–100)</label>
                    <input type="number" class="form-control"
                           placeholder="Masukkan skor minat pembeli"
                           min="0" max="100">
                    <div class="form-text">
                        Skor simulasi atau berdasarkan data penjualan.
                    </div>
                </div>

                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-teal flex-grow-1">
                        <i class="bi bi-calculator me-2"></i>
                        Hitung Rekomendasi Diskon
                    </button>
                    <button type="reset" class="btn btn-light border px-4">
                        <i class="bi bi-arrow-counterclockwise"></i>
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-modern mb-3">
            <h6 class="fw-bold mb-3">
                <i class="bi bi-info-circle text-success me-2"></i>
                Rentang Input
            </h6>

            <div class="p-3 rounded-3 mb-3" style="background:#F0FDFA">
                <div class="small fw-bold">Sisa Kedaluwarsa</div>
                <h5 class="fw-bold mb-0 mt-2" style="color:#0D9488">0–30 Hari</h5>
            </div>

            <div class="p-3 rounded-3 mb-3" style="background:#EFF6FF">
                <div class="small fw-bold">Jumlah Stok</div>
                <h5 class="fw-bold mb-0 mt-2 text-primary">0–100 Unit</h5>
            </div>

            <div class="p-3 rounded-3" style="background:#FFFBEB">
                <div class="small fw-bold">Minat Pembeli</div>
                <h5 class="fw-bold mb-0 mt-2 text-warning">0–100 Poin</h5>
            </div>
        </div>

        <div class="card-modern">
            <h6 class="fw-bold mb-2">
                <i class="bi bi-lightbulb text-warning me-2"></i>
                Informasi
            </h6>
            <p class="text-secondary mb-0" style="font-size:12px;line-height:1.8">
                Sistem menggunakan metode Fuzzy Mamdani dengan 27 aturan
                IF–THEN untuk menentukan rekomendasi persentase diskon.
            </p>
        </div>
    </div>
</div>

@endsection
