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

            <div class="display-card">

                <?php
                foreach ($figurines as $figurine)
                {   
                    ?>
                    <div class="card">

                        <figure>
                            <img src="public/assets/images/pages/figurines/<?= $figurine['name']; ?>.jpg" alt="">
                        </figure>

                        <p class="bold"><?= $figurine['price']; ?> €</p>
                        <p><?= $figurine['description']; ?></p>

                    </div>
                    <?php
                }
                
                ?>
    
            </div>

            <div>
                <a href="">1</a>
                <a href="">2</a>
            </div>

        </section>        

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
