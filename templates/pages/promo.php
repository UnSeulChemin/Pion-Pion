<?php $title = "Promotion"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div class="div-title">
            <h2 class="title-h2">produits phares</h2>
        </div>

        <section class="section-content">

            <div class="display-card">

                <?php
                foreach ($promos as $promo)
                {   
                    if ($promo['category'] == 'figurine')
                    {
                        $category = 'figurines';
                    }

                    else if ($promo['category'] == 'card')
                    {
                        $category = 'cartes';
                    }

                    else if ($promo['category'] == 'plush')
                    {
                        $category = 'peluches';
                    }

                    ?>
                    <div class="card">

                        <figure class="figure-card-image">
                            <a href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $promo['uniqid']; ?>">
                                <img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/pages/<?= $category; ?>/<?= $promo['name']; ?>.jpg" alt="<?= $category; ?>">
                            </a>
                            <?= $promo['promo'] == 'Y' ? '<span class="abs-promo">promo</span>' : null; ?>
                            <span class="abs-date"><?= date('d/m/Y', strtotime($promo['created_at'])); ?></span>
                        </figure>

                        <div>
                            <p class="bold"><?= str_replace('.', ',', $promo['price']); ?> €</p>
                        </div>

                        <div>
                            <a href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $promo['uniqid']; ?>"><?= $promo['description']; ?></a>
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
