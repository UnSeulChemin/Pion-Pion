<aside class="aside-navbar">

    <?php
    // Inscription
    if (isset($_GET['page']) && $_GET['page'] == "register" && !isset($_GET['id']))
    {
        ?> <a class="active" href="register">inscription</a> <?php
    }

    else if (isset($_GET['id']) && !empty($_GET['id']))
    {
        ?> <a href="../register">accueil</a> <?php
    }

    else
    {
        ?> <a href="register">inscription</a> <?php			
    }

    // Connexion
    if (isset($_GET['page']) && $_GET['page'] == "login" && !isset($_GET['id']))
    {
        ?> <a class="active" href="login">connexion</a> <?php
    }

    else if (isset($_GET['id']) && !empty($_GET['id']))
    {
        ?> <a href="../login">connexion</a> <?php
    }

    else
    {
        ?> <a href="login">connexion</a> <?php			
    }

    ?>

</aside>