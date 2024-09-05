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
            <form action="<?php base_url() ?>/akun/update" method="post">   
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
        <option selected>Pilih Status</option>
        <option value="aktif">aktif</option>
        <option value="tidak aktif">tidak aktif</option>
        </select>

    </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>