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

                        <figure class="figure-card-image">
                            <img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/pages/figurines/<?= $figurine['name']; ?>.jpg" alt="">
                            <span><?= date('d/m/Y', strtotime($figurine['created_at'])); ?></span>
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

            <div class="display-menu-paginate">

                <div class="display-menu-content">

                    <div>
                        <p>Pages :</p>
                    </div>

                    <div>
                    <?php
                    for ($count = 1; $count <= $countPage; $count++)
                    { 
                        if (!isset($getId))
                        {
                            $getId = 1;
                        }

                        if ($getId != $count)
                        {
                            if (isset($_GET['id']) && !empty($_GET['id']))
                            {
                                ?>
                                <a href="../figurine/<?php echo $count; ?>"><?php echo $count; ?></a>                   
                                <?php
                            }

                            else
                            {
                                ?>
                                <a href="figurine/<?php echo $count; ?>"><?php echo $count; ?></a>
                                <?php
                            }
                        }

                        else
                        {
                            ?>
                            <a class="active"><?php echo $count; ?></a>
                            <?php
                        }
                    }
                    ?>
                    </div>

                </div>

            </div>

        </section>        

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
