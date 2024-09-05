<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akuntul</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <!-- form -->
    <div class="container">
            <form action="<?php base_url() ?>/akun/save" method="post">
                <?= csrf_field() ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" autofocus>
        </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select type="text" class="form-select" id="status" name="status">
        <option selected>Pilih Status</option>
        <option value="aktif">aktif</option>
        <option value="tidak aktif">tidak aktif</option>
        </select>

    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

<!-- Read -->
    <div class="container">
    <div class="row">
        <div class="col">
        <table class="table">
    <thead>
        <tr>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($akun as $a) : ?>
        
    <tr>
        <td><?= $a['email'] ?></td>
        <td><?= $a['password'] ?></td>
        <td><?= $a['status'] ?></td>
        <td>
                <a class="btn btn-secondary" href="<?php base_url() ?>/akun/edit/<?= base64_encode($a['email']) ?>">Edit</a>
            <a class="btn btn-danger" href="<?php base_url() ?>/akun/delete/<?= base64_encode($a['email']) ?>" >Delete</a>
            </td>
        </tr>
    <?php endforeach ?>

</table>
    </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
