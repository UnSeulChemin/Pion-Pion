<?php $title = "Figurine"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div>
            <h2>Figurine</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
