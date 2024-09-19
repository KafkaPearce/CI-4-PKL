    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NO HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($akun as $d) :?>
                    <tr>
                        <td><?= $d['email'] ?></td>
                        <td><?= $d['nama'] ?></td>
                        <td><?= $d['no_telp'] ?></td>
                        <td><?= $d['alamat'] ?></td>
                        <td><img src="/img/<?= $d['Foto'] ?>" width="100"></td>
                    </tr>
                    <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>