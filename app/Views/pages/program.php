<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
.page-header-banner {
    background: linear-gradient(135deg, #1A1235 0%, #2D1B6B 100%);
    padding: 56px 0 44px;
    position: relative;
    overflow: hidden;
    color: #fff;
}
.page-header-banner::after {
    content:'';
    position: absolute;
    bottom: -1px; left: 0; right: 0;
    height: 50px;
    background: var(--surface, #F8F7FF);
    clip-path: ellipse(52% 100% at 50% 100%);
}

.page-header-banner .section-eyebrow {
    color: #A78BFA;
    margin-bottom: 10px;
}
.page-header-banner .section-eyebrow::before { background: #A78BFA; }
.page-header-banner h1 { font-size: clamp(1.8rem,4vw,2.8rem); font-weight:800; letter-spacing:-0.5px; margin-bottom: 10px; }
.page-header-banner p  { color: rgba(255,255,255,.65); max-width: 520px; font-size: .95rem; margin: 0; }

.programs-section { padding: 60px 0 80px; }

/* Filter bar */
.filter-bar {
    background: #fff;
    border: 1px solid rgba(91,60,244,.12);
    border-radius: 16px;
    padding: 18px 24px;
    margin-bottom: 36px;
    display: flex;
    align-items: center;
    gap: 12px;
    flex-wrap: wrap;
    box-shadow: 0 4px 20px rgba(91,60,244,.06);
}
.filter-btn {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 7px 16px;
    border-radius: 999px;
    border: 1.5px solid rgba(91,60,244,.2);
    background: transparent;
    color: #6B7280;
    font-size: .8rem;
    font-weight: 600;
    cursor: pointer;
    transition: all .2s;
}
.filter-btn.active, .filter-btn:hover {
    background: #5B3CF4;
    border-color: #5B3CF4;
    color: #fff;
}
.filter-count {
    margin-left: auto;
    font-size: .85rem;
    color: #6B7280;
    white-space: nowrap;
}

/* Program Card */
.prog-main-card {
    background: #fff;
    border-radius: 22px;
    overflow: hidden;
    border: 1px solid rgba(91,60,244,.1);
    transition: all .3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.prog-main-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 54px rgba(91,60,244,.14);
    border-color: rgba(91,60,244,.2);
}

.pmc-header {
    padding: 24px 24px 0;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 12px;
}

.pmc-icon {
    width: 54px;
    height: 54px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    flex-shrink: 0;
}

.pmc-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 11px;
    border-radius: 999px;
    font-size: .72rem;
    font-weight: 700;
}

.pmc-body {
    padding: 16px 24px 24px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.pmc-body h5 { font-size: 1.1rem; font-weight: 800; margin-bottom: 8px; color: #1A1235; }
.pmc-body p  { font-size: .875rem; color: #6B7280; line-height: 1.7; flex-grow: 1; margin-bottom: 18px; }

.pmc-meta-row {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 18px;
    flex-wrap: wrap;
}

.pmc-meta-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: .78rem;
    color: #6B7280;
    font-weight: 500;
}
.pmc-meta-item i { font-size: .9rem; }

.pmc-progress-label {
    display: flex;
    justify-content: space-between;
    font-size: .75rem;
    font-weight: 600;
    margin-bottom: 6px;
}

.pmc-progress-bar {
    height: 6px;
    background: #EDE9FE;
    border-radius: 999px;
    overflow: hidden;
    margin-bottom: 18px;
}
.pmc-progress-fill {
    height: 100%;
    border-radius: 999px;
    background: linear-gradient(90deg, #5B3CF4, #8B5CF6);
}

.btn-daftar {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 100%;
    padding: 12px;
    border-radius: 13px;
    background: linear-gradient(135deg, #5B3CF4, #3D1FD9);
    color: #fff;
    font-weight: 700;
    font-size: .875rem;
    text-decoration: none;
    border: none;
    cursor: pointer;
    transition: all .25s;
    box-shadow: 0 4px 16px rgba(91,60,244,.3);
}
.btn-daftar:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(91,60,244,.4); color:#fff; }
</style>

<!-- Page Header -->
<div class="page-header-banner">
    <div class="container">
        <div class="section-eyebrow"><i class="bi bi-collection-fill"></i> Semua Program</div>
        <h1>Program Magang Tersedia</h1>
        <p>Temukan program magang yang paling sesuai dengan passion dan tujuan karir kamu.</p>
    </div>
</div>

<section class="programs-section">
    <div class="container">
        <!-- Filter Bar -->
        <div class="filter-bar">
            <button class="filter-btn active"><i class="bi bi-grid-3x3-gap-fill"></i> Semua</button>
            <button class="filter-btn"><i class="bi bi-code-slash"></i> Teknologi</button>
            <button class="filter-btn"><i class="bi bi-palette2"></i> Desain</button>
            <button class="filter-btn"><i class="bi bi-graph-up"></i> Data & Analitik</button>
            <button class="filter-btn"><i class="bi bi-megaphone"></i> Pemasaran</button>
            <span class="filter-count"><?= count($programs) ?> program ditemukan</span>
        </div>

        <!-- Cards Grid -->
        <div class="row g-4">
            <?php
            $colors = [
                ['icon_bg'=>'rgba(91,60,244,.12)','icon_color'=>'#5B3CF4','icon'=>'bi-code-slash','badge_bg'=>'rgba(91,60,244,.08)','badge_color'=>'#5B3CF4','top_grad'=>'#5B3CF4,#8B5CF6','fill'=>65],
                ['icon_bg'=>'rgba(249,115,22,.12)','icon_color'=>'#F97316','icon'=>'bi-palette2','badge_bg'=>'rgba(249,115,22,.08)','badge_color'=>'#F97316','top_grad'=>'#F97316,#FBBF24','fill'=>45],
                ['icon_bg'=>'rgba(20,184,166,.12)','icon_color'=>'#14B8A6','icon'=>'bi-phone','badge_bg'=>'rgba(20,184,166,.08)','badge_color'=>'#14B8A6','top_grad'=>'#14B8A6,#10B981','fill'=>80],
                ['icon_bg'=>'rgba(236,72,153,.12)','icon_color'=>'#EC4899','icon'=>'bi-graph-up','badge_bg'=>'rgba(236,72,153,.08)','badge_color'=>'#EC4899','top_grad'=>'#EC4899,#F43F5E','fill'=>30],
                ['icon_bg'=>'rgba(16,185,129,.12)','icon_color'=>'#10B981','icon'=>'bi-megaphone','badge_bg'=>'rgba(16,185,129,.08)','badge_color'=>'#10B981','top_grad'=>'#10B981,#34D399','fill'=>55],
                ['icon_bg'=>'rgba(245,158,11,.12)','icon_color'=>'#F59E0B','icon'=>'bi-camera-video','badge_bg'=>'rgba(245,158,11,.08)','badge_color'=>'#F59E0B','top_grad'=>'#F59E0B,#FBBF24','fill'=>20],
            ];
            foreach ($programs as $idx => $prog):
                $c = $colors[$idx % count($colors)];
                $fillPct = $c['fill'];
            ?>
            <div class="col-md-6 col-xl-4">
                <div class="prog-main-card">
                    <div class="pmc-header">
                        <div class="pmc-icon" style="background:<?= $c['icon_bg'] ?>; color:<?= $c['icon_color'] ?>;">
                            <i class="bi <?= $c['icon'] ?>"></i>
                        </div>
                        <span class="pmc-badge" style="background:<?= $c['badge_bg'] ?>; color:<?= $c['badge_color'] ?>;">
                            <?= esc($prog['kategori'] ?? 'Teknologi') ?>
                        </span>
                    </div>
                    <div class="pmc-body">
                        <h5><?= esc($prog['nama']) ?></h5>
                        <p><?= esc($prog['deskripsi']) ?></p>

                        <div class="pmc-meta-row">
                            <span class="pmc-meta-item" style="color:<?= $c['icon_color'] ?>;">
                                <i class="bi bi-people-fill"></i> <?= esc($prog['kuota']) ?> Peserta
                            </span>
                            <span class="pmc-meta-item">
                                <i class="bi bi-clock"></i> <?= esc($prog['durasi'] ?? '3 Bulan') ?>
                            </span>
                            <span class="pmc-meta-item">
                                <i class="bi bi-geo-alt"></i> <?= esc($prog['lokasi'] ?? 'Remote / On-site') ?>
                            </span>
                        </div>

                        <div class="pmc-progress-label">
                            <span style="color:<?= $c['icon_color'] ?>; font-weight:700;">Kuota Terisi</span>
                            <span style="color:#1A1235;"><?= $fillPct ?>%</span>
                        </div>
                        <div class="pmc-progress-bar">
                            <div class="pmc-progress-fill" style="width:<?= $fillPct ?>%; background:linear-gradient(90deg, <?= $c['top_grad'] ?>);"></div>
                        </div>

                        <a href="#" class="btn-daftar" style="background:linear-gradient(135deg, <?= $c['top_grad'] ?>); box-shadow: 0 4px 16px <?= $c['icon_bg'] ?>;">
                            <i class="bi bi-send-fill"></i> Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
