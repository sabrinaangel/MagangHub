<style>
/* ── SIDEBAR STYLES ── */
.admin-sidebar .sidebar-label {
    font-size: .65rem;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: rgba(255,255,255,.3);
    padding: 0 12px;
    margin-bottom: 8px;
    margin-top: 20px;
}

.admin-sidebar .sidebar-label:first-child { margin-top: 0; }

.sidebar-nav { list-style: none; padding: 0; margin: 0 0 12px; }

.sidebar-nav a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 11px 14px;
    border-radius: 12px;
    color: rgba(255,255,255,.65);
    font-size: .875rem;
    font-weight: 500;
    text-decoration: none;
    transition: all .2s ease;
    position: relative;
    overflow: hidden;
}

.sidebar-nav a .icon-wrap {
    width: 32px;
    height: 32px;
    border-radius: 8px;
    background: rgba(255,255,255,.08);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    flex-shrink: 0;
    transition: all .2s ease;
}

.sidebar-nav a:hover {
    color: #fff;
    background: rgba(255,255,255,.1);
}

.sidebar-nav a:hover .icon-wrap {
    background: rgba(91,60,244,.5);
}

.sidebar-nav a.active {
    color: #fff;
    background: linear-gradient(135deg, rgba(91,60,244,.6) 0%, rgba(91,60,244,.3) 100%);
    font-weight: 600;
}

.sidebar-nav a.active .icon-wrap {
    background: var(--primary, #5B3CF4);
    box-shadow: 0 4px 12px rgba(91,60,244,.5);
}

.sidebar-divider {
    height: 1px;
    background: rgba(255,255,255,.08);
    margin: 16px 0;
}

.sidebar-user {
    margin-top: auto;
    padding: 14px;
    background: rgba(255,255,255,.06);
    border-radius: 14px;
    border: 1px solid rgba(255,255,255,.08);
    display: flex;
    align-items: center;
    gap: 10px;
}

.sidebar-avatar {
    width: 36px;
    height: 36px;
    background: linear-gradient(135deg, #5B3CF4 0%, #F97316 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 700;
    font-size: .875rem;
    flex-shrink: 0;
}

.sidebar-user-info { min-width: 0; }
.sidebar-user-info .name {
    font-size: .8rem;
    font-weight: 700;
    color: #fff;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.sidebar-user-info .role {
    font-size: .7rem;
    color: rgba(255,255,255,.4);
    text-transform: uppercase;
    letter-spacing: .06em;
}
</style>

<div class="admin-sidebar">
    <p class="sidebar-label">Menu Utama</p>
    <ul class="sidebar-nav">
        <li>
            <a href="<?= base_url('/admin') ?>" id="sb-dashboard" class="<?= (current_url() == base_url('/admin') || current_url() == base_url('/admin/')) ? 'active' : '' ?>">
                <span class="icon-wrap"><i class="bi bi-speedometer2"></i></span>
                Dashboard
            </a>
        </li>
    </ul>

    <p class="sidebar-label">Manajemen Konten</p>
    <ul class="sidebar-nav">
        <li>
            <a href="<?= base_url('/admin/program') ?>" id="sb-program" class="<?= strpos(current_url(), '/admin/program') !== false ? 'active' : '' ?>">
                <span class="icon-wrap"><i class="bi bi-collection-fill"></i></span>
                Kelola Program
                <span class="ms-auto badge-pill badge-success" style="font-size:.65rem;">3</span>
            </a>
        </li>
        <li>
            <a href="<?= base_url('/admin/artikel') ?>" id="sb-artikel" class="<?= strpos(current_url(), '/admin/artikel') !== false ? 'active' : '' ?>">
                <span class="icon-wrap"><i class="bi bi-file-richtext-fill"></i></span>
                Kelola Artikel
                <span class="ms-auto badge-pill badge-purple" style="font-size:.65rem;">5</span>
            </a>
        </li>
    </ul>

    <div class="sidebar-divider"></div>

    <ul class="sidebar-nav">
        <li>
            <a href="<?= base_url('/') ?>">
                <span class="icon-wrap"><i class="bi bi-globe"></i></span>
                Lihat Website
            </a>
        </li>
        <li>
            <a href="<?= base_url('/logout') ?>">
                <span class="icon-wrap" style="background:rgba(239,68,68,.2);"><i class="bi bi-box-arrow-right" style="color:#FCA5A5;"></i></span>
                <span style="color:rgba(252,165,165,.85);">Logout</span>
            </a>
        </li>
    </ul>

    <div class="sidebar-user">
        <div class="sidebar-avatar">A</div>
        <div class="sidebar-user-info">
            <div class="name"><?= esc(session()->get('username') ?? 'Admin') ?></div>
            <div class="role">Administrator</div>
        </div>
    </div>
</div>
