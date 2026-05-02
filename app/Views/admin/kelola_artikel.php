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

.table-panel {
    background:#fff; border-radius:20px;
    border:1px solid rgba(91,60,244,.1);
    overflow:hidden; box-shadow:0 4px 20px rgba(91,60,244,.06);
}
.table-panel table { width:100%; border-collapse:collapse; }
.table-panel thead th {
    background:#F8F7FF; padding:13px 18px;
    font-size:.78rem; font-weight:800; color:#6B7280;
    text-transform:uppercase; letter-spacing:.07em;
    border-bottom:1px solid rgba(91,60,244,.1); white-space:nowrap;
}
.table-panel tbody td {
    padding:14px 18px; font-size:.875rem; color:#374151;
    border-bottom:1px solid #F3F4F6; vertical-align:middle;
}
.table-panel tbody tr:last-child td { border-bottom:none; }
.table-panel tbody tr:hover { background:#FAFAFE; }

.art-title-cell { display:flex; align-items:flex-start; gap:10px; }
.art-cat-dot {
    width:34px; height:34px; border-radius:10px;
    display:flex; align-items:center; justify-content:center;
    font-size:.85rem; flex-shrink:0; margin-top:2px;
}

.badge-status {
    display:inline-flex; align-items:center; gap:5px;
    padding:4px 11px; border-radius:999px; font-size:.72rem; font-weight:700;
}
.badge-pub   { background:rgba(16,185,129,.1); color:#059669; }
.badge-draft { background:rgba(107,114,128,.1); color:#4B5563; }

.action-btns { display:flex; align-items:center; gap:7px; }
.btn-sm-edit, .btn-sm-del, .btn-sm-view {
    width:32px; height:32px; border-radius:9px; border:none; cursor:pointer;
    display:flex; align-items:center; justify-content:center; font-size:.85rem;
    transition:all .2s;
}
.btn-sm-edit { background:rgba(91,60,244,.1); color:#5B3CF4; }
.btn-sm-edit:hover { background:#5B3CF4; color:#fff; }
.btn-sm-del  { background:rgba(239,68,68,.1); color:#EF4444; }
.btn-sm-del:hover { background:#EF4444; color:#fff; }
.btn-sm-view { background:rgba(20,184,166,.1); color:#14B8A6; }
.btn-sm-view:hover { background:#14B8A6; color:#fff; }

.table-footer {
    padding:14px 20px; border-top:1px solid #F3F4F6;
    font-size:.8rem; color:#9CA3AF;
    display:flex; align-items:center; justify-content:space-between;
}
</style>

<div class="admin-content">
    <div class="page-title"><i class="bi bi-file-richtext-fill" style="color:#5B3CF4;"></i> Kelola Artikel &amp; Tips</div>
    <div class="breadcrumb-bar">
        <i class="bi bi-house-fill"></i>
        <a href="<?= base_url('/admin') ?>">Admin</a>
        <i class="bi bi-chevron-right"></i> Kelola Artikel
    </div>

    <div class="top-actions">
        <a href="#" class="btn-add"><i class="bi bi-plus-circle-fill"></i> Tulis Artikel Baru</a>
        <div class="search-wrap">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Cari artikel...">
        </div>
    </div>

    <div class="table-panel">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Judul Artikel</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $catStyles = [
                    ['bg'=>'rgba(91,60,244,.1)','color'=>'#5B3CF4','ico'=>'bi-chat-quote-fill'],
                    ['bg'=>'rgba(249,115,22,.1)','color'=>'#F97316','ico'=>'bi-file-person-fill'],
                    ['bg'=>'rgba(20,184,166,.1)', 'color'=>'#14B8A6','ico'=>'bi-stars'],
                    ['bg'=>'rgba(236,72,153,.1)', 'color'=>'#EC4899','ico'=>'bi-person-hearts'],
                    ['bg'=>'rgba(245,158,11,.1)', 'color'=>'#F59E0B','ico'=>'bi-tools'],
                ];
                foreach ($articles as $i => $art):
                    $cs = $catStyles[$i % count($catStyles)];
                    $cats = ['Tips Wawancara','Pembuatan CV','Pengalaman Magang','Soft Skill','Hard Skill'];
                ?>
                <tr>
                    <td style="color:#9CA3AF; font-weight:600;"><?= $i + 1 ?></td>
                    <td>
                        <div class="art-title-cell">
                            <div class="art-cat-dot" style="background:<?= $cs['bg'] ?>;color:<?= $cs['color'] ?>;">
                                <i class="bi <?= $cs['ico'] ?>"></i>
                            </div>
                            <div>
                                <div style="font-weight:700; color:#1A1235;"><?= esc($art['judul']) ?></div>
                                <div style="font-size:.73rem; color:#9CA3AF; margin-top:2px;"><?= esc(mb_strimwidth($art['kutipan'] ?? '', 0, 55, '…')) ?></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div style="display:flex; align-items:center; gap:8px;">
                            <div style="width:28px;height:28px;border-radius:50%;background:linear-gradient(135deg,#5B3CF4,#F97316);display:flex;align-items:center;justify-content:center;color:#fff;font-size:.7rem;font-weight:800;flex-shrink:0;">
                                <?= strtoupper(substr($art['penulis'] ?? 'A', 0, 1)) ?>
                            </div>
                            <span style="font-size:.82rem; font-weight:500;"><?= esc($art['penulis'] ?? 'Tim MagangHub') ?></span>
                        </div>
                    </td>
                    <td><span style="font-size:.78rem; font-weight:700; color:<?= $cs['color'] ?>;"><?= $cats[$i % count($cats)] ?></span></td>
                    <td style="font-size:.82rem; color:#6B7280;">
                        <?= date('d M Y', strtotime($art['tanggal'])) ?>
                    </td>
                    <td>
                        <?php if($art['status'] === 'Published'): ?>
                            <span class="badge-status badge-pub"><i class="bi bi-circle-fill" style="font-size:.4rem;"></i> Published</span>
                        <?php else: ?>
                            <span class="badge-status badge-draft"><i class="bi bi-circle-fill" style="font-size:.4rem;"></i> Draft</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <div class="action-btns">
                            <button class="btn-sm-view" title="Pratinjau"><i class="bi bi-eye-fill"></i></button>
                            <button class="btn-sm-edit" title="Edit"><i class="bi bi-pencil-fill"></i></button>
                            <button class="btn-sm-del"  title="Hapus"><i class="bi bi-trash3-fill"></i></button>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="table-footer">
            <span>Menampilkan <?= count($articles) ?> artikel</span>
            <span>Data dummy — tidak terhubung ke database</span>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
