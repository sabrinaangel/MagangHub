<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
/* ── HERO ── */
.hero {
    background: linear-gradient(135deg, #1A1235 0%, #2D1B6B 50%, #1A1235 100%);
    position: relative;
    overflow: hidden;
    padding: 90px 0 80px;
    color: #fff;
}

.hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 60% 50% at 70% 40%, rgba(91,60,244,.3) 0%, transparent 60%),
        radial-gradient(ellipse 40% 40% at 20% 70%, rgba(249,115,22,.15) 0%, transparent 55%);
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(91,60,244,.25);
    border: 1px solid rgba(91,60,244,.4);
    color: #C4B5FD;
    padding: 6px 16px;
    border-radius: 999px;
    font-size: .8rem;
    font-weight: 600;
    letter-spacing: .04em;
    margin-bottom: 24px;
    backdrop-filter: blur(10px);
    animation: fadeDown .6s ease both;
}

.hero h1 {
    font-size: clamp(2.2rem, 5vw, 3.8rem);
    font-weight: 800;
    line-height: 1.15;
    letter-spacing: -1px;
    margin-bottom: 20px;
    animation: fadeDown .7s .1s ease both;
}

.hero h1 .gradient-text {
    background: linear-gradient(90deg, #A78BFA 0%, #F97316 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero p.lead {
    font-size: 1.1rem;
    color: rgba(255,255,255,.7);
    max-width: 540px;
    line-height: 1.75;
    margin-bottom: 32px;
    animation: fadeDown .7s .2s ease both;
}

.hero-btns {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    animation: fadeDown .7s .3s ease both;
}

.btn-hero-primary {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    background: linear-gradient(135deg, #5B3CF4 0%, #3D1FD9 100%);
    color: #fff;
    padding: 14px 28px;
    border-radius: 14px;
    font-weight: 700;
    font-size: .95rem;
    text-decoration: none;
    box-shadow: 0 8px 28px rgba(91,60,244,.45);
    transition: all .25s ease;
}
.btn-hero-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 14px 36px rgba(91,60,244,.55);
    color: #fff;
}

.btn-hero-ghost {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    background: rgba(255,255,255,.1);
    border: 1.5px solid rgba(255,255,255,.2);
    color: rgba(255,255,255,.9);
    padding: 13px 24px;
    border-radius: 14px;
    font-weight: 600;
    font-size: .95rem;
    text-decoration: none;
    backdrop-filter: blur(10px);
    transition: all .25s ease;
}
.btn-hero-ghost:hover {
    background: rgba(255,255,255,.18);
    color: #fff;
    transform: translateY(-2px);
}

/* Floating visual element */
.hero-visual {
    position: relative;
    animation: fadeLeft .8s .1s ease both;
}

.hero-card-float {
    background: rgba(255,255,255,.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 20px;
    padding: 20px 24px;
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 14px;
    transition: transform .3s ease;
}
.hero-card-float:hover { transform: translateX(8px); }

.hcf-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    flex-shrink: 0;
}
.hcf-icon.purple { background: linear-gradient(135deg, #5B3CF4, #8B5CF6); }
.hcf-icon.orange { background: linear-gradient(135deg, #F97316, #FBBF24); }
.hcf-icon.teal   { background: linear-gradient(135deg, #14B8A6, #10B981); }

.hcf-info .label { font-size: .7rem; color: rgba(255,255,255,.5); font-weight: 600; text-transform: uppercase; letter-spacing: .06em; }
.hcf-info .value { font-size: 1rem; color: #fff; font-weight: 700; }

/* ── STATS ── */
.stats-section {
    background: #fff;
    padding: 60px 0;
    border-bottom: 1px solid rgba(91,60,244,.08);
}

.stat-card {
    text-align: center;
    padding: 20px;
}
.stat-number {
    font-size: 2.8rem;
    font-weight: 800;
    background: linear-gradient(135deg, #5B3CF4, #F97316);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
    margin-bottom: 6px;
}
.stat-label { color: #6B7280; font-size: .875rem; font-weight: 500; }

/* ── FEATURES ── */
.features-section { padding: 80px 0; }

.section-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #5B3CF4;
    font-size: .8rem;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    margin-bottom: 12px;
}
.section-eyebrow::before {
    content: '';
    width: 20px;
    height: 2px;
    background: #5B3CF4;
    border-radius: 999px;
}

.section-title {
    font-size: clamp(1.6rem, 3vw, 2.3rem);
    font-weight: 800;
    letter-spacing: -0.5px;
    color: #1A1235;
    margin-bottom: 14px;
}

.feature-card {
    background: #fff;
    border: 1px solid rgba(91,60,244,.1);
    border-radius: 20px;
    padding: 28px;
    height: 100%;
    transition: all .3s ease;
    position: relative;
    overflow: hidden;
}
.feature-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, #5B3CF4, #F97316);
    transform: scaleX(0);
    transition: transform .3s ease;
}
.feature-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 50px rgba(91,60,244,.15);
    border-color: rgba(91,60,244,.2);
}
.feature-card:hover::before { transform: scaleX(1); }

.feat-icon {
    width: 56px;
    height: 56px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 18px;
}
.feat-icon.purple { background: rgba(91,60,244,.12); color: #5B3CF4; }
.feat-icon.orange { background: rgba(249,115,22,.12); color: #F97316; }
.feat-icon.teal   { background: rgba(20,184,166,.12);  color: #14B8A6; }
.feat-icon.green  { background: rgba(16,185,129,.12);  color: #10B981; }

.feature-card h4 { font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; }
.feature-card p  { font-size: .875rem; color: #6B7280; line-height: 1.7; margin: 0; }

/* ── HIGHLIGHT PROGRAMS ── */
.highlight-section { padding: 0 0 80px; }

.prog-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    border: 1px solid rgba(91,60,244,.1);
    transition: all .3s ease;
    height: 100%;
}
.prog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 48px rgba(91,60,244,.14);
}

.prog-card-top {
    height: 8px;
}
.prog-card-top.purple { background: linear-gradient(90deg, #5B3CF4, #8B5CF6); }
.prog-card-top.orange { background: linear-gradient(90deg, #F97316, #FBBF24); }
.prog-card-top.teal   { background: linear-gradient(90deg, #14B8A6, #10B981); }

.prog-card-body { padding: 22px 24px; }

.prog-tag {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: rgba(91,60,244,.08);
    color: #5B3CF4;
    padding: 4px 10px;
    border-radius: 999px;
    font-size: .72rem;
    font-weight: 700;
    margin-bottom: 12px;
}

.prog-card-body h5 { font-size: 1.05rem; font-weight: 700; margin-bottom: 8px; }
.prog-card-body p  { font-size: .85rem; color: #6B7280; margin-bottom: 16px; line-height: 1.65; }

.prog-meta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 14px;
    border-top: 1px solid #F3F4F6;
}
.prog-meta .kuota { font-size: .8rem; color: #6B7280; }
.prog-meta .kuota strong { color: #1A1235; }

.btn-prog {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: linear-gradient(135deg, #5B3CF4, #3D1FD9);
    color: #fff;
    padding: 8px 16px;
    border-radius: 10px;
    font-size: .8rem;
    font-weight: 600;
    text-decoration: none;
    transition: all .2s;
}
.btn-prog:hover { color:#fff; transform: scale(1.04); }

/* ── CTA ── */
.cta-section {
    background: linear-gradient(135deg, #5B3CF4 0%, #3D1FD9 100%);
    padding: 70px 0;
    position: relative;
    overflow: hidden;
}
.cta-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 60% 80% at 80% 50%, rgba(249,115,22,.2) 0%, transparent 60%);
}
.cta-section h2 { font-size: clamp(1.6rem, 3vw, 2.3rem); font-weight: 800; color: #fff; }
.cta-section p  { color: rgba(255,255,255,.75); font-size: 1rem; }

.btn-cta-white {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    background: #fff;
    color: #5B3CF4;
    padding: 14px 28px;
    border-radius: 14px;
    font-weight: 700;
    font-size: .95rem;
    text-decoration: none;
    box-shadow: 0 8px 28px rgba(0,0,0,.15);
    transition: all .25s;
}
.btn-cta-white:hover { transform: translateY(-2px); box-shadow: 0 14px 36px rgba(0,0,0,.2); color: #3D1FD9; }

/* ── ANIMATIONS ── */
@keyframes fadeDown {
    from { opacity: 0; transform: translateY(-20px); }
    to   { opacity: 1; transform: translateY(0); }
}
@keyframes fadeLeft {
    from { opacity: 0; transform: translateX(30px); }
    to   { opacity: 1; transform: translateX(0); }
}
</style>

<!-- ── HERO ── -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="hero-badge">
                    <i class="bi bi-stars"></i> Platform Magang #1 untuk Pelajar Indonesia
                </div>
                <h1>
                    Wujudkan <span class="gradient-text">Karir Impianmu</span> Lewat Magang Berkualitas
                </h1>
                <p class="lead">
                    Temukan ratusan program magang di perusahaan terbaik, kembangkan skill, dan bangun portofolio yang memukau bersama MagangHub.
                </p>
                <div class="hero-btns">
                    <a href="<?= base_url('/program') ?>" class="btn-hero-primary">
                        <i class="bi bi-collection-fill"></i> Jelajahi Program
                    </a>
                    <a href="<?= base_url('/tentang') ?>" class="btn-hero-ghost">
                        <i class="bi bi-play-circle"></i> Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1 d-none d-lg-block hero-visual">
                <div class="hero-card-float">
                    <div class="hcf-icon purple"><i class="bi bi-code-slash"></i></div>
                    <div class="hcf-info">
                        <div class="label">Program Unggulan</div>
                        <div class="value">Web Development — 10 Kuota</div>
                    </div>
                </div>
                <div class="hero-card-float">
                    <div class="hcf-icon orange"><i class="bi bi-palette2"></i></div>
                    <div class="hcf-info">
                        <div class="label">Program Populer</div>
                        <div class="value">UI/UX Design — 8 Kuota</div>
                    </div>
                </div>
                <div class="hero-card-float">
                    <div class="hcf-icon teal"><i class="bi bi-graph-up-arrow"></i></div>
                    <div class="hcf-info">
                        <div class="label">Baru Dibuka</div>
                        <div class="value">Data Analyst — 12 Kuota</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── STATS ── -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Program Tersedia</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number">2K+</div>
                    <div class="stat-label">Alumni Magang</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number">30+</div>
                    <div class="stat-label">Mitra Perusahaan</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Tingkat Kepuasan</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── FEATURES ── -->
<section class="features-section">
    <div class="container">
        <div class="text-center mb-56" style="margin-bottom:48px;">
            <div class="section-eyebrow">Mengapa MagangHub?</div>
            <h2 class="section-title">Keunggulan Platform Kami</h2>
            <p class="text-muted mx-auto" style="max-width:520px; font-size:.95rem; line-height:1.75;">
                Kami merancang setiap fitur untuk memastikan perjalanan magangmu berjalan mulus, efektif, dan bermakna.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-xl-3">
                <div class="feature-card">
                    <div class="feat-icon purple"><i class="bi bi-search"></i></div>
                    <h4>Pencarian Cerdas</h4>
                    <p>Filter program berdasarkan bidang, lokasi, dan durasi untuk menemukan peluang yang paling cocok untukmu.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feature-card">
                    <div class="feat-icon orange"><i class="bi bi-shield-check"></i></div>
                    <h4>Perusahaan Terverifikasi</h4>
                    <p>Setiap mitra perusahaan telah melalui proses verifikasi ketat sehingga kamu bisa magang dengan aman dan nyaman.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feature-card">
                    <div class="feat-icon teal"><i class="bi bi-mortarboard"></i></div>
                    <h4>Mentoring Eksklusif</h4>
                    <p>Dapatkan bimbingan dari mentor berpengalaman di industri yang akan membantu perkembangan karir kamu.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feature-card">
                    <div class="feat-icon green"><i class="bi bi-award"></i></div>
                    <h4>Sertifikat Resmi</h4>
                    <p>Raih sertifikat kelulusan magang yang diakui secara resmi untuk memperkuat nilai jual di dunia kerja.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── HIGHLIGHT PROGRAMS ── -->
<section class="highlight-section">
    <div class="container">
        <div class="d-flex align-items-end justify-content-between mb-4 flex-wrap gap-3">
            <div>
                <div class="section-eyebrow">Program Pilihan</div>
                <h2 class="section-title mb-0">Mulai Dari Sini</h2>
            </div>
            <a href="<?= base_url('/program') ?>" class="btn-prog">Lihat Semua <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="prog-card">
                    <div class="prog-card-top purple"></div>
                    <div class="prog-card-body">
                        <span class="prog-tag"><i class="bi bi-code-slash"></i> Teknologi</span>
                        <h5>Web Development</h5>
                        <p>Belajar membangun website modern menggunakan HTML, CSS, JavaScript, dan framework populer seperti React &amp; Laravel.</p>
                        <div class="prog-meta">
                            <span class="kuota">Kuota: <strong>10 peserta</strong></span>
                            <a href="<?= base_url('/program') ?>" class="btn-prog">Daftar <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="prog-card">
                    <div class="prog-card-top orange"></div>
                    <div class="prog-card-body">
                        <span class="prog-tag" style="background:rgba(249,115,22,.1); color:#F97316;"><i class="bi bi-palette2"></i> Desain</span>
                        <h5>UI/UX Design</h5>
                        <p>Pelajari cara merancang antarmuka pengguna yang intuitif, estetis, dan berorientasi pada pengalaman pengguna.</p>
                        <div class="prog-meta">
                            <span class="kuota">Kuota: <strong>8 peserta</strong></span>
                            <a href="<?= base_url('/program') ?>" class="btn-prog">Daftar <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="prog-card">
                    <div class="prog-card-top teal"></div>
                    <div class="prog-card-body">
                        <span class="prog-tag" style="background:rgba(20,184,166,.1); color:#14B8A6;"><i class="bi bi-graph-up"></i> Data</span>
                        <h5>Data Analytics</h5>
                        <p>Kuasai analisis data menggunakan Python, SQL, dan visualisasi data untuk mendukung pengambilan keputusan bisnis.</p>
                        <div class="prog-meta">
                            <span class="kuota">Kuota: <strong>12 peserta</strong></span>
                            <a href="<?= base_url('/program') ?>" class="btn-prog">Daftar <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── CTA ── -->
<section class="cta-section">
    <div class="container position-relative">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <h2>Siap Memulai Perjalanan Magang Terbaikmu?</h2>
                <p class="mb-0">Bergabunglah bersama lebih dari 2.000 mahasiswa yang telah merasakan manfaat magang bersama MagangHub.</p>
            </div>
            <div class="col-lg-5 text-lg-end">
                <a href="<?= base_url('/program') ?>" class="btn-cta-white">
                    <i class="bi bi-rocket-takeoff-fill"></i> Mulai Sekarang — Gratis!
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
