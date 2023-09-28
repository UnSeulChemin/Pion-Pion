<?php $title = "Stripe " . $_GET['id']; ?>

<?php ob_start(); ?>
<main>

    <section class="margin-top">

        <div class="div-title">
            <h2 class="title-h2">Stripe <?= $_GET['id']; ?></h2>
        </div>

        <section class="margin-top">

            <div class="display-card">

                <form action="">

                <?php
                foreach ($result as $identifier)
                {   
                    ?>
                    <p class="padding-none bold"><?= $identifier['price']; ?></p>

                    <?php
                }

                ?>

                </form>

        </div>

        <div class="div-link">
            <a class="div-link-a" href="<?= isset($_GET['id']) ? '../' : null; ?>./">Retour à l'accueil</a>
        </div>

        </section>        

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
