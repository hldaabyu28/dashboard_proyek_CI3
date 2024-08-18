<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungkan Proyek dengan Lokasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Hubungkan Proyek dengan Lokasi</h1>
    <?= form_open('proyek_lokasi/gabung') ?>
    <div class="form-group">
        <label for="proyekId">Proyek:</label>
        <select name="proyekId" class="form-control">
            <?php foreach($proyek as $p): ?>
                <option value="<?= $p['id'] ?>"><?= $p['namaProyek'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="lokasiId">Lokasi:</label>
        <select name="lokasiId" class="form-control">
            <?php foreach($lokasi as $l): ?>
                <option value="<?= $l['id'] ?>"><?= $l['namaLokasi'] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Hubungkan</button>
    <a href="<?= site_url('proyek') ?>" class="btn btn-secondary">Kembali</a>
    <?= form_close() ?>
</div>
</body>
</html>
