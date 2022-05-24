<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi. -->

<?php
include __DIR__ . '/db.php';

include __DIR__ . '/layout/head.php'; ?>
<main>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-4 justify-content-center">
            <?php foreach ($dischi as $disco) : ?>
                <div class="col bg-dark text-white p-4 m-1">
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
</main>

<?php include __DIR__ . '/layout/footer.php'; ?>