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
                <?php
                for ($count = 1; $count <= $countPage; $count++)
                { 
                    if ($getId != $count)
                    {
                        ?>
                        <a href="figurine/<?php echo $count; ?>"><?php echo $count; ?>k</a>
                        <?php
                    }

                    else
                    {
                        ?>
                        <a><?php echo $count; ?>z</a>
                        <?php
                    }
                }
                ?>
            </div>

        </section>        

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
