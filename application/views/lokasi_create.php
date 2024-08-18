<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Lokasi Baru</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Tambah Lokasi Baru</h1>
    <?= form_open('lokasi/create') ?>
    <div class="form-group">
        <label for="namaLokasi">Nama Lokasi:</label>
        <input type="text" name="namaLokasi" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="negara">Negara:</label>
        <input type="text" name="negara" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="provinsi">Provinsi:</label>
        <input type="text" name="provinsi" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="kota">Kota:</label>
        <input type="text" name="kota" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="<?= site_url('lokasi') ?>" class="btn btn-secondary">Kembali</a>
    <?= form_close() ?>
</div>
</body>
</html>
