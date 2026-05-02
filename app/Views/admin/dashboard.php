<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
.admin-content { padding: 28px 32px; }
.page-title { font-size:1.4rem; font-weight:800; color:#1A1235; margin-bottom:4px; }
.breadcrumb-bar { font-size:.8rem; color:#9CA3AF; display:flex; align-items:center; gap:6px; margin-bottom:24px; }
.breadcrumb-bar a { color:#5B3CF4; text-decoration:none; }

.stat-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(170px,1fr)); gap:16px; margin-bottom:28px; }

.stat-box {
    background:#fff;
    border-radius:18px;
    border:1px solid rgba(91,60,244,.1);
    padding:20px;
    display:flex; align-items:center; gap:14px;
    transition:all .3s;
    position:relative; overflow:hidden;
}
.stat-box:hover { transform:translateY(-4px); box-shadow:0 12px 30px rgba(91,60,244,.12); }
.sb-icon { width:50px; height:50px; border-radius:14px; display:flex; align-items:center; justify-content:center; font-size:1.3rem; flex-shrink:0; }
.sb-val  { font-size:1.7rem; font-weight:800; color:#1A1235; line-height:1; }
.sb-lbl  { font-size:.75rem; color:#6B7280; margin-top:4px; }
.sb-chg  { font-size:.7rem; font-weight:700; color:#10B981; margin-top:5px; }

.dash-row { display:grid; grid-template-columns:1fr 380px; gap:20px; }
@media(max-width:900px){ .dash-row { grid-template-columns:1fr; } }

.panel {
    background:#fff;
    border-radius:18px;
    border:1px solid rgba(91,60,244,.1);
    overflow:hidden;
}
.panel-head {
    padding:16px 20px;
    border-bottom:1px solid rgba(91,60,244,.08);
    display:flex; align-items:center; justify-content:space-between;
}
.panel-head h5 { font-size:.88rem; font-weight:800; color:#1A1235; margin:0; display:flex; align-items:center; gap:8px; }
.panel-head a  { font-size:.75rem; color:#5B3CF4; text-decoration:none; font-weight:600; }
.panel-body  { padding:6px 20px 14px; }

.act-item { display:flex; align-items:flex-start; gap:12px; padding:12px 0; border-bottom:1px solid #F3F4F6; }
.act-item:last-child { border-bottom:none; }
.act-dot  { width:9px; height:9px; border-radius:50%; flex-shrink:0; margin-top:5px; }
.act-text { font-size:.83rem; color:#374151; line-height:1.5; }
.act-time { font-size:.72rem; color:#9CA3AF; margin-top:2px; }

.ql-item {
    display:flex; align-items:center; gap:12px;
    padding:12px 14px; border-radius:12px;
    background:#F8F7FF; border:1px solid rgba(91,60,244,.08);
    text-decoration:none; color:#1A1235;
    transition:all .2s; margin-bottom:8px;
}
.ql-item:hover { background:rgba(91,60,244,.06); border-color:rgba(91,60,244,.2); transform:translateX(4px); }
.ql-ico { width:38px; height:38px; border-radius:11px; display:flex; align-items:center; justify-content:center; font-size:.95rem; flex-shrink:0; }
.ql-name { font-size:.85rem; font-weight:700; }
.ql-sub  { font-size:.72rem; color:#6B7280; }

.flash-ok { display:flex; align-items:center; gap:9px; padding:12px 16px; border-radius:12px; background:rgba(16,185,129,.08); border:1px solid rgba(16,185,129,.2); color:#059669; font-size:.875rem; font-weight:500; margin-bottom:20px; }
</style>

<div class="admin-content">
    <div class="page-title"><i class="bi bi-speedometer2" style="color:#5B3CF4;"></i> Dashboard</div>
    <div class="breadcrumb-bar">
        <i class="bi bi-house-fill"></i>
        <a href="<?= base_url('/admin') ?>">Admin</a>
        <i class="bi bi-chevron-right"></i> Dashboard
        <span class="ms-auto"><?= date('d F Y') ?></span>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
    <div class="flash-ok">
        <i class="bi bi-check-circle-fill"></i>
        <?= session()->getFlashdata('success') ?>
    </div>
    <?php endif; ?>

    <!-- Stats -->
    <div class="stat-grid">
        <div class="stat-box" style="border-bottom:3px solid #5B3CF4;">
            <div class="sb-icon" style="background:rgba(91,60,244,.1);color:#5B3CF4;"><i class="bi bi-collection-fill"></i></div>
            <div><div class="sb-val">6</div><div class="sb-lbl">Program Aktif</div><div class="sb-chg">↑ +2 bulan ini</div></div>
        </div>
        <div class="stat-box" style="border-bottom:3px solid #10B981;">
            <div class="sb-icon" style="background:rgba(16,185,129,.1);color:#10B981;"><i class="bi bi-file-richtext-fill"></i></div>
            <div><div class="sb-val">5</div><div class="sb-lbl">Total Artikel</div><div class="sb-chg">↑ +1 minggu ini</div></div>
        </div>
        <div class="stat-box" style="border-bottom:3px solid #F97316;">
            <div class="sb-icon" style="background:rgba(249,115,22,.1);color:#F97316;"><i class="bi bi-people-fill"></i></div>
            <div><div class="sb-val">128</div><div class="sb-lbl">Total Pendaftar</div><div class="sb-chg">↑ +15 hari ini</div></div>
        </div>
        <div class="stat-box" style="border-bottom:3px solid #14B8A6;">
            <div class="sb-icon" style="background:rgba(20,184,166,.1);color:#14B8A6;"><i class="bi bi-building"></i></div>
            <div><div class="sb-val">30</div><div class="sb-lbl">Mitra Perusahaan</div><div class="sb-chg">↑ +3 bulan ini</div></div>
        </div>
    </div>

    <!-- Main Row -->
    <div class="dash-row">
        <!-- Activity -->
        <div class="panel">
            <div class="panel-head">
                <h5><i class="bi bi-activity" style="color:#5B3CF4;"></i> Aktivitas Terbaru</h5>
                <a href="#">Semua</a>
            </div>
            <div class="panel-body">
                <?php
                $activities = [
                    ['dot'=>'#5B3CF4', 'text'=>'Pendaftar baru <strong>Rina Kusuma</strong> mendaftar program <strong>Web Development</strong>', 'time'=>'5 menit lalu'],
                    ['dot'=>'#10B981', 'text'=>'Artikel <strong>"Tips Sukses Wawancara"</strong> berhasil dipublikasikan', 'time'=>'1 jam lalu'],
                    ['dot'=>'#F97316', 'text'=>'Program <strong>Data Analytics</strong> kuota hampir penuh (sisa 2)', 'time'=>'3 jam lalu'],
                    ['dot'=>'#14B8A6', 'text'=>'Mitra baru <strong>PT. Teknologi Maju</strong> berhasil diverifikasi', 'time'=>'Kemarin 15:30'],
                    ['dot'=>'#EC4899', 'text'=>'Pendaftar baru <strong>Dani Pratama</strong> mendaftar <strong>UI/UX Design</strong>', 'time'=>'Kemarin 10:15'],
                ];
                foreach($activities as $a):
                ?>
                <div class="act-item">
                    <div class="act-dot" style="background:<?= $a['dot'] ?>;"></div>
                    <div>
                        <div class="act-text"><?= $a['text'] ?></div>
                        <div class="act-time"><i class="bi bi-clock"></i> <?= $a['time'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="panel">
            <div class="panel-head">
                <h5><i class="bi bi-lightning-charge-fill" style="color:#F97316;"></i> Akses Cepat</h5>
            </div>
            <div class="panel-body" style="padding-top:14px;">
                <a href="<?= base_url('/admin/program') ?>" class="ql-item">
                    <div class="ql-ico" style="background:rgba(91,60,244,.1);color:#5B3CF4;"><i class="bi bi-collection-fill"></i></div>
                    <div><div class="ql-name">Kelola Program</div><div class="ql-sub">6 program aktif</div></div>
                    <i class="bi bi-chevron-right ms-auto" style="color:#D1D5DB;"></i>
                </a>
                <a href="<?= base_url('/admin/artikel') ?>" class="ql-item">
                    <div class="ql-ico" style="background:rgba(16,185,129,.1);color:#10B981;"><i class="bi bi-file-richtext-fill"></i></div>
                    <div><div class="ql-name">Kelola Artikel</div><div class="ql-sub">5 artikel, 2 draft</div></div>
                    <i class="bi bi-chevron-right ms-auto" style="color:#D1D5DB;"></i>
                </a>
                <a href="<?= base_url('/') ?>" class="ql-item">
                    <div class="ql-ico" style="background:rgba(249,115,22,.1);color:#F97316;"><i class="bi bi-globe"></i></div>
                    <div><div class="ql-name">Pratinjau Website</div><div class="ql-sub">Lihat halaman publik</div></div>
                    <i class="bi bi-chevron-right ms-auto" style="color:#D1D5DB;"></i>
                </a>
                <a href="<?= base_url('/logout') ?>" class="ql-item" style="border-color:rgba(239,68,68,.15);">
                    <div class="ql-ico" style="background:rgba(239,68,68,.1);color:#EF4444;"><i class="bi bi-box-arrow-right"></i></div>
                    <div><div class="ql-name" style="color:#EF4444;">Logout</div><div class="ql-sub">Akhiri sesi admin</div></div>
                    <i class="bi bi-chevron-right ms-auto" style="color:#D1D5DB;"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
