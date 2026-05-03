<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MagangHub - Platform Program Magang Terbaik untuk Mahasiswa dan Pelajar Indonesia">
    <title><?= esc($title ?? 'MagangHub') ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary:      #5B3CF4;
            --primary-dark: #3D1FD9;
            --accent:       #F97316;
            --teal:         #14B8A6;
            --surface:      #F8F7FF;
            --card-bg:      #FFFFFF;
            --text-dark:    #1A1235;
            --text-muted:   #6B7280;
            --border:       rgba(91, 60, 244, 0.12);
            --shadow-sm:    0 2px 12px rgba(91,60,244,.08);
            --shadow-md:    0 8px 32px rgba(91,60,244,.14);
            --shadow-lg:    0 20px 60px rgba(91,60,244,.18);
            --radius:       16px;
            --navbar-h:     72px;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--surface);
            color: var(--text-dark);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ── NAVBAR ── */
        .site-navbar {
            position: sticky;
            top: 0;
            z-index: 1080;
            height: var(--navbar-h);
            background: rgba(255,255,255,0.80);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
            transition: all .3s ease;
        }

        .site-navbar .container-fluid {
            height: 100%;
            display: flex;
            align-items: center;
            padding: 0 28px;
        }

        .navbar-brand-custom {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            font-weight: 800;
            font-size: 1.35rem;
            letter-spacing: -0.5px;
            color: var(--text-dark);
        }

        .brand-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
            flex-shrink: 0;
            box-shadow: 0 4px 14px rgba(91,60,244,.35);
        }

        .brand-text span { color: var(--primary); }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 4px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-links a {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 14px;
            border-radius: 10px;
            color: var(--text-muted);
            font-weight: 500;
            font-size: .9rem;
            text-decoration: none;
            transition: all .2s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
            background: rgba(91,60,244,.07);
        }

        .nav-links a.active-link {
            color: var(--primary);
            background: rgba(91,60,244,.1);
            font-weight: 600;
        }

        .btn-nav-login {
            display: flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: #fff !important;
            padding: 9px 20px !important;
            border-radius: 10px !important;
            font-weight: 600 !important;
            font-size: .875rem !important;
            box-shadow: 0 4px 14px rgba(91,60,244,.3);
            transition: all .25s ease !important;
        }

        .btn-nav-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(91,60,244,.4) !important;
            background: linear-gradient(135deg, var(--primary-dark) 0%, #2A0FBF 100%) !important;
        }

        .btn-nav-logout {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(239,68,68,.1);
            color: #DC2626 !important;
            padding: 8px 16px !important;
            border-radius: 10px !important;
            font-weight: 600 !important;
            font-size: .875rem !important;
            border: 1px solid rgba(239,68,68,.2) !important;
            transition: all .25s ease !important;
        }

        .btn-nav-logout:hover {
            background: rgba(239,68,68,.15) !important;
            border-color: rgba(239,68,68,.35) !important;
        }

        .btn-nav-admin {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(91,60,244,.1);
            color: var(--primary) !important;
            padding: 8px 16px !important;
            border-radius: 10px !important;
            font-weight: 600 !important;
            font-size: .875rem !important;
            border: 1px solid var(--border) !important;
            transition: all .25s ease !important;
        }

        .btn-nav-admin:hover {
            background: rgba(91,60,244,.18) !important;
        }

        .navbar-toggler-custom {
            background: none;
            border: 1.5px solid var(--border);
            border-radius: 10px;
            padding: 8px 10px;
            cursor: pointer;
            color: var(--text-dark);
            display: none;
        }

        /* ── SIDEBAR (Admin) ── */
        .admin-sidebar {
            width: 250px;
            min-height: calc(100vh - var(--navbar-h));
            background: linear-gradient(175deg, #1A1235 0%, #2D1B6B 100%);
            padding: 28px 16px;
            flex-shrink: 0;
            position: sticky;
            top: var(--navbar-h);
            height: calc(100vh - var(--navbar-h));
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        /* ── CONTENT AREA ── */
        .content-area {
            flex: 1;
            padding: 32px;
            min-width: 0;
        }

        /* ── UTILITY CLASSES ── */
        .badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 4px 12px;
            border-radius: 999px;
            font-size: .75rem;
            font-weight: 600;
        }

        .badge-success { background: rgba(20,184,166,.12); color: #0D9488; }
        .badge-warning { background: rgba(249,115,22,.12); color: #EA580C; }
        .badge-danger  { background: rgba(239,68,68,.12);  color: #DC2626; }
        .badge-purple  { background: rgba(91,60,244,.12);  color: var(--primary); }
        .badge-gray    { background: rgba(107,114,128,.1); color: #4B5563; }

        /* ── RESPONSIVE ── */
        @media (max-width: 768px) {
            .navbar-toggler-custom { display: flex; }
            .nav-collapse {
                position: absolute;
                /* top: var(--navbar-h); */
                top: 100%;
                left: 0; right: 0;
                background: rgba(255,255,255,.98);
                border-bottom: 1px solid var(--border);
                /* padding: 16px 20px 24px; */
                padding: 20px 20px 30px;
                flex-direction: column;
                gap: 4px;
                box-shadow: var(--shadow-md);
                transform: translateY(-10%);
                opacity: 0;
                pointer-events: none;
                transition: all .3s ease;
                /* z-index: 1070; */
                z-index: 2000;
            }
            .nav-collapse.open { transform: translateY(0); opacity: 1; pointer-events: auto;}
            .nav-links { flex-direction: column; width: 100%; }
            .nav-links a { width: 100%; }
            .nav-right { flex-direction: column; width: 100%; gap: 8px; }
            .btn-nav-login, .btn-nav-logout, .btn-nav-admin { justify-content: center; width: 100%; }
            .site-navbar {
                height: auto !important;
                padding: 10px 0;
            }
            .site-navbar .container-fluid {
                flex-wrap: wrap;
                height: auto;
            }
            .btn-nav-login {
            width: 100%;
            justify-content: center;
            }
        }
    </style>
</head>
<body>

<!-- ── NAVBAR ── -->
<nav class="site-navbar">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand-custom" href="<?= base_url('/') ?>">
            <div class="brand-icon"><i class="bi bi-briefcase-fill"></i></div>
            <span>Magang<span>Hub</span></span>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler-custom ms-auto me-3" id="navToggler" onclick="toggleNav()">
            <i class="bi bi-list fs-5"></i>
        </button>

        <!-- Nav Links -->
        <div class="nav-collapse d-md-flex align-items-center gap-2 flex-grow-1 ms-4" id="navCollapse">
            <ul class="nav-links me-auto">
                <li><a href="<?= base_url('/') ?>" id="nav-home"><i class="bi bi-house-door"></i> Home</a></li>
                <li><a href="<?= base_url('/program') ?>" id="nav-program"><i class="bi bi-collection"></i> Program</a></li>
                <li><a href="<?= base_url('/artikel') ?>" id="nav-artikel"><i class="bi bi-newspaper"></i> Artikel</a></li>
                <li><a href="<?= base_url('/tentang') ?>" id="nav-tentang"><i class="bi bi-info-circle"></i> Tentang</a></li>
                <li><a href="<?= base_url('/kontak') ?>" id="nav-kontak"><i class="bi bi-envelope"></i> Kontak</a></li>
            </ul>

            <div class="nav-right d-flex align-items-center gap-2">
                <?php if (session()->get('isLoggedIn')): ?>
                    <a href="<?= base_url('/admin') ?>" class="btn-nav-admin">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                    <a href="<?= base_url('/logout') ?>" class="btn-nav-logout">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                <?php else: ?>
                    <a href="<?= base_url('/login') ?>" class="btn-nav-login">
                        <i class="bi bi-shield-lock"></i> Login Admin
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<script>
function toggleNav() {
    document.getElementById('navCollapse').classList.toggle('open');
}
// Active link highlight
(function(){
    const path = window.location.pathname;
    const map = {
        '/': 'nav-home',
        '/program': 'nav-program',
        '/artikel': 'nav-artikel',
        '/tentang': 'nav-tentang',
        '/kontak': 'nav-kontak',
    };
    for(const [route, id] of Object.entries(map)){
        if(path === route || path === route + '/'){
            const el = document.getElementById(id);
            if(el) el.classList.add('active-link');
        }
    }
})();
</script>
