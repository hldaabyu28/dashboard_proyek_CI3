<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Proyek</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Daftar Proyek</h1>
    <a href="<?= 'http://localhost:8000/proyek/create' ?>" class="btn btn-primary mb-3">Tambah Proyek</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama Proyek</th>
                <th>Client</th>
                <th>Pimpinan Proyek</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($proyek as $p): ?>
            <tr>
                <td><?= $p['namaProyek'] ?></td>
                <td><?= $p['client'] ?></td>
                <td><?= $p['pimpinanProyek'] ?></td>
                <td>
                    <a href="<?= 'http://localhost:8000/proyek/edit/'.$p['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= 'http://localhost:8000/proyek/delete/'.$p['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
