<?php $title = "Peluches"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-page">

        <div class="div-text">
            <h2 class="bold">Peluches</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, doloribus! Expedita ab dolorem sequi quidem,
            at rerum dolorum error nulla eligendi ipsa, id rem delectus dolor pariatur odit voluptates doloribus.</p>
        </div>

        <section class="section-content">

            <div class="display-card">

                <?php
                foreach ($plushs as $plush)
                {   
                    ?>
                    <div class="card">

                        <figure class="figure-card-image">
                            <img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/pages/peluches/<?= $plush['name']; ?>.jpg" alt="">
                            <span><?= date('d/m/Y', strtotime($plush['created_at'])); ?></span>
                        </figure>

                        <div>
                            <p class="bold"><?= str_replace('.', ',', $plush['price']); ?> €</p>
                        </div>

                        <div>
                            <p><?= $plush['description']; ?></p>
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
                                <a href="../plush/<?php echo $count; ?>"><?php echo $count; ?></a>                   
                                <?php
                            }

                            else
                            {
                                ?>
                                <a href="plush/<?php echo $count; ?>"><?php echo $count; ?></a>
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
