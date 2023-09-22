<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div class="div-title">
            <h2>nouveaux ajouts</h2>
        </div>

        <section class="section-content">

            <div>
                <h6>img1</h6>
                <h6>img2</h6>
                <h6>img3</h6>
                <h6>img4</h6>
                <h6>img5</h6>
            </div>

        </section>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
