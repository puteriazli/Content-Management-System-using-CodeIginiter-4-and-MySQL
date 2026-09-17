<?php $title = 'Daftar Produk'; ?>
<?= view('templates/header', ['title' => $title]) ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar Produk</h2>
    <a href="<?= site_url('products/create') ?>" class="btn btn-primary">+ Tambah Produk</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped bg-white">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th style="width: 160px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($products)) : ?>
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada data produk.</td>
                </tr>
            <?php else : ?>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td><?= esc($product['product_id']) ?></td>
                        <td><?= esc($product['product_name']) ?></td>
                        <td><?= esc($product['qty_in_stock']) ?></td>
                        <td>Rp <?= number_format((float) $product['price'], 0, ',', '.') ?></td>
                        <td>
                            <a href="<?= site_url('products/edit/' . $product['product_id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= site_url('products/delete/' . $product['product_id']) ?>"
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Yakin ingin menghapus produk ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= view('templates/footer') ?>
