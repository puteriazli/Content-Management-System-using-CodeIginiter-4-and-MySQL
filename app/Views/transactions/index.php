<?php $title = 'Daftar Transaksi'; ?>
<?= view('templates/header', ['title' => $title]) ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Transaksi</h2>
    <a href="<?= site_url('transactions/create') ?>" class="btn btn-primary">+ Tambah Transaksi</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped bg-white">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Produk</th>
                <th>Qty</th>
                <th>Metode Bayar</th>
                <th>Total</th>
                <th>Tanggal</th>
                <th style="width: 160px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($transactions)) : ?>
                <tr>
                    <td colspan="8" class="text-center text-muted">Belum ada data transaksi.</td>
                </tr>
            <?php else : ?>
                <?php foreach ($transactions as $trx) : ?>
                    <tr>
                        <td><?= esc($trx['transaction_id']) ?></td>
                        <td><?= esc($trx['user_name']) ?></td>
                        <td><?= esc($trx['product_name']) ?></td>
                        <td><?= esc($trx['qty']) ?></td>
                        <td><?= esc($trx['payment_method']) ?></td>
                        <td>Rp <?= number_format((float) $trx['total_price'], 0, ',', '.') ?></td>
                        <td><?= esc($trx['transaction_date']) ?></td>
                        <td>
                            <a href="<?= site_url('transactions/edit/' . $trx['transaction_id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= site_url('transactions/delete/' . $trx['transaction_id']) ?>"
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Yakin ingin menghapus transaksi ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= view('templates/footer') ?>
