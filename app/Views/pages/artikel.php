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
.page-header-banner .section-eyebrow { color: #A78BFA; margin-bottom: 10px; }
.page-header-banner .section-eyebrow::before { background: #A78BFA; }
.page-header-banner h1 { font-size: clamp(1.8rem,4vw,2.8rem); font-weight:800; letter-spacing:-0.5px; margin-bottom: 10px; }
.page-header-banner p  { color: rgba(255,255,255,.65); max-width: 520px; font-size: .95rem; margin: 0; }

.artikel-section { padding: 60px 0 80px; }

/* Article Card */
.art-card {
    background: #fff;
    border-radius: 20px;
    border: 1px solid rgba(91,60,244,.1);
    overflow: hidden;
    display: flex;
    gap: 0;
    transition: all .3s ease;
    margin-bottom: 24px;
}
.art-card:hover {
    box-shadow: 0 14px 44px rgba(91,60,244,.12);
    border-color: rgba(91,60,244,.2);
    transform: translateX(4px);
}

.art-card-accent {
    width: 6px;
    flex-shrink: 0;
    background: linear-gradient(180deg, #5B3CF4, #8B5CF6);
}

.art-card-body {
    padding: 24px 28px;
    flex-grow: 1;
}

.art-meta {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 10px;
    flex-wrap: wrap;
}

.art-cat {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 12px;
    border-radius: 999px;
    font-size: .72rem;
    font-weight: 700;
}

.art-date {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: .8rem;
    color: #9CA3AF;
}

.art-card-body h4 { font-size: 1.1rem; font-weight: 800; color: #1A1235; margin-bottom: 8px; }
.art-card-body p  { font-size: .875rem; color: #6B7280; line-height: 1.7; margin-bottom: 16px; }

.art-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 10px;
}

.art-author {
    display: flex;
    align-items: center;
    gap: 8px;
}
.art-avatar {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: .75rem;
    font-weight: 700;
    color: #fff;
    background: linear-gradient(135deg, #5B3CF4, #F97316);
}
.art-author-name { font-size: .8rem; font-weight: 600; color: #4B5563; }

.btn-baca {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: rgba(91,60,244,.08);
    color: #5B3CF4;
    padding: 8px 16px;
    border-radius: 10px;
    font-size: .8rem;
    font-weight: 700;
    text-decoration: none;
    transition: all .2s;
}
.btn-baca:hover { background: #5B3CF4; color: #fff; }

/* Sidebar */
.sidebar-widget {
    background: #fff;
    border-radius: 20px;
    border: 1px solid rgba(91,60,244,.1);
    overflow: hidden;
    margin-bottom: 24px;
}
.sw-header {
    padding: 16px 20px;
    font-size: .8rem;
    font-weight: 800;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: #fff;
    background: linear-gradient(135deg, #5B3CF4, #3D1FD9);
    display: flex;
    align-items: center;
    gap: 8px;
}
.sw-body { padding: 16px; }

.cat-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 12px;
    border-radius: 11px;
    margin-bottom: 4px;
    cursor: pointer;
    transition: all .2s;
    text-decoration: none;
    color: #4B5563;
    font-size: .875rem;
    font-weight: 500;
}
.cat-item:hover { background: rgba(91,60,244,.07); color: #5B3CF4; }
.cat-item:hover .cat-count { background: #5B3CF4; color: #fff; }

.cat-left { display: flex; align-items: center; gap: 9px; }
.cat-count {
    width: 26px;
    height: 26px;
    border-radius: 8px;
    background: rgba(91,60,244,.1);
    color: #5B3CF4;
    font-size: .75rem;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .2s;
}

.tips-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 10px 0;
    border-bottom: 1px solid #F3F4F6;
}
.tips-item:last-child { border-bottom: none; }
.tips-num {
    width: 26px;
    height: 26px;
    border-radius: 8px;
    background: linear-gradient(135deg, #5B3CF4, #8B5CF6);
    color: #fff;
    font-size: .75rem;
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.tips-text { font-size: .82rem; color: #4B5563; line-height: 1.5; }
</style>

<!-- Page Header -->
<div class="page-header-banner">
    <div class="container">
        <div class="section-eyebrow"><i class="bi bi-newspaper"></i> Blog & Tips</div>
        <h1>Artikel & Tips Magang</h1>
        <p>Pelajari tips sukses magang, cara membuat CV menarik, teknik wawancara, dan banyak lagi.</p>
    </div>
</div>

<section class="artikel-section">
    <div class="container">
        <div class="row g-4">
            <!-- Articles -->
            <div class="col-lg-8">
                <?php
                $accentColors = [
                    ['grad'=>'#5B3CF4,#8B5CF6','cat_bg'=>'rgba(91,60,244,.1)','cat_color'=>'#5B3CF4','cat_label'=>'Tips Wawancara','icon'=>'bi-chat-quote-fill'],
                    ['grad'=>'#F97316,#FBBF24','cat_bg'=>'rgba(249,115,22,.1)','cat_color'=>'#F97316','cat_label'=>'Pembuatan CV','icon'=>'bi-file-person-fill'],
                    ['grad'=>'#14B8A6,#10B981','cat_bg'=>'rgba(20,184,166,.1)','cat_color'=>'#14B8A6','cat_label'=>'Pengalaman Magang','icon'=>'bi-stars'],
                    ['grad'=>'#EC4899,#F43F5E','cat_bg'=>'rgba(236,72,153,.1)','cat_color'=>'#EC4899','cat_label'=>'Soft Skill','icon'=>'bi-person-hearts'],
                    ['grad'=>'#F59E0B,#FBBF24','cat_bg'=>'rgba(245,158,11,.1)','cat_color'=>'#F59E0B','cat_label'=>'Hard Skill','icon'=>'bi-tools'],
                ];
                foreach ($articles as $i => $art):
                    $ac = $accentColors[$i % count($accentColors)];
                    $initials = strtoupper(substr($art['penulis'] ?? 'A', 0, 1));
                ?>
                <div class="art-card">
                    <div class="art-card-accent" style="background:linear-gradient(180deg, <?= $ac['grad'] ?>);"></div>
                    <div class="art-card-body">
                        <div class="art-meta">
                            <span class="art-cat" style="background:<?= $ac['cat_bg'] ?>; color:<?= $ac['cat_color'] ?>;">
                                <i class="bi <?= $ac['icon'] ?>"></i> <?= $ac['cat_label'] ?>
                            </span>
                            <span class="art-date">
                                <i class="bi bi-calendar3"></i>
                                <?= date('d M Y', strtotime($art['tanggal'])) ?>
                            </span>
                        </div>
                        <h4><?= esc($art['judul']) ?></h4>
                        <p><?= esc($art['kutipan']) ?></p>
                        <div class="art-footer">
                            <div class="art-author">
                                <div class="art-avatar"><?= $initials ?></div>
                                <span class="art-author-name"><?= esc($art['penulis'] ?? 'Tim MagangHub') ?></span>
                            </div>
                            <a href="#" class="btn-baca">
                                Baca Selengkapnya <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Sidebar Widgets -->
            <div class="col-lg-4">
                <!-- Kategori -->
                <div class="sidebar-widget">
                    <div class="sw-header"><i class="bi bi-tags-fill"></i> Kategori Artikel</div>
                    <div class="sw-body">
                        <a href="#" class="cat-item">
                            <span class="cat-left"><i class="bi bi-chat-quote-fill" style="color:#5B3CF4;"></i> Tips Wawancara</span>
                            <span class="cat-count">3</span>
                        </a>
                        <a href="#" class="cat-item">
                            <span class="cat-left"><i class="bi bi-file-person-fill" style="color:#F97316;"></i> Pembuatan CV</span>
                            <span class="cat-count">5</span>
                        </a>
                        <a href="#" class="cat-item">
                            <span class="cat-left"><i class="bi bi-stars" style="color:#14B8A6;"></i> Pengalaman Magang</span>
                            <span class="cat-count">4</span>
                        </a>
                        <a href="#" class="cat-item">
                            <span class="cat-left"><i class="bi bi-person-hearts" style="color:#EC4899;"></i> Soft Skill</span>
                            <span class="cat-count">2</span>
                        </a>
                        <a href="#" class="cat-item">
                            <span class="cat-left"><i class="bi bi-tools" style="color:#F59E0B;"></i> Hard Skill</span>
                            <span class="cat-count">6</span>
                        </a>
                    </div>
                </div>

                <!-- Quick Tips -->
                <div class="sidebar-widget">
                    <div class="sw-header" style="background:linear-gradient(135deg,#F97316,#FBBF24);">
                        <i class="bi bi-lightning-charge-fill"></i> Quick Tips Magang
                    </div>
                    <div class="sw-body">
                        <div class="tips-item">
                            <div class="tips-num">1</div>
                            <div class="tips-text">Riset perusahaan sebelum wawancara agar kamu tampak siap dan antusias.</div>
                        </div>
                        <div class="tips-item">
                            <div class="tips-num">2</div>
                            <div class="tips-text">Gunakan format CV ATS-friendly dengan font bersih dan poin yang ringkas.</div>
                        </div>
                        <div class="tips-item">
                            <div class="tips-num">3</div>
                            <div class="tips-text">Tunjukkan inisiatif: ajukan pertanyaan, bantu tim melebihi ekspektasi.</div>
                        </div>
                        <div class="tips-item">
                            <div class="tips-num">4</div>
                            <div class="tips-text">Jaga attitude dan profesionalisme — kesan pertama sangat menentukan.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
