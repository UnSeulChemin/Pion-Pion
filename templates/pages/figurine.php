<?php $title = "Figurines"; ?>

<?php ob_start(); ?>
<main>

    <section class="margin-top-x2">

        <div class="div-text">
            <h2>Figurines / Goodies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, doloribus! Expedita ab dolorem sequi quidem,
            at rerum dolorum error nulla eligendi ipsa, id rem delectus dolor pariatur odit voluptates doloribus.</p>
        </div>

        <section class="margin-top">

            <div class="display-card">

                <?php
                foreach ($figurines as $figurine)
                {   
                    ?>
                    <div class="card">

                        <figure class="figure-card-image">
                            <a href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $figurine['uniqid']; ?>">
                                <img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/pages/figurines/<?= $figurine['name']; ?>.jpg" alt="figurine">
                            </a>
                            <?= $figurine['new'] == 'Y' ? '<span class="abs-new">new</span>' : null; ?>
                            <?= $figurine['promo'] == 'Y' ? '<span class="abs-promo">promo</span>' : null; ?>
                            <span class="abs-date"><?= date('d/m/Y', strtotime($figurine['created_at'])); ?></span>
                        </figure>

                        <div class="card-price-div">
                            <p class="padding-none bold"><?= str_replace('.', ',', $figurine['price']); ?> €</p>
                        </div>

                        <div class="card-text-div">
                            <a class="text-left" href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $figurine['uniqid']; ?>"><?= $figurine['description']; ?></a>
                        </div>

                        <div>
                            <a class="pay-a" href="<?= isset($_GET['id']) ? '../' : null; ?>stripe/<?= $figurine['uniqid']; ?>">Payer</a>
                        </div>

                    </div>
                    <?php
                }
                
                ?>
    
            </div>

            <div class="display-menu-paginate">

                <div class="display-menu-content">

                    <div>
                        <p class="padding-none">Pages :</p>
                    </div>

                    <div class="display-menu-div">
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
