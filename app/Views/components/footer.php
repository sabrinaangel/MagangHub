<footer class="site-footer mt-auto">
    <div class="footer-wave">
        <svg viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,30 C200,60 400,0 600,30 C800,60 1000,0 1200,30 L1200,60 L0,60 Z" fill="#1A1235"/>
        </svg>
    </div>

    <div class="footer-body">
        <div class="container">
            <div class="row g-5">
                <!-- Brand -->
                <div class="col-lg-4">
                    <div class="footer-brand">
                        <div class="brand-icon-sm"><i class="bi bi-briefcase-fill"></i></div>
                        <span class="fw-800">Magang<span>Hub</span></span>
                    </div>
                    <p class="footer-tagline">Platform penghubung mahasiswa &amp; pelajar dengan program magang berkualitas di perusahaan pilihan Indonesia.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <!-- Links -->
                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Platform</h6>
                    <ul class="footer-links">
                        <li><a href="<?= base_url('/') ?>">Home</a></li>
                        <li><a href="<?= base_url('/program') ?>">Program Magang</a></li>
                        <li><a href="<?= base_url('/artikel') ?>">Artikel &amp; Tips</a></li>
                        <li><a href="<?= base_url('/tentang') ?>">Tentang Kami</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-2">
                    <h6 class="footer-heading">Kategori</h6>
                    <ul class="footer-links">
                        <li><a href="#">Teknologi</a></li>
                        <li><a href="#">Desain</a></li>
                        <li><a href="#">Bisnis</a></li>
                        <li><a href="#">Pemasaran</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h6 class="footer-heading">Kontak</h6>
                    <ul class="footer-contact">
                        <li><i class="bi bi-geo-alt-fill"></i> Jl. Pendidikan No. 123, Jakarta Selatan</li>
                        <li><i class="bi bi-envelope-fill"></i> info@maganghub.id</li>
                        <li><i class="bi bi-telephone-fill"></i> (021) 1234-5678</li>
                        <li><i class="bi bi-clock-fill"></i> Senin – Jumat, 08.00 – 17.00 WIB</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">
            <p>&copy; <?= date('Y') ?> <strong>MagangHub</strong>. Semua hak dilindungi.</p>
            <p class="mb-0" style="font-size:.8rem; opacity:.5;">Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> &amp; CodeIgniter 4</p>
        </div>
    </div>
</footer>

<style>
/* ── FOOTER STYLES ── */
.site-footer { background: #1A1235; position: relative; overflow: hidden; }

.footer-wave { line-height: 0; margin-bottom: -2px; background: var(--surface, #F8F7FF); }
.footer-wave svg { display: block; height: 55px; }

.footer-body { padding: 56px 0 40px; }

.footer-brand {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 1.3rem;
    font-weight: 800;
    color: #fff;
    margin-bottom: 14px;
}
.footer-brand span { color: #5B3CF4; }

.brand-icon-sm {
    width: 36px;
    height: 36px;
    background: linear-gradient(135deg, #5B3CF4, #F97316);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 1rem;
}

.footer-tagline {
    color: rgba(255,255,255,.5);
    font-size: .875rem;
    line-height: 1.7;
    margin-bottom: 20px;
}

.social-links { display: flex; gap: 10px; }
.social-links a {
    width: 38px;
    height: 38px;
    border-radius: 10px;
    background: rgba(255,255,255,.08);
    color: rgba(255,255,255,.6);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    text-decoration: none;
    transition: all .2s ease;
}
.social-links a:hover {
    background: #5B3CF4;
    color: #fff;
    transform: translateY(-2px);
}

.footer-heading {
    color: #fff;
    font-weight: 700;
    font-size: .8rem;
    letter-spacing: .1em;
    text-transform: uppercase;
    margin-bottom: 16px;
}

.footer-links { list-style: none; padding: 0; margin: 0; }
.footer-links li { margin-bottom: 8px; }
.footer-links a {
    color: rgba(255,255,255,.5);
    font-size: .875rem;
    text-decoration: none;
    transition: color .2s;
}
.footer-links a:hover { color: #fff; }

.footer-contact { list-style: none; padding: 0; margin: 0; }
.footer-contact li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    color: rgba(255,255,255,.5);
    font-size: .875rem;
    margin-bottom: 10px;
}
.footer-contact li i { color: #5B3CF4; flex-shrink: 0; margin-top: 3px; }

.footer-bottom {
    border-top: 1px solid rgba(255,255,255,.08);
    padding: 18px 0;
}
.footer-bottom p { color: rgba(255,255,255,.4); font-size: .8rem; margin: 0; }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
