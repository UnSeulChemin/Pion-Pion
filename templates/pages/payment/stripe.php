<?php $title = "Stripe " . $_GET['id']; ?>

<?php $cdn = "<script src='https://js.stripe.com/v3/'></script>"; ?>
<?php $script = "<script src='../public/assets/js/components/stripe.js'></script>"; ?>

<?php ob_start(); ?>
<main>

    <section class="margin-top">

        <div class="div-title">
            <h2 class="title-h2">Stripe <?= $_GET['id']; ?></h2>
        </div>

        <section class="margin-top">

            <div class="display-card">

                <form action="charge" method="post" id="payment-form">

                <?php
                foreach ($result as $identifier)
                {   
                    ?>
                    <div>
                        <input type="text" name="firstname" placeholder="Prénom" required>
                    </div>

                    <div>
                        <input type="text" name="lastname" placeholder="Nom" required>
                    </div>

                    <input type="hidden" name="amount" value="<?= $identifier['price']; ?>">

                    <div id="card-element"></div>
                    <div id="card-error" role="alert"></div>

                    <a class="pay-a" type="submit">Payer</a>

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
