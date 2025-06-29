<?php
    session_start();
   
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<title> RESA </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>

 <?php
@include("login.php");
echo "<center class='php'> Bienvenue ".$_SESSION["user"]." sur le site VVA </center>";
?>

<nav>
	

<ul>

	<li class="menu-html"><a href="accueil.php"> ACCUEIL RESA</a>
	<ul class="submenu">
	</ul>	
	
	</li>
	</li>
	<li class="menu-html"><a href="#"> reservation </a>
	<ul class="submenu">
    <li><a href="ajt_reservation1.php"> ajouter une reservation</a></li>
       
       
	    <li> <a href="recherche_reservation.php">Rechercher la liste des reservation </a></li>
       
    </ul>
	
	</li>
	<li class="menu-html"><a href="#"> Hebergement </a>
	<ul class="submenu">
    
        <li><a href="afficher_hebergement.php"> afficher la liste des hebergement </a></li>
      
	    <li> <a href="rechercher_heb1.php">Rechercher un hebergement  </a></li>
       
    </ul>
	
        </ul>	
        
        
        
	
	
	
    <ul> <li class="menu-html"><a href="deco.php">Deconnexion</a> </ul>
   
	
</ul>
</nav>


<br>

    </form>
</div>



</body>
</html>