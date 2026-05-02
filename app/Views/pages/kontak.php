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

.kontak-section { padding: 70px 0 80px; }

/* Contact Card */
.kontak-card {
    background: #fff;
    border-radius: 24px;
    padding: 36px 40px;
    border: 1px solid rgba(91,60,244,.12);
    box-shadow: 0 4px 24px rgba(91,60,244,.07);
}

.form-group { margin-bottom: 20px; }
.form-label-custom {
    display: block;
    font-size: .82rem;
    font-weight: 700;
    color: #374151;
    margin-bottom: 7px;
    letter-spacing: .02em;
}
.form-control-custom {
    width: 100%;
    padding: 12px 16px;
    border: 1.5px solid rgba(91,60,244,.15);
    border-radius: 12px;
    font-family: inherit;
    font-size: .9rem;
    color: #1A1235;
    background: #FAFAFA;
    outline: none;
    transition: all .2s;
}
.form-control-custom:focus {
    border-color: #5B3CF4;
    background: #fff;
    box-shadow: 0 0 0 4px rgba(91,60,244,.1);
}
.form-control-custom::placeholder { color: #D1D5DB; }

.form-row { display: flex; gap: 16px; }
.form-row .form-group { flex: 1; }

.btn-submit {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    width: 100%;
    padding: 14px;
    border-radius: 14px;
    background: linear-gradient(135deg, #5B3CF4, #3D1FD9);
    color: #fff;
    font-weight: 700;
    font-size: .95rem;
    border: none;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(91,60,244,.35);
    transition: all .25s;
    font-family: inherit;
}
.btn-submit:hover { transform: translateY(-2px); box-shadow: 0 10px 28px rgba(91,60,244,.45); }

/* Info Cards */
.info-card {
    background: #fff;
    border-radius: 18px;
    padding: 20px 22px;
    border: 1px solid rgba(91,60,244,.1);
    margin-bottom: 16px;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all .25s;
}
.info-card:hover {
    border-color: rgba(91,60,244,.25);
    box-shadow: 0 8px 24px rgba(91,60,244,.1);
    transform: translateX(4px);
}
.ic-icon {
    width: 48px;
    height: 48px;
    border-radius: 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
}
.ic-info .label { font-size: .72rem; font-weight: 700; color: #9CA3AF; text-transform: uppercase; letter-spacing: .06em; margin-bottom: 3px; }
.ic-info .value { font-size: .9rem; font-weight: 600; color: #1A1235; }

/* Map Placeholder */
.map-placeholder {
    background: linear-gradient(135deg, #EDE9FE, #DDD6FE);
    border-radius: 18px;
    border: 1px solid rgba(91,60,244,.15);
    height: 200px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    color: #5B3CF4;
    margin-top: 8px;
}
.map-placeholder i { font-size: 2.5rem; opacity: .5; }
.map-placeholder p { font-size: .85rem; font-weight: 600; opacity: .6; margin: 0; }
</style>

<!-- Page Header -->
<div class="page-header-banner">
    <div class="container">
        <div class="section-eyebrow"><i class="bi bi-envelope-fill"></i> Get in Touch</div>
        <h1>Hubungi Kami</h1>
        <p>Ada pertanyaan atau butuh bantuan? Tim kami siap membantu kamu menemukan program magang yang tepat.</p>
    </div>
</div>

<section class="kontak-section">
    <div class="container">
        <div class="row g-5">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="kontak-card">
                    <h3 style="font-size:1.4rem; font-weight:800; margin-bottom:6px; color:#1A1235;">Kirim Pesan</h3>
                    <p style="font-size:.875rem; color:#6B7280; margin-bottom:28px;">Isi formulir di bawah ini dan kami akan membalas dalam 1×24 jam kerja.</p>

                    <form>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label-custom">Nama Depan</label>
                                <input type="text" class="form-control-custom" placeholder="contoh: Budi" id="fname">
                            </div>
                            <div class="form-group">
                                <label class="form-label-custom">Nama Belakang</label>
                                <input type="text" class="form-control-custom" placeholder="contoh: Santoso" id="lname">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label-custom">Alamat Email</label>
                            <input type="email" class="form-control-custom" placeholder="nama@email.com" id="email">
                        </div>

                        <div class="form-group">
                            <label class="form-label-custom">Nomor Telepon <span style="color:#9CA3AF; font-weight:400;">(opsional)</span></label>
                            <input type="tel" class="form-control-custom" placeholder="contoh: 0812-3456-7890" id="phone">
                        </div>

                        <div class="form-group">
                            <label class="form-label-custom">Topik</label>
                            <select class="form-control-custom" id="topik">
                                <option value="">— Pilih topik —</option>
                                <option>Informasi Program Magang</option>
                                <option>Pendaftaran dan Kuota</option>
                                <option>Kerjasama Perusahaan Mitra</option>
                                <option>Lainnya</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label-custom">Pesan</label>
                            <textarea class="form-control-custom" rows="5" placeholder="Tuliskan pertanyaan atau pesanmu di sini..." id="pesan"></textarea>
                        </div>

                        <button type="button" class="btn-submit">
                            <i class="bi bi-send-fill"></i> Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="section-eyebrow" style="margin-bottom:20px;">Informasi Kontak</div>

                <div class="info-card">
                    <div class="ic-icon" style="background:rgba(91,60,244,.1); color:#5B3CF4;"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="ic-info">
                        <div class="label">Alamat Kantor</div>
                        <div class="value">Jl. Pendidikan No. 123, Jakarta Selatan 12160</div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="ic-icon" style="background:rgba(249,115,22,.1); color:#F97316;"><i class="bi bi-envelope-fill"></i></div>
                    <div class="ic-info">
                        <div class="label">Email</div>
                        <div class="value">info@maganghub.id</div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="ic-icon" style="background:rgba(20,184,166,.1); color:#14B8A6;"><i class="bi bi-telephone-fill"></i></div>
                    <div class="ic-info">
                        <div class="label">Telepon</div>
                        <div class="value">(021) 1234-5678</div>
                    </div>
                </div>

                <div class="info-card">
                    <div class="ic-icon" style="background:rgba(245,158,11,.1); color:#F59E0B;"><i class="bi bi-clock-fill"></i></div>
                    <div class="ic-info">
                        <div class="label">Jam Operasional</div>
                        <div class="value">Senin – Jumat, 08.00 – 17.00 WIB</div>
                    </div>
                </div>

                <div class="map-placeholder">
                    <i class="bi bi-map-fill"></i>
                    <p>Peta Lokasi Kantor MagangHub</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
