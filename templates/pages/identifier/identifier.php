<?php $title = "Identifiant " . $_GET['id']; ?>

<?php ob_start(); ?>
<main>

    <section class="margin-top">

        <div class="div-title">
            <h2 class="title-h2">identifiant <?= $_GET['id']; ?></h2>
        </div>

        <section class="margin-top">

            <div class="display-card">

                <?php
                foreach ($result as $identifier)
                {   
                    if ($identifier['category'] == 'figurine')
                    {
                        $category = 'figurines';
                    }

                    else if ($identifier['category'] == 'card')
                    {
                        $category = 'cartes';
                    }

                    else if ($identifier['category'] == 'plush')
                    {
                        $category = 'peluches';
                    }

                    ?>
                    <div class="card">

                        <figure class="figure-card-image">
                            <a href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $identifier['uniqid']; ?>">
                                <img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/pages/<?= $category; ?>/<?= $identifier['name']; ?>.jpg" alt="<?= $category; ?>">
                            </a>
                            <?= $identifier['new'] == 'Y' ? '<span class="abs-new">new</span>' : null; ?>
                            <?= $identifier['promo'] == 'Y' ? '<span class="abs-promo">promo</span>' : null; ?>
                            <span class="abs-date"><?= date('d/m/Y', strtotime($identifier['created_at'])); ?></span>
                        </figure>

                        <div class="card-price-div">
                            <p class="padding-none bold"><?= str_replace('.', ',', $identifier['price']); ?> €</p>
                        </div>

                        <div class="card-text-div">
                            <a class="text-left" href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $identifier['uniqid']; ?>"><?= $identifier['description']; ?></a>
                        </div>

                        <div>
                            <a class="pay-a" href="<?= isset($_GET['id']) ? '../' : null; ?>stripe/<?= $identifier['uniqid']; ?>">Payer</a>
                        </div>

                    </div>
                    <?php
                }

                ?>

        </div>

        <div class="div-link">
            <a class="div-link-a" href="<?= isset($_GET['id']) ? '../' : null; ?>./">Retour à l'accueil</a>
        </div>

        </section>        

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
