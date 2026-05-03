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

.tentang-section { padding: 70px 0; }

.about-visual {
    position: relative;
}
.about-img-wrapper {
    position: relative;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: 0 24px 64px rgba(91,60,244,.2);
}
.about-img-wrapper::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(91,60,244,.3) 0%, transparent 60%);
    z-index: 1;
}
.about-img-wrapper img { width: 100%; display: block; }

.floating-stat {
    position: absolute;
    bottom: -20px;
    right: -20px;
    background: #fff;
    border-radius: 18px;
    padding: 16px 20px;
    box-shadow: 0 12px 40px rgba(91,60,244,.18);
    border: 1px solid rgba(91,60,244,.1);
    display: flex;
    align-items: center;
    gap: 12px;
}
.fs-icon {
    width: 44px;
    height: 44px;
    border-radius: 12px;
    background: linear-gradient(135deg, #5B3CF4, #8B5CF6);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 1.2rem;
}
.fs-info .num { font-size: 1.3rem; font-weight: 800; color: #1A1235; line-height: 1; }
.fs-info .lbl { font-size: .72rem; color: #6B7280; font-weight: 500; }

/* About Text */
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

.about-text h2 { font-size: clamp(1.8rem, 3.5vw, 2.5rem); font-weight: 800; letter-spacing: -0.5px; color: #1A1235; margin-bottom: 16px; }
.about-text p { font-size: .95rem; color: #6B7280; line-height: 1.8; margin-bottom: 14px; }

.check-list { list-style: none; padding: 0; margin: 20px 0 28px; }
.check-list li {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 8px 0;
    font-size: .9rem;
    color: #374151;
    font-weight: 500;
}
.check-list li::before {
    content: '\F270';
    font-family: 'bootstrap-icons';
    color: #5B3CF4;
    font-size: 1.1rem;
    margin-top: 1px;
    flex-shrink: 0;
}

.btn-about {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    background: linear-gradient(135deg, #5B3CF4, #3D1FD9);
    color: #fff;
    padding: 13px 26px;
    border-radius: 14px;
    font-weight: 700;
    font-size: .9rem;
    text-decoration: none;
    box-shadow: 0 6px 20px rgba(91,60,244,.35);
    transition: all .25s;
}
.btn-about:hover { transform: translateY(-2px); box-shadow: 0 10px 28px rgba(91,60,244,.45); color: #fff; }

/* Team / Values Section */
.values-section {
    padding: 70px 0;
    background: #fff;
}

.value-card {
    text-align: center;
    padding: 32px 24px;
    border-radius: 20px;
    border: 1px solid rgba(91,60,244,.1);
    transition: all .3s;
}
.value-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 44px rgba(91,60,244,.12);
    border-color: rgba(91,60,244,.22);
}
.vc-icon {
    width: 64px;
    height: 64px;
    border-radius: 20px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
}
.value-card h5 { font-size: 1rem; font-weight: 800; margin-bottom: 10px; }
.value-card p { font-size: .85rem; color: #6B7280; line-height: 1.7; margin: 0; }

/* Team Section */
.team-section { padding: 70px 0; }
.team-card {
    background: #fff;
    border-radius: 20px;
    border: 1px solid rgba(91,60,244,.1);
    overflow: hidden;
    text-align: center;
    transition: all .3s;
    padding-bottom: 24px;
}
.team-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 44px rgba(91,60,244,.12);
}
.team-card-top {
    height: 80px;
    background: linear-gradient(135deg, #5B3CF4, #3D1FD9);
}
.team-avatar {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    border: 4px solid #fff;
    background: linear-gradient(135deg, #5B3CF4, #F97316);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    font-weight: 800;
    color: #fff;
    margin: -35px auto 14px;
    box-shadow: 0 8px 20px rgba(91,60,244,.25);
}
.team-card h5 { font-size: .95rem; font-weight: 800; margin-bottom: 4px; }
.team-card .role { font-size: .78rem; color: #5B3CF4; font-weight: 600; }
</style>

<!-- Page Header -->
<div class="page-header-banner">
    <div class="container">
        <div class="section-eyebrow"><i class="bi bi-info-circle-fill"></i> Profil Platform</div>
        <h1>Tentang MagangHub</h1>
        <p>Kami hadir untuk menjembatani generasi muda berbakat dengan peluang magang terbaik di Indonesia.</p>
    </div>
</div>

<!-- About Section -->
<section class="tentang-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <div class="about-visual">
                    <div class="about-img-wrapper">
                        <svg width="100%" viewBox="0 0 480 320" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="bg1" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0%" stop-color="#5B3CF4"/>
                                    <stop offset="100%" stop-color="#3D1FD9"/>
                                </linearGradient>
                            </defs>
                            <rect width="480" height="320" fill="url(#bg1)"/>
                            <circle cx="80" cy="60" r="120" fill="rgba(255,255,255,.05)"/>
                            <circle cx="400" cy="280" r="100" fill="rgba(249,115,22,.15)"/>
                            <text x="50%" y="44%" text-anchor="middle" font-family="sans-serif" font-size="70" fill="rgba(255,255,255,.9)">🚀</text>
                            <text x="50%" y="68%" text-anchor="middle" font-family="sans-serif" font-size="18" font-weight="700" fill="rgba(255,255,255,.9)">MagangHub — Launching Your Career</text>
                        </svg>
                    </div>
                    <div class="floating-stat">
                        <div class="fs-icon"><i class="bi bi-trophy-fill"></i></div>
                        <div class="fs-info">
                            <div class="num">2.000+</div>
                            <div class="lbl">Alumni Sukses</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 about-text">
                <div class="section-eyebrow">Siapa Kami</div>
                <h2>Platform Magang Terpercaya untuk Generasi Digital Indonesia</h2>
                <p>
                    MagangHub didirikan dengan satu visi sederhana: setiap pelajar dan mahasiswa berhak mendapatkan pengalaman magang berkualitas yang dapat membentuk karir profesional mereka di masa depan.
                </p>
                <p>
                    Kami menghubungkan ribuan peserta magang dengan perusahaan-perusahaan terkemuka di Indonesia, mulai dari startup teknologi hingga korporasi besar, untuk memastikan setiap perjalanan magang memberikan nilai nyata.
                </p>
                <ul class="check-list">
                    <li>Lebih dari 30 perusahaan mitra terverifikasi siap menerima peserta magang</li>
                    <li>Program mentoring eksklusif dari para profesional industri berpengalaman</li>
                    <li>Sertifikat resmi yang diakui dan bernilai tinggi di pasar kerja</li>
                    <li>Komunitas alumni yang aktif saling mendukung dan berbagi peluang</li>
                </ul>
                <a href="<?= base_url('/program') ?>" class="btn-about">
                    <i class="bi bi-collection-fill"></i> Lihat Semua Program
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="values-section">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-eyebrow">Nilai Kami</div>
            <h2 style="font-size:clamp(1.6rem,3vw,2.2rem); font-weight:800; letter-spacing:-0.5px;">Yang Membuat Kami Berbeda</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="value-card">
                    <div class="vc-icon" style="background:rgba(91,60,244,.1); color:#5B3CF4;"><i class="bi bi-gem"></i></div>
                    <h5>Kualitas Terjamin</h5>
                    <p>Setiap program dikurasi ketat agar memberikan pengalaman yang benar-benar bermakna.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="value-card">
                    <div class="vc-icon" style="background:rgba(249,115,22,.1); color:#F97316;"><i class="bi bi-heart-fill"></i></div>
                    <h5>Berpusat pada Peserta</h5>
                    <p>Kepuasan dan perkembangan peserta adalah prioritas utama dalam setiap keputusan kami.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="value-card">
                    <div class="vc-icon" style="background:rgba(20,184,166,.1); color:#14B8A6;"><i class="bi bi-people-fill"></i></div>
                    <h5>Kolaborasi Nyata</h5>
                    <p>Kami membangun jembatan antara talenta muda dengan kebutuhan nyata industri masa kini.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="value-card">
                    <div class="vc-icon" style="background:rgba(245,158,11,.1); color:#F59E0B;"><i class="bi bi-lightbulb-fill"></i></div>
                    <h5>Inovasi Berkelanjutan</h5>
                    <p>Kami terus berinovasi untuk menghadirkan program yang relevan dengan tren industri terkini.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section class="team-section">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-eyebrow">Tim Kami</div>
            <h2 style="font-size:clamp(1.6rem,3vw,2.2rem); font-weight:800; letter-spacing:-0.5px;">Orang-orang di Balik MagangHub</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-6 col-md-3">
                <div class="team-card">
                    <div class="team-card-top" style="background:linear-gradient(135deg,#5B3CF4,#8B5CF6);"></div>
                    <div class="team-avatar">S</div>
                    <h5>Sabrina Angel</h5>
                    <div class="role">CEO & Co-Founder</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-card">
                    <div class="team-card-top" style="background:linear-gradient(135deg,#F97316,#FBBF24);"></div>
                    <div class="team-avatar" style="background:linear-gradient(135deg,#F97316,#FBBF24);">E</div>
                    <h5>Elvano Arsenio</h5>
                    <div class="role">Head of Partnerships</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-card">
                    <div class="team-card-top" style="background:linear-gradient(135deg,#14B8A6,#10B981);"></div>
                    <div class="team-avatar" style="background:linear-gradient(135deg,#14B8A6,#10B981);">C</div>
                    <h5>Calvin Miles</h5>
                    <div class="role">Lead Developer</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="team-card">
                    <div class="team-card-top" style="background:linear-gradient(135deg,#EC4899,#F43F5E);"></div>
                    <div class="team-avatar" style="background:linear-gradient(135deg,#EC4899,#F43F5E);">N</div>
                    <h5>Natania Elora</h5>
                    <div class="role">Community Manager</div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
