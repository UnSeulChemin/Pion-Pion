<?php $title = "Nouveautés"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div class="div-title">
            <h2>nouveaux ajouts</h2>
        </div>

        <section class="section-content">

            <div class="display-card">

                <?php
                foreach ($news as $new)
                {   
                    if ($new['category'] == 'figurine')
                    {
                        $category = 'figurines';
                    }

                    else if ($new['category'] == 'card')
                    {
                        $category = 'cartes';
                    }

                    else if ($new['category'] == 'plush')
                    {
                        $category = 'peluches';
                    }

                    ?>
                    <div class="card">

                        <figure class="figure-card-image">
                            <a href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $new['uniqid']; ?>">
                                <img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/pages/<?= $category; ?>/<?= $new['name']; ?>.jpg" alt="<?= $category; ?>">
                            </a>
                            <?= $new['new'] == 'Y' ? '<span class="abs-new">new</span>' : null; ?>
                            <span class="abs-date"><?= date('d/m/Y', strtotime($new['created_at'])); ?></span>
                        </figure>

                        <div>
                            <p class="bold"><?= str_replace('.', ',', $new['price']); ?> €</p>
                        </div>

                        <div>
                            <a href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $new['uniqid']; ?>"><?= $new['description']; ?></a>
                        </div>

                        <div>
                            <p>Payer</p>
                        </div>

                    </div>
                    <?php
                }

                ?>

            </div>

            <div class="div-link">
                <a href="./">Retour à l'accueil</a>
            </div>

        </section>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
