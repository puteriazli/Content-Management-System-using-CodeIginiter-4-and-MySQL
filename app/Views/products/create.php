<?php $title = 'Tambah Produk'; ?>
<?= view('templates/header', ['title' => $title]) ?>

<h2 class="mb-4">Tambah Produk</h2>

<form action="<?= site_url('products/store') ?>" method="post" class="bg-white p-4 rounded shadow-sm">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label class="form-label">Nama Produk</label>
        <input type="text" name="product_name" class="form-control" value="<?= old('product_name') ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" name="qty_in_stock" class="form-control" value="<?= old('qty_in_stock') ?>" min="0" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Harga (Rp)</label>
        <input type="number" name="price" class="form-control" value="<?= old('price') ?>" min="0" step="0.01" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('products') ?>" class="btn btn-secondary">Batal</a>
</form>

<?= view('templates/footer') ?>
