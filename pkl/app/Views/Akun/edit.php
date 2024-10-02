<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <!-- form -->
    <div class="container">
            <form action="<?php base_url() ?>/akun/update" method="post" type="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <?= csrf_field() ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?= $akun['email'] ?>" readonly>
        </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password" value="<?= $akun['password'] ?>" autofocus>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select type="text" class="form-select" id="status" name="status" value="<?= $akun['status'] ?>">
        <option value="aktif">aktif</option>
        <option value="tidak aktif">tidak aktif</option>
        </select>

            <div class="mb-3 mt-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $detail['nama'] ?>">
    </div>

    <div class="mb-3">
        <label for="notelp" class="form-label">Nomor Telepon</label>
        <input type="text" class="form-control" id="notelp" name="notelp" value="<?= $detail['no_telp'] ?>">
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $detail['alamat'] ?>">
    </div>

    <div class="mb-3">
        <label for="foto" class="custom-file-label">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto" value="<?= $detail['foto'] ?>">
    </div>

    </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>