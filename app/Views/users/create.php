<?php $title = 'Tambah User'; ?>
<?= view('templates/header', ['title' => $title]) ?>

<h2 class="mb-4">Tambah User</h2>

<form action="<?= site_url('users/store') ?>" method="post" class="bg-white p-4 rounded shadow-sm">
    <?= csrf_field() ?>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control" value="<?= old('name') ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email (opsional)</label>
        <input type="email" name="email" class="form-control" value="<?= old('email') ?>">
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('users') ?>" class="btn btn-secondary">Batal</a>
</form>

<?= view('templates/footer') ?>
