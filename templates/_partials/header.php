<header class="margin-top">

    <nav class="flex-center-column-gap">

        <div class="flex-center-gap">
			<img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/logo/64logo.png" alt="Logo">
			<h1>Pion Pion Mise</h1>
		</div>

        <div class="flex-center-gap">

            <?php
            // Accueil
            if (!isset($_GET['page']) || isset($_GET['page']) && empty($_GET['page']))
            {
                ?> <a class="main-nav-a active" href="./">accueil</a> <?php
            }

            else if (isset($_GET['id']) && !empty($_GET['id']))
            {
                ?> <a class="main-nav-a" href="../">accueil</a> <?php
            }
            
            else
            {
                ?> <a class="main-nav-a" href="./">accueil</a> <?php	
            }

            // Figurines
            if (isset($_GET['page']) && $_GET['page'] == "figurine" && !isset($_GET['id']))
            {
                ?> <a class="main-nav-a active" href="figurine">figurines</a> <?php
            }

            else if (isset($_GET['id']) && !empty($_GET['id']))
            {
                if (isset($_GET['page']) && $_GET['page'] == "figurine")
                {
                    ?> <a class="main-nav-a active" href="../figurine">figurines</a> <?php
                }

                else
                {
                    ?> <a class="main-nav-a" href="../figurine">figurines</a> <?php
                }
            }

            else
            {
                ?> <a class="main-nav-a" href="figurine">figurines</a> <?php			
            }

            // Cartes
            if (isset($_GET['page']) && $_GET['page'] == "card" && !isset($_GET['id']))
            {
                ?> <a class="main-nav-a active" href="card">cartes</a> <?php
            }

            else if (isset($_GET['id']) && !empty($_GET['id']))
            {
                if (isset($_GET['page']) && $_GET['page'] == "card")
                {
                    ?> <a class="main-nav-a active" href="../card">cartes</a> <?php
                }

                else
                {
                    ?> <a class="main-nav-a" href="../card">cartes</a> <?php                  
                }
            }

            else
            {
                ?> <a class="main-nav-a" href="card">cartes</a> <?php			
            }		

            // Peluches
            if (isset($_GET['page']) && $_GET['page'] == "plush" && !isset($_GET['id']))
            {
                ?> <a <a class="main-nav-a active" href="plush">peluches</a> <?php
            }

            else if (isset($_GET['id']) && !empty($_GET['id']))
            {
                if (isset($_GET['page']) && $_GET['page'] == "plush")
                {
                    ?> <a class="main-nav-a active" href="../plush">peluches</a> <?php
                }

                else
                {
                    ?> <a class="main-nav-a" href="../plush">peluches</a> <?php             
                } 
            }

            else
            {
                ?> <a class="main-nav-a" href="plush">peluches</a> <?php			
            }

            // Wishs
            if (isset($_GET['page']) && $_GET['page'] == "wish" && !isset($_GET['id']))
            {
                ?> <a <a class="main-nav-a active" href="wish">wishs</a> <?php
            }

            else if (isset($_GET['id']) && !empty($_GET['id']))
            {
                if (isset($_GET['page']) && $_GET['page'] == "wish")
                {
                    ?> <a class="main-nav-a active" href="../wish">wishs</a> <?php
                }

                else
                {
                    ?> <a class="main-nav-a" href="../wish">wishs</a> <?php             
                } 
            }

            else
            {
                ?> <a class="main-nav-a" href="wish">wishs</a> <?php			
            }

            ?>

        </div>

    </nav>

</header>
