<?php $title = 'Dashboard'; ?>
<?= view('templates/header', ['title' => $title]) ?>

<h2 class="mb-4">Dashboard</h2>

<div class="row g-3">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Total User</h6>
                <h2><?= (int) $totalUsers ?></h2>
                <a href="<?= site_url('users') ?>" class="btn btn-sm btn-outline-primary">Kelola User</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Total Produk</h6>
                <h2><?= (int) $totalProducts ?></h2>
                <a href="<?= site_url('products') ?>" class="btn btn-sm btn-outline-primary">Kelola Produk</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Total Transaksi</h6>
                <h2><?= (int) $totalTransactions ?></h2>
                <a href="<?= site_url('transactions') ?>" class="btn btn-sm btn-outline-primary">Kelola Transaksi</a>
            </div>
        </div>
    </div>
</div>

<?= view('templates/footer') ?>
