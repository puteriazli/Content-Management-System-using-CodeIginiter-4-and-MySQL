<?php $title = 'Edit Transaksi'; ?>
<?= view('templates/header', ['title' => $title]) ?>

<h2 class="mb-4">Edit Transaksi</h2>

<form action="<?= site_url('transactions/update/' . $transaction['transaction_id']) ?>" method="post" class="bg-white p-4 rounded shadow-sm">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label class="form-label">User</label>
        <select name="user_id" class="form-select" required>
            <?php foreach ($users as $user) : ?>
                <option value="<?= $user['user_id'] ?>"
                    <?= old('user_id', $transaction['user_id']) == $user['user_id'] ? 'selected' : '' ?>>
                    <?= esc($user['name']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Produk</label>
        <select name="product_id" class="form-select" required>
            <?php foreach ($products as $product) : ?>
                <option value="<?= $product['product_id'] ?>"
                    <?= old('product_id', $transaction['product_id']) == $product['product_id'] ? 'selected' : '' ?>>
                    <?= esc($product['product_name']) ?> (Rp <?= number_format((float) $product['price'], 0, ',', '.') ?>, stok <?= $product['qty_in_stock'] ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Qty</label>
        <input type="number" name="qty" class="form-control" value="<?= old('qty', $transaction['qty']) ?>" min="1" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Metode Pembayaran</label>
        <select name="payment_method" class="form-select" required>
            <?php foreach (['Transfer Bank', 'COD', 'E-Wallet', 'Kartu Kredit', 'QRIS'] as $method) : ?>
                <option value="<?= $method ?>"
                    <?= old('payment_method', $transaction['payment_method']) === $method ? 'selected' : '' ?>>
                    <?= $method ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <p class="text-muted small">Total harga akan dihitung ulang otomatis (qty &times; harga produk) saat data diperbarui.</p>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="<?= site_url('transactions') ?>" class="btn btn-secondary">Batal</a>
</form>

<?= view('templates/footer') ?>
