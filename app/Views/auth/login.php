<?= $this->extend('layout_clear') ?>
<?= $this->section('content') ?>

    <title><?= esc($title ?? 'Login Admin - MagangHub') ?></title>

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            display: flex;
        }

        /* ── LEFT PANEL ── */
        .login-left {
            flex: 1;
            background: linear-gradient(145deg, #1A1235 0%, #2D1B6B 60%, #1A1235 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 64px 72px;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 60% 60% at 80% 20%, rgba(91,60,244,.35) 0%, transparent 60%),
                radial-gradient(ellipse 50% 50% at 10% 80%, rgba(249,115,22,.2) 0%, transparent 55%);
        }

        /* Decorative circles */
        .deco-circle {
            position: absolute;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,.06);
        }
        .deco-circle-1 { width: 400px; height: 400px; top: -100px; right: -100px; }
        .deco-circle-2 { width: 250px; height: 250px; bottom: 80px; left: -80px; }
        .deco-circle-3 { width: 150px; height: 150px; bottom: 200px; right: 40px; border-color: rgba(249,115,22,.15); }

        .left-content { position: relative; z-index: 2; max-width: 420px; }

        .brand-mark {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 56px;
        }
        .brand-mark-icon {
            width: 46px;
            height: 46px;
            background: linear-gradient(135deg, #5B3CF4, #F97316);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.3rem;
            box-shadow: 0 8px 24px rgba(91,60,244,.4);
        }
        .brand-mark-text { font-size: 1.4rem; font-weight: 800; color: #fff; }
        .brand-mark-text span { color: #A78BFA; }

        .left-content h1 {
            font-size: clamp(2rem, 3.5vw, 2.8rem);
            font-weight: 800;
            color: #fff;
            line-height: 1.2;
            letter-spacing: -0.5px;
            margin-bottom: 18px;
        }
        .left-content h1 .highlight {
            background: linear-gradient(90deg, #A78BFA, #F97316);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .left-content p {
            color: rgba(255,255,255,.6);
            font-size: .95rem;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        /* Feature chips */
        .feature-chips { display: flex; flex-direction: column; gap: 12px; }
        .chip {
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(255,255,255,.07);
            border: 1px solid rgba(255,255,255,.1);
            border-radius: 14px;
            padding: 14px 18px;
            backdrop-filter: blur(8px);
            transition: transform .2s;
        }
        .chip:hover { transform: translateX(6px); }
        .chip-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            flex-shrink: 0;
        }
        .chip-text { font-size: .875rem; color: rgba(255,255,255,.8); font-weight: 500; }

        /* ── RIGHT PANEL ── */
        .login-right {
            width: 480px;
            flex-shrink: 0;
            background: #F8F7FF;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 52px;
            position: relative;
        }

        .login-right::before {
            content: '';
            position: absolute;
            top: 0; left: 0; bottom: 0;
            width: 1px;
            background: linear-gradient(to bottom, transparent, rgba(91,60,244,.3), transparent);
        }

        .login-header { margin-bottom: 36px; }
        .login-header h2 { font-size: 1.75rem; font-weight: 800; color: #1A1235; margin-bottom: 6px; }
        .login-header p   { font-size: .875rem; color: #6B7280; }

        /* Alert */
        .alert-custom {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 12px;
            font-size: .85rem;
            font-weight: 500;
            margin-bottom: 24px;
        }
        .alert-error {
            background: rgba(239,68,68,.08);
            border: 1px solid rgba(239,68,68,.2);
            color: #DC2626;
        }
        .alert-success {
            background: rgba(16,185,129,.08);
            border: 1px solid rgba(16,185,129,.2);
            color: #059669;
        }

        /* Form elements */
        .form-group { margin-bottom: 20px; }
        .form-label {
            display: block;
            font-size: .82rem;
            font-weight: 700;
            color: #374151;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }
        .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #9CA3AF;
            font-size: 1rem;
            pointer-events: none;
        }
        .form-input {
            width: 100%;
            padding: 13px 14px 13px 42px;
            border: 1.5px solid rgba(91,60,244,.15);
            border-radius: 12px;
            font-family: inherit;
            font-size: .9rem;
            color: #1A1235;
            background: #fff;
            outline: none;
            transition: all .2s;
        }
        .form-input:focus {
            border-color: #5B3CF4;
            box-shadow: 0 0 0 4px rgba(91,60,244,.1);
        }
        .form-input::placeholder { color: #D1D5DB; }

        .toggle-pw {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #9CA3AF;
            cursor: pointer;
            font-size: 1rem;
            transition: color .2s;
        }
        .toggle-pw:hover { color: #5B3CF4; }

        /* Hint box */
        .hint-box {
            background: rgba(91,60,244,.06);
            border: 1px dashed rgba(91,60,244,.25);
            border-radius: 12px;
            padding: 12px 16px;
            margin-bottom: 24px;
            font-size: .8rem;
            color: #5B3CF4;
        }
        .hint-box strong { display: block; margin-bottom: 4px; }

        /* Submit button */
        .btn-login {
            width: 100%;
            padding: 14px;
            border-radius: 13px;
            background: linear-gradient(135deg, #5B3CF4, #3D1FD9);
            color: #fff;
            font-family: inherit;
            font-size: .95rem;
            font-weight: 700;
            border: none;
            cursor: pointer;
            box-shadow: 0 6px 20px rgba(91,60,244,.35);
            transition: all .25s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
        }
        .btn-login:hover { transform: translateY(-2px); box-shadow: 0 10px 28px rgba(91,60,244,.45); }
        .btn-login:active { transform: translateY(0); }

        .back-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            margin-top: 20px;
            font-size: .85rem;
            color: #6B7280;
            text-decoration: none;
            transition: color .2s;
        }
        .back-link:hover { color: #5B3CF4; }

        /* Responsive */
        /* @media (max-width: 900px) {
            .login-left { display: none; }
            .login-right { width: 100%; padding: 48px 32px; }
        } */
         @media (max-width: 900px) {
        body {
            flex-direction: column;
            overflow: auto;
        }

        .login-left {display: none;}

        .login-right {
            width: 100%;
            padding: 32px 20px;
        }
    }

    @media (max-width: 500px) {
        .login-header h2 {font-size: 1.4rem;}

        .btn-login {
            font-size: 0.85rem;
            padding: 12px;
        }
    }
    </style>

    <!-- LEFT PANEL -->
    <div class="login-left">
        <div class="deco-circle deco-circle-1"></div>
        <div class="deco-circle deco-circle-2"></div>
        <div class="deco-circle deco-circle-3"></div>

        <div class="left-content">
            <div class="brand-mark">
                <div class="brand-mark-icon"><i class="bi bi-briefcase-fill"></i></div>
                <div class="brand-mark-text">Magang<span>Hub</span></div>
            </div>

            <h1>Panel Admin <span class="highlight">MagangHub</span></h1>
            <p>Kelola program magang, artikel, dan data platform dari satu dasbor yang lengkap dan mudah digunakan.</p>

            <div class="feature-chips">
                <div class="chip">
                    <div class="chip-icon" style="background:rgba(91,60,244,.3); color:#C4B5FD;">
                        <i class="bi bi-collection-fill"></i>
                    </div>
                    <span class="chip-text">Kelola semua program magang dengan mudah</span>
                </div>
                <div class="chip">
                    <div class="chip-icon" style="background:rgba(249,115,22,.2); color:#FDBA74;">
                        <i class="bi bi-file-richtext-fill"></i>
                    </div>
                    <span class="chip-text">Publikasikan dan atur artikel & tips magang</span>
                </div>
                <div class="chip">
                    <div class="chip-icon" style="background:rgba(20,184,166,.2); color:#5EEAD4;">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <span class="chip-text">Monitor statistik dan perkembangan platform</span>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="login-right">
        <div class="login-header">
            <h2>Selamat Datang 👋</h2>
            <p>Masukkan kredensial admin untuk mengakses dasbor.</p>
        </div>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert-custom alert-error">
                <i class="bi bi-exclamation-circle-fill" style="flex-shrink:0; margin-top:1px;"></i>
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert-custom alert-success">
                <i class="bi bi-check-circle-fill" style="flex-shrink:0; margin-top:1px;"></i>
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <!-- Hint -->
        <div class="hint-box">
            <strong><i class="bi bi-info-circle"></i> Kredensial Demo:</strong>
            Username: <strong>admin</strong> &nbsp;|&nbsp; Password: <strong>password123</strong>
        </div>

        <form action="<?= base_url('/auth/process') ?>" method="POST">
            <div class="form-group">
                <label class="form-label" for="username">Username Admin</label>
                <div class="input-wrapper">
                    <span class="input-icon"><i class="bi bi-person-fill"></i></span>
                    <input
                        type="text"
                        class="form-input"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                        autocomplete="username"
                        required
                    >
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <div class="input-wrapper">
                    <span class="input-icon"><i class="bi bi-lock-fill"></i></span>
                    <input
                        type="password"
                        class="form-input"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >
                    <button type="button" class="toggle-pw" onclick="togglePassword()" id="togglePwBtn">
                        <i class="bi bi-eye-fill" id="eyeIcon"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn-login">
                <i class="bi bi-shield-lock-fill"></i>
                Masuk ke Dashboard
            </button>
        </form>

        <a href="<?= base_url('/') ?>" class="back-link">
            <i class="bi bi-arrow-left"></i> Kembali ke Halaman Utama
        </a>
    </div>

    <script>
    function togglePassword() {
        const pw = document.getElementById('password');
        const icon = document.getElementById('eyeIcon');
        if (pw.type === 'password') {
            pw.type = 'text';
            icon.className = 'bi bi-eye-slash-fill';
        } else {
            pw.type = 'password';
            icon.className = 'bi bi-eye-fill';
        }
    }
    </script>

<?= $this->endSection() ?>