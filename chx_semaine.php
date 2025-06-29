<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="page_form.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
$idc=mysqli_connect("localhost","root","","resaa");
$_SESSION['NOMHEB']= $_POST['NOMHEB'];
$_SESSION['DATE']=$_POST['DEBSEM'];
$_SESSION['NBOCCUPANT']=$_POST['NBOCCUPANT'];


   




$NOMHEB = $_SESSION['NOMHEB'];
/*$PROMOTION = ['promotion']*/


   
    $requete="SELECT * FROM hebergement WHERE NOMHEB='$NOMHEB'";
    $resultat=mysqli_query($idc,$requete);
   
  

    $enreg=mysqli_fetch_array($resultat)
    ?>
    <h1 style="text-align:center;">Détail de l'hébergement sélectionné</h1>
    <table class="table-affichage">
      <tr>
        <th>Numéro</th>
        <th>Type</th>
        <th>Nom</th>
        <th>Places</th>
        <th>Surface</th>
        <th>Internet</th>
        <th>Année</th>
        <th>Secteur</th>
        <th>Orientation</th>
        <th>État</th>
        <th>Description</th>
        <th>Photo</th>
        <th>Tarif</th>
        <th>Promotion (%)</th>
      </tr>
      <tr>
        <td><?php echo $enreg["NOHEB"];?></td>
        <td><?php echo $enreg["CODETYPEHEB"];?></td>
        <td><?php echo $enreg["NOMHEB"];?></td>
        <td><?php echo $enreg["NBPLACEHEB"];?></td>
        <td><?php echo $enreg["SURFACEHEB"];?></td>
        <td><?php echo $enreg["INTERNET"];?></td>
        <td><?php echo $enreg["ANNEEHEB"];?></td>
        <td><?php echo $enreg["SECTEURHEB"];?></td>
        <td><?php echo $enreg["ORIENTATIONHEB"];?></td>
        <td><?php echo $enreg["ETATHEB"];?></td>
        <td><?php echo $enreg["DESCRIHEB"];?></td>
        <td><?php echo "<img src=photo/".$enreg["PHOTOHEB"]." style='max-width:80px;max-height:60px;border-radius:6px;'>";?></td>
        <td><?php echo $enreg["TARIFSEMHEB"];?></td>
        <td><?php echo $enreg["promotion"];?></td>
      </tr>
    </table>
    <?php
//     $prixInitial = $enreg['TARIFSEMHEB']; 
//     $remise = $enreg['TARIFSEMHEB'] * $enreg['promotion']/100; 
//       // Supposons que vous avez le prix initial et la remise
  
    
//     // Calcul du montant total après remise
//     $montantTotal = $prixInitial - ($prixInitial * ($remise / 100));
    
//     // Affichage du /montant total
//     echo "Montant total avec remise : " . $montantTotal . " €";

//     // montant sans la remise 
    

// // Calcul du montant total sans remise
// $montantTotal = $prixInitial;

// // Affichage du montant total
// echo "Montant total sans remise : " . $montantTotal . " €";
//     ?>

    <div style="text-align:center; margin-top:30px;">
      <a href="ajt_reservation.php" class="link-retour" style="display:inline-block; margin:8px 12px; background:#4a5cd9; color:#fff; padding:12px 24px; border-radius:6px; text-decoration:none; font-weight:bold;">Valider la réservation</a>
      <a href="ajt.reservation.prom.php" class="link-retour" style="display:inline-block; margin:8px 12px; background:#303885; color:#fff; padding:12px 24px; border-radius:6px; text-decoration:none; font-weight:bold;">Valider avec promotion</a>
      <a href="ajt_reserv1.php" class="link-retour" style="display:inline-block; margin:8px 12px; background:#222; color:#fff; padding:12px 24px; border-radius:6px; text-decoration:none; font-weight:bold;">Choix précédent</a>
      <a href="client_menu.php" class="link-retour" style="display:inline-block; margin:8px 12px; background:#222; color:#fff; padding:12px 24px; border-radius:6px; text-decoration:none; font-weight:bold;">Menu</a>
    </div>

    </body>
</html>
    
</body>
</html>