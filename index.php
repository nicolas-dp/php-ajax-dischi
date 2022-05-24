<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php
include __DIR__ . '/db.php'

?>

<!doctype html>
<html lang="en">

<head>
    <title>PHP Dischi</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4">
            <?php foreach ($dischi as $disco) : ?>
                <div class="col bg-dark text-white">
                    <img src="<?= $disco['poster'] ?>" class="img-fluid" alt="<?= $disco['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $disco['title'] ?></h5>
                        <small class="card-text text-secondary">
                            <?= $disco['author'] ?>
                        </small>
                        <small class="card-text text-secondary">
                            <?= $disco['year'] ?>
                        </small>
                    </div>

                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>