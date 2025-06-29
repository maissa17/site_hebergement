<?php

@include("login.php");

?>
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
    
    <form method= POST ACTION=chx_semaine.php>
        
<h1> reservation </h1>
        <table class="table-affichage">
         
        <td><p> Quel location vous interesse ?<br>
        <select name="NOMHEB" class="selection"class=""></p>
        <?php



$req2 = "SELECT NOMHEB FROM hebergement";
$resultat=$conn->prepare($req2);
$resultat->execute();

     while ($values=$resultat->fetch(PDO::FETCH_ASSOC)){
          
    echo "<option>".$values['NOMHEB']."</option>";
    }
?>
        </select>
        </td> 
        <td><p> Quand ?
        <select name="DEBSEM" type="date" class="selection"class=""></p>
        <?php




$req3 = "SELECT DATEDEBSEM FROM semaine";
$resultat3=$conn->prepare($req3);
$resultat3->execute();

     while ($values=$resultat3->fetch(PDO::FETCH_ASSOC)){
          
    echo "<option>".$values['DATEDEBSEM']."</option>";
    }
?>
         <td>Pour combien de personne ?<input type="text" name="NBOCCUPANT"></td>   
                <td> <input type="reset" value="annuler"></td>
                <td> <input type="submit" value="valider"></td>

            
        </table>
       <center><a class="lien" href="client_menu.php"class="link-retour">&larr; Retour au menu</a></center>
</body>
</html>