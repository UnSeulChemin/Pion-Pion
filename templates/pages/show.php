<?php $title = "Identifiant " . $_GET['id']; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div class="div-title">
            <h2 class="title-h2">identifiant <?= $_GET['id']; ?></h2>
        </div>

        <section class="section-content">

            <div class="display-card">

                <?php
                foreach ($result as $get)
                {   
                    if ($get['category'] == 'figurine')
                    {
                        $category = 'figurines';
                    }

                    else if ($get['category'] == 'card')
                    {
                        $category = 'cartes';
                    }

                    else if ($get['category'] == 'plush')
                    {
                        $category = 'peluches';
                    }

                    ?>
                    <div class="card">

                        <figure class="figure-card-image">
                            <img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/pages/<?= $category ?>/<?= $get['name']; ?>.jpg" alt="">
                            <?= $get['new'] == 'Y' ? '<span class="abs-new">new</span>' : null; ?>
                            <?= $get['promo'] == 'Y' ? '<span class="abs-promo">promo</span>' : null; ?>
                            <span class="abs-date"><?= date('d/m/Y', strtotime($get['created_at'])); ?></span>
                        </figure>

                        <div>
                            <p class="bold"><?= str_replace('.', ',', $get['price']); ?> €</p>
                        </div>

                        <div>
                            <p><?= $get['description']; ?></p>
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
            <a href="<?= isset($_GET['id']) ? '../' : null; ?>./">Retour à l'accueil</a>
        </div>

        </section>        

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
