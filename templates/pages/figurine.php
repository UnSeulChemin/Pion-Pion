<?php $title = "Figurines"; ?>

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
                            <img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/pages/figurines/<?= $figurine['name']; ?>.jpg" alt="">
                        </figure>

                        <div>
                            <p class="bold"><?= str_replace('.', ',', $figurine['price']); ?> €</p>
                        </div>

                        <div>
                            <p><?= $figurine['description']; ?></p>
                        </div>

                        <div>
                            <p>Payer</p>
                        </div>

                    </div>
                    <?php
                }
                
                ?>
    
            </div>

            <div>
                <?php
                for ($count = 1; $count <= $countPage; $count++)
                { 
                    if (!isset($$getId))
                    {
                        $getId = 1;
                    }

                    if ($getId != $count)
                    {
                        ?>
                        <a href="figurine/<?php echo $count; ?>"><?php echo $count; ?>k</a>
                        <?php
                    }

                    else
                    {
                        ?>
                        <a class="bold"><?php echo $count; ?>z</a>
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
