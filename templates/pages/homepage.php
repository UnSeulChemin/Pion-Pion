<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<main>

    <section>

        <!-- <figure>
            <img src="public/assets/images/pages/homepage.jpg" alt="Image de la page d'accueil">
        </figure> -->
        
        <div>
            <h2>OneWay P</h2>
            <p>Template</p>
        </div>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
