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
 
 $idc=mysqli_connect("localhost","root","","resaa");


 $requete="select * from hebergement,type_heb";
 $resultat=mysqli_query($idc,$requete);
 echo"Le nombre d'hebergement enregistre est:";
 echo mysqli_num_rows($resultat);







 
 ?>


<center><h1> Affichage de tous les heb </h1></center>
<table  class="table-affichage">
    <tr>
      
        <td> Type de l'hebergement </td>
        <td> Numero du hebergement </td>
        <td>Nom de l'hebergement </td>
        <td> Etat de l'hebergement </td>
        <td> Nombre de place </td>
        <td> Modifier </td>
    </tr>
<?php



   while ($enreg=mysqli_fetch_array($resultat))
   
  {
  ?>
        
        <form method="post" action="modifier_heb2.php">
        
        <tr>
            <td><input type="hidden" name="NOHEB" value='<?php echo $enreg["NOHEB"]; ?>'> </td>
           
    <td><?php echo $enreg["NOMTYPEHEB"];?></td>
            <td><?php echo $enreg["NOHEB"]; ?></td>
            <td><?php echo $enreg["NOMHEB"]; ?></td>
            <td><?php echo $enreg["ETATHEB"]; ?></td>
            <td><?php echo $enreg["NBPLACEHEB"]; ?></td>
            
            <td><button>Modifier</button></td>
            
        </tr>
    </form>
    <?php }?>
</table>
<br>
<center><a class="lien" href="client_menu.php"class="link-retour">&larr; Retour au menu</a></center>
<?php
$pdo = null;
?>
</body>
</html>