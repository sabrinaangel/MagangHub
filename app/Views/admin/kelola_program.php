<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<style>
.admin-content { padding:28px 32px; }
.page-title { font-size:1.4rem; font-weight:800; color:#1A1235; margin-bottom:4px; }
.breadcrumb-bar { font-size:.8rem; color:#9CA3AF; display:flex; align-items:center; gap:6px; margin-bottom:24px; }
.breadcrumb-bar a { color:#5B3CF4; text-decoration:none; }

.top-actions { display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:12px; margin-bottom:20px; }

.btn-add {
    display:inline-flex; align-items:center; gap:8px;
    background:linear-gradient(135deg,#5B3CF4,#3D1FD9);
    color:#fff; padding:10px 20px; border-radius:12px;
    font-size:.875rem; font-weight:700; border:none; cursor:pointer;
    box-shadow:0 4px 14px rgba(91,60,244,.3); transition:all .2s; font-family:inherit;
    text-decoration:none;
}
.btn-add:hover { transform:translateY(-2px); box-shadow:0 8px 22px rgba(91,60,244,.4); color:#fff; }

.search-wrap { position:relative; }
.search-wrap input {
    padding:10px 14px 10px 38px;
    border:1.5px solid rgba(91,60,244,.15); border-radius:11px;
    font-size:.875rem; font-family:inherit; outline:none; color:#1A1235;
    background:#fff; width:240px; transition:all .2s;
}
.search-wrap input:focus { border-color:#5B3CF4; box-shadow:0 0 0 4px rgba(91,60,244,.1); }
.search-wrap i { position:absolute; left:12px; top:50%; transform:translateY(-50%); color:#9CA3AF; }

/* Table Panel */
.table-panel {
    background:#fff;
    border-radius:20px;
    border:1px solid rgba(91,60,244,.1);
    overflow:hidden;
    box-shadow:0 4px 20px rgba(91,60,244,.06);
}

.table-panel table { width:100%; border-collapse:collapse; }
.table-panel thead th {
    background:#F8F7FF;
    padding:13px 18px;
    font-size:.78rem;
    font-weight:800;
    color:#6B7280;
    text-transform:uppercase;
    letter-spacing:.07em;
    border-bottom:1px solid rgba(91,60,244,.1);
    white-space:nowrap;
}
.table-panel tbody td {
    padding:14px 18px;
    font-size:.875rem;
    color:#374151;
    border-bottom:1px solid #F3F4F6;
    vertical-align:middle;
}
.table-panel tbody tr:last-child td { border-bottom:none; }
.table-panel tbody tr { transition:background .15s; }
.table-panel tbody tr:hover { background:#FAFAFE; }

.prog-name-cell { display:flex; align-items:center; gap:12px; }
.prog-ico-sm {
    width:38px; height:38px; border-radius:11px;
    display:flex; align-items:center; justify-content:center;
    font-size:.95rem; flex-shrink:0;
}

.badge-status {
    display:inline-flex; align-items:center; gap:5px;
    padding:4px 11px; border-radius:999px; font-size:.72rem; font-weight:700;
}
.badge-aktif  { background:rgba(16,185,129,.1); color:#059669; }
.badge-penuh  { background:rgba(239,68,68,.1);  color:#DC2626; }
.badge-draft  { background:rgba(107,114,128,.1); color:#4B5563; }

.progress-sm { height:5px; border-radius:999px; background:#EDE9FE; overflow:hidden; width:80px; }
.progress-sm-fill { height:100%; border-radius:999px; background:linear-gradient(90deg,#5B3CF4,#8B5CF6); }

.action-btns { display:flex; align-items:center; gap:7px; }
.btn-sm-edit, .btn-sm-del {
    width:32px; height:32px; border-radius:9px; border:none; cursor:pointer;
    display:flex; align-items:center; justify-content:center; font-size:.85rem;
    transition:all .2s;
}
.btn-sm-edit { background:rgba(91,60,244,.1); color:#5B3CF4; }
.btn-sm-edit:hover { background:#5B3CF4; color:#fff; }
.btn-sm-del  { background:rgba(239,68,68,.1);  color:#EF4444; }
.btn-sm-del:hover  { background:#EF4444; color:#fff; }

.table-footer {
    padding:14px 20px;
    border-top:1px solid #F3F4F6;
    font-size:.8rem; color:#9CA3AF;
    display:flex; align-items:center; justify-content:space-between;
}
</style>

<div class="admin-content">
    <div class="page-title"><i class="bi bi-collection-fill" style="color:#5B3CF4;"></i> Kelola Program Magang</div>
    <div class="breadcrumb-bar">
        <i class="bi bi-house-fill"></i>
        <a href="<?= base_url('/admin') ?>">Admin</a>
        <i class="bi bi-chevron-right"></i> Kelola Program
    </div>

    <div class="top-actions">
        <a href="#" class="btn-add"><i class="bi bi-plus-circle-fill"></i> Tambah Program</a>
        <div class="search-wrap">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Cari program...">
        </div>
    </div>

    <div class="table-panel">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Program</th>
                    <th>Kategori</th>
                    <th>Kuota</th>
                    <th>Terisi</th>
                    <th>Durasi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $icons = [
                    ['bg'=>'rgba(91,60,244,.1)','color'=>'#5B3CF4','ico'=>'bi-code-slash'],
                    ['bg'=>'rgba(249,115,22,.1)','color'=>'#F97316','ico'=>'bi-phone'],
                    ['bg'=>'rgba(20,184,166,.1)', 'color'=>'#14B8A6','ico'=>'bi-palette2'],
                    ['bg'=>'rgba(236,72,153,.1)', 'color'=>'#EC4899','ico'=>'bi-graph-up'],
                    ['bg'=>'rgba(16,185,129,.1)', 'color'=>'#10B981','ico'=>'bi-megaphone'],
                    ['bg'=>'rgba(245,158,11,.1)', 'color'=>'#F59E0B','ico'=>'bi-camera-video'],
                ];
                foreach ($programs as $i => $prog):
                    $ic = $icons[$i % count($icons)];
                    $fillPct = [65,45,80,30,55,20][$i % 6];
                ?>
                <tr>
                    <td style="color:#9CA3AF; font-weight:600;"><?= $i + 1 ?></td>
                    <td>
                        <div class="prog-name-cell">
                            <div class="prog-ico-sm" style="background:<?= $ic['bg'] ?>;color:<?= $ic['color'] ?>;">
                                <i class="bi <?= $ic['ico'] ?>"></i>
                            </div>
                            <div>
                                <div style="font-weight:700; color:#1A1235;"><?= esc($prog['nama']) ?></div>
                                <div style="font-size:.73rem; color:#9CA3AF;"><?= esc($prog['lokasi'] ?? 'Remote / On-site') ?></div>
                            </div>
                        </div>
                    </td>
                    <td><span style="font-size:.8rem; color:#5B3CF4; font-weight:600;"><?= esc($prog['kategori'] ?? 'Teknologi') ?></span></td>
                    <td><strong><?= esc($prog['kuota']) ?></strong> peserta</td>
                    <td>
                        <div style="display:flex; align-items:center; gap:8px;">
                            <div class="progress-sm">
                                <div class="progress-sm-fill" style="width:<?= $fillPct ?>%;"></div>
                            </div>
                            <span style="font-size:.75rem; color:#6B7280;"><?= $fillPct ?>%</span>
                        </div>
                    </td>
                    <td style="font-size:.82rem;"><?= esc($prog['durasi'] ?? '3 Bulan') ?></td>
                    <td>
                        <?php if($prog['status'] === 'Aktif'): ?>
                            <span class="badge-status badge-aktif"><i class="bi bi-circle-fill" style="font-size:.4rem;"></i> Aktif</span>
                        <?php else: ?>
                            <span class="badge-status badge-penuh"><i class="bi bi-circle-fill" style="font-size:.4rem;"></i> Penuh</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="action-btns">
                            <button class="btn-sm-edit" title="Edit"><i class="bi bi-pencil-fill"></i></button>
                            <button class="btn-sm-del"  title="Hapus"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="table-footer">
            <span>Menampilkan <?= count($programs) ?> program</span>
            <span>Data dummy — tidak terhubung ke database</span>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
