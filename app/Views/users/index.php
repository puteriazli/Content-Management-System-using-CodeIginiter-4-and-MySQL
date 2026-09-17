<?php $title = 'Daftar User'; ?>
<?= view('templates/header', ['title' => $title]) ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Daftar User</h2>
    <a href="<?= site_url('users/create') ?>" class="btn btn-primary">+ Tambah User</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped bg-white">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th style="width: 160px;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($users)) : ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Belum ada data user.</td>
                </tr>
            <?php else : ?>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= esc($user['user_id']) ?></td>
                        <td><?= esc($user['name']) ?></td>
                        <td><?= esc($user['email'] ?? '-') ?></td>
                        <td>
                            <a href="<?= site_url('users/edit/' . $user['user_id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?= site_url('users/delete/' . $user['user_id']) ?>"
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Yakin ingin menghapus user ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?= view('templates/footer') ?>
