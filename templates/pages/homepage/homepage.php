<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<main>

    <section class="margin-top">

        <div class="div-title">
            <h2 class="title-h2">nouveaux ajouts</h2>
        </div>

        <section class="margin-top">

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

                        <div class="card-price-div">
                            <p class="padding-none bold"><?= str_replace('.', ',', $new['price']); ?> €</p>
                        </div>

                        <div class="card-text-div">
                            <a class="text-left" href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $new['uniqid']; ?>"><?= $new['description']; ?></a>
                        </div>

                        <div>
                            <a class="pay-a" href="<?= isset($_GET['id']) ? '../' : null; ?>stripe/<?= $new['uniqid']; ?>">Payer</a>
                        </div>

                    </div>
                    <?php
                }

                ?>

            </div>
            
            <div class="div-link">
                <a class="div-link-a" href="new">Voir tous les nouveaux ajouts</a>
            </div>

        </section> 

        <div class="div-title">
            <h2 class="title-h2">produits phares</h2>
        </div>

        <section class="margin-top">

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

                        <div class="card-price-div">
                            <p class="padding-none bold"><?= str_replace('.', ',', $promo['price']); ?> €</p>
                        </div>

                        <div class="card-text-div">
                            <a class="text-left" href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $promo['uniqid']; ?>"><?= $promo['description']; ?></a>
                        </div>

                        <div>
                            <a class="pay-a" href="<?= isset($_GET['id']) ? '../' : null; ?>stripe/<?= $promo['uniqid']; ?>">Payer</a>
                        </div>

                    </div>
                    <?php
                }

                ?>

            </div>
            
            <div class="div-link">
                <a class="div-link-a" href="promo">Voir toutes les promos</a>
            </div>

        </section>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
