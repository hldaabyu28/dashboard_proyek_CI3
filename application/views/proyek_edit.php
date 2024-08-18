<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Proyek</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Edit Proyek</h1>
    <?= form_open('proyek/edit/'.$proyek['id']) ?>
    <div class="form-group">
        <label for="namaProyek">Nama Proyek:</label>
        <input type="text" name="namaProyek" class="form-control" value="<?= $proyek['namaProyek'] ?>" required>
    </div>
    <div class="form-group">
        <label for="client">Client:</label>
        <input type="text" name="client" class="form-control" value="<?= $proyek['client'] ?>" required>
    </div>
    <div class="form-group">
        <label for="tglMulai">Tanggal Mulai:</label>
        <input type="date" name="tglMulai" class="form-control" value="<?= $proyek['tglMulai'] ?>" required>
    </div>
    <div class="form-group">
        <label for="tglSelesai">Tanggal Selesai:</label>
        <input type="date" name="tglSelesai" class="form-control" value="<?= $proyek['tglSelesai'] ?>" required>
    </div>
    <div class="form-group">
        <label for="pimpinanProyek">Pimpinan Proyek:</label>
        <input type="text" name="pimpinanProyek" class="form-control" value="<?= $proyek['pimpinanProyek'] ?>" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan" class="form-control" required><?= $proyek['keterangan'] ?></textarea>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= 'http://localhost:8000/proyek' ?>" class="btn btn-secondary">Kembali</a>
    <?= form_close() ?>
</div>
</body>
</html>
