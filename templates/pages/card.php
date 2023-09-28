<?php $title = "Cartes"; ?>

<?php ob_start(); ?>
<main>

    <section class="margin-top-x2">

        <div class="div-text">
            <h2>Cartes à collectionner</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, doloribus! Expedita ab dolorem sequi quidem,
            at rerum dolorum error nulla eligendi ipsa, id rem delectus dolor pariatur odit voluptates doloribus.</p>
        </div>

        <section class="margin-top">

            <div class="display-card">

                <?php
                foreach ($cards as $card)
                {   
                    ?>
                    <div class="card">

                        <figure class="figure-card-image">
                            <a href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $card['uniqid']; ?>">
                                <img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/pages/cartes/<?= $card['name']; ?>.jpg" alt="carte">
                            </a>
                            <?= $card['new'] == 'Y' ? '<span class="abs-new">new</span>' : null; ?>
                            <?= $card['promo'] == 'Y' ? '<span class="abs-promo">promo</span>' : null; ?>
                            <span class="abs-date"><?= date('d/m/Y', strtotime($card['created_at'])); ?></span>
                        </figure>

                        <div class="card-price-div">
                            <p class="padding-none bold"><?= str_replace('.', ',', $card['price']); ?> €</p>
                        </div>

                        <div class="card-text-div">
                            <a class="text-left" href="<?= isset($_GET['id']) ? '../' : null; ?>identifiant/<?= $card['uniqid']; ?>"><?= $card['description']; ?></a>
                        </div>

                        <div>
                            <a class="pay-a">Payer</a>
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
                                <a href="../card/<?php echo $count; ?>"><?php echo $count; ?></a>                   
                                <?php
                            }

                            else
                            {
                                ?>
                                <a href="card/<?php echo $count; ?>"><?php echo $count; ?></a>
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
