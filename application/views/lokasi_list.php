<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lokasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Daftar Lokasi</h1>
    <a href="<?= site_url('lokasi/create') ?>" class="btn btn-primary mb-3">Tambah Lokasi</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Lokasi</th>
                <th>Negara</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($lokasi as $l): ?>
            <tr>
                <td><?= $l['namaLokasi'] ?></td>
                <td><?= $l['negara'] ?></td>
                <td><?= $l['provinsi'] ?></td>
                <td><?= $l['kota'] ?></td>
                <td>
                    <a href="<?= site_url('lokasi/edit/'.$l['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= site_url('lokasi/delete/'.$l['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
