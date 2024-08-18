<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Proyek Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Tambah Proyek Baru</h1>
    <?= form_open('proyek/create') ?>
    <div class="form-group">
        <label for="namaProyek">Nama Proyek:</label>
        <input type="text" name="namaProyek" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="client">Client:</label>
        <input type="text" name="client" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tglMulai">Tanggal Mulai:</label>
        <input type="date" name="tglMulai" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="tglSelesai">Tanggal Selesai:</label>
        <input type="date" name="tglSelesai" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="pimpinanProyek">Pimpinan Proyek:</label>
        <input type="text" name="pimpinanProyek" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="keterangan">Keterangan:</label>
        <textarea name="keterangan" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= 'http://localhost:8000/proyek' ?>" class="btn btn-secondary">Kembali</a>
    <?= form_close() ?>
</div>
</body>
</html>
