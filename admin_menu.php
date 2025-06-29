<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>RESA - Menu Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>
<!-- 
<?php
    @include("login.php");
    echo "<div class=php''>Bienvenue <b>".$_SESSION["user"]."</b></div>";
?> -->




    <nav>
     
        <ul>
            <li class="menu-html"><a href="accueil.php">ACCUEIL</a></li>
            <li class="menu-html"><a href="#">Reservation</a>
                <ul class="submenu">
                    <li><a href="afficher_reservation.php">Afficher les réservations</a></li>
                </ul>
            </li>
            <li class="menu-html"><a href="#">Hébergement</a>
                <ul class="submenu">
                    
                    <li><a href="afficher_hebergement.php">Afficher les hébergements</a></li>
                    <li><a href="ajt_hebergement.php">Ajouter un hébergement</a></li>
                  
                   <li><a href="modifier_heb.php">Modifier un hebergement  </a></li>
                </ul>
            </li>
            <li class="menu-html"><a href="deco.php">Déconnexion</a></li>
       
        </ul>
    </nav>
  
    
    
    

</nav>




<br>

    </form>
</div>




    
</body>
</html>