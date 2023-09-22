<?php $title = "Figurine"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-page">

        <div class="div-text">
            <h2 class="bold">Figurines / Goodies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, doloribus! Expedita ab dolorem sequi quidem,
            at rerum dolorum error nulla eligendi ipsa, id rem delectus dolor pariatur odit voluptates doloribus.</p>
        </div>

        <section class="section-content">

            <div>
                <?php
                foreach ($figurines as $figurine)
                { ?>
                    <figure>
                    <img src="public/assets/images/pages/figurines/1.jpg" alt="">
                    </figure>

                    <p><?= $figurine['name']; ?></p>
                    <p class="bold"><?= $figurine['price']; ?> €</p>
                    <p><?= $figurine['description']; ?></p>
                <?php
                } ?>
            </div>

        </section>        

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
