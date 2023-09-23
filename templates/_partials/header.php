<header>

    <nav>

        <div>
			<img src="<?= isset($_GET['id']) ? '../' : null; ?>public/assets/images/logo/64logo.png" alt="Logo">
			<h1>Pion Pion Mise</h1>
		</div>

        <div>

            <?php
            // Accueil
            if (!isset($_GET['page']) || isset($_GET['page']) && empty($_GET['page']))
            {
                ?> <a class="active" href="./">accueil</a> <?php
            }

            else if (isset($_GET['id']) && !empty($_GET['id']))
            {
                ?> <a href="../">accueil</a> <?php
            }
            
            else
            {
                ?> <a href="./">accueil</a> <?php	
            }

            // Figurines
            if (isset($_GET['page']) && $_GET['page'] == "figurine" && !isset($_GET['id']))
            {
                ?> <a class="active" href="figurine">figurines</a> <?php
            }

            else if (isset($_GET['id']) && !empty($_GET['id']))
            {
                ?> <a class="active" href="../figurine">figurines</a> <?php
            }

            else
            {
                ?> <a  href="figurine">figurines</a> <?php			
            }

            // Cartes
            if (isset($_GET['page']) && $_GET['page'] == "card")
            {
                ?> <a <a class="active" href="card">cartes</a> <?php
            }

            else if (isset($_GET['id']) && !empty($_GET['id']))
            {
                ?> <a href="../card">cartes</a> <?php
            }

            else
            {
                ?> <a href="card">cartes</a> <?php			
            }		

            // Peluches
            if (isset($_GET['page']) && $_GET['page'] == "plush")
            {
                ?> <a <a class="active" href="plush">peluches</a> <?php
            }

            else if (isset($_GET['id']) && !empty($_GET['id']))
            {
                ?> <a href="../plush">peluches</a> <?php
            }

            else
            {
                ?> <a href="plush">peluches</a> <?php			
            }

            ?>

        </div>

    </nav>

</header>
