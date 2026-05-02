<?= $this->include('components/header') ?>

<div class="layout-wrapper d-flex flex-grow-1">
    <?php if (session()->get('isLoggedIn')): ?>
        <!-- Admin Sidebar -->
        <?= $this->include('components/sidebar') ?>
        <!-- Admin Content -->
        <main class="content-area flex-grow-1" style="min-width:0;">
            <?= $this->renderSection('content') ?>
        </main>
    <?php else: ?>
        <!-- Guest Content (Full Width) -->
        <main class="content-area flex-grow-1 w-100 p-0" style="padding:0!important;">
            <?= $this->renderSection('content') ?>
        </main>
    <?php endif; ?>
</div>

<?= $this->include('components/footer') ?>

<style>
.layout-wrapper { min-height: calc(100vh - 72px - 310px); }
</style>
