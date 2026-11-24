
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ExpireWise') - Smart Discount System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy: #102A43;
            --teal: #0D9488;
            --bg: #F3F6FA;
            --muted: #718096;
        }

        * { font-family: 'Plus Jakarta Sans', sans-serif; }

        body {
            background: var(--bg);
            color: var(--navy);
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: var(--navy);
            position: fixed;
            top: 0;
            left: 0;
            padding: 28px 18px;
            z-index: 1000;
        }

        .brand {
            color: white;
            font-size: 22px;
            font-weight: 800;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 10px 45px;
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: var(--teal);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-label {
            color: #91A6B9;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1.4px;
            margin: 24px 12px 12px;
        }

        .sidebar .nav-link {
            color: #C1CEDB;
            padding: 12px 14px;
            border-radius: 10px;
            margin-bottom: 6px;
            font-size: 13px;
            font-weight: 600;
            display: flex;
            gap: 12px;
            align-items: center;
            transition: .2s;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: white;
            background: #24465F;
        }

        .sidebar .nav-link.active {
            border-left: 3px solid #2DD4BF;
        }

        .sidebar .nav-link i { font-size: 17px; }

        .main-content {
            margin-left: 250px;
            min-height: 100vh;
            padding: 30px 38px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .page-title {
            font-size: 25px;
            font-weight: 800;
            margin-bottom: 5px;
        }

        .subtitle {
            font-size: 13px;
            color: var(--muted);
        }

        .card-modern {
            background: white;
            border: 1px solid #E8EDF3;
            border-radius: 17px;
            padding: 22px;
            box-shadow: 0 4px 18px rgba(16,42,67,.035);
        }

        .stat-icon {
            width: 46px;
            height: 46px;
            border-radius: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 21px;
        }

        .btn-teal {
            background: var(--teal);
            color: white;
            border: none;
            border-radius: 10px;
            padding: 12px 20px;
            font-weight: 700;
        }

        .btn-teal:hover {
            background: #0F766E;
            color: white;
        }

        .form-control, .form-select {
            border: 1px solid #DFE6ED;
            border-radius: 10px;
            padding: 11px 13px;
            font-size: 13px;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--teal);
            box-shadow: 0 0 0 3px rgba(13,148,136,.1);
        }

        .form-label {
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .table { font-size: 12px; }
        .table th {
            color: #718096;
            font-weight: 700;
            background: #F8FAFC;
            padding: 13px;
        }
        .table td {
            padding: 15px 13px;
            vertical-align: middle;
        }

        @media(max-width: 768px) {
            .sidebar {
                width: 100%;
                min-height: auto;
                position: relative;
                padding: 15px;
            }

            .brand { margin: 0 5px 15px; }
            .sidebar .nav-label { margin-top: 12px; }
            .main-content {
                margin-left: 0;
                padding: 22px 16px;
            }
            .topbar { align-items: flex-start; gap: 15px; }
        }
    </style>

    @stack('styles')
</head>
<body>

<aside class="sidebar">
    <a href="{{ route('home') }}" class="brand">
        <span class="brand-icon">
            <i class="bi bi-box-seam"></i>
        </span>
        ExpireWise
    </a>

    <div class="nav-label">MENU UTAMA</div>

    <nav class="nav flex-column">
        <a href="{{ route('home') }}"
           class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
            <i class="bi bi-grid"></i> Dashboard
        </a>

        <a href="{{ route('diskon.index') }}"
           class="nav-link {{ request()->routeIs('diskon.*') ? 'active' : '' }}">
            <i class="bi bi-calculator"></i> Hitung Diskon
        </a>

        <a href="{{ route('riwayat.index') }}"
           class="nav-link {{ request()->routeIs('riwayat.*') ? 'active' : '' }}">
            <i class="bi bi-clock-history"></i> Riwayat
        </a>
    </nav>

    <div class="nav-label">INFORMASI</div>

    <nav class="nav flex-column">
        <a href="{{ route('metode.index') }}"
           class="nav-link {{ request()->routeIs('metode.*') ? 'active' : '' }}">
            <i class="bi bi-diagram-3"></i> Metode Fuzzy
        </a>
    </nav>

    <div class="mt-5 p-3 rounded-3" style="background:#1C3B54">
        <div class="text-white fw-bold small mb-1">
            <i class="bi bi-lightbulb text-warning me-1"></i>
            Smart Discount
        </div>
        <small style="color:#B7C9D8;font-size:11px">
            Rekomendasi diskon cerdas dengan metode Fuzzy Mamdani.
        </small>
    </div>
</aside>

<main class="main-content">
    <header class="topbar">
        <div>
            <h1 class="page-title">@yield('page-heading', 'Dashboard')</h1>
            <p class="subtitle mb-0">@yield('page-description', 'Selamat datang di ExpireWise.')</p>
        </div>

        <div class="d-flex align-items-center gap-2">
            <div class="rounded-circle d-flex align-items-center justify-content-center"
                 style="width:40px;height:40px;background:#D9F3EF;color:#0D9488">
                <i class="bi bi-person-fill fs-5"></i>
            </div>
            <div>
                <div class="fw-bold" style="font-size:12px">Administrator</div>
                <div class="text-secondary" style="font-size:10px">Smart Discount System</div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="text-center text-secondary mt-5 py-3" style="font-size:11px">
        © {{ date('Y') }} ExpireWise · Fuzzy Mamdani Decision Support System
    </footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')

</body>
</html>
