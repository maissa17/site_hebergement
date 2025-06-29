<?php
session_start();
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
    <?php
    mysql_connect("localhost","root","");
    mysql_select_db("resaa");
    $ETATHEB = "";
    if (isset($_POST["ETATHEB"])) {
        $ETATHEB = $_POST["ETATHEB"];
        $query = $bdd->prepare("SELECT * FROM hebergement WHERE ETATHEB = :ETATHEB");
        $query->bindParam(":ETATHEB", $ETATHEB);
        $query->execute();
    }
    ?>
    <form action="rechercher_heb2.php" method="post">
        
        <center><h1>Rechercher par hebergement</h1></center>
        <center><div id="container1">
        <select name="type_heb" class="selection"class=""></p>
        <?php

$req2 = "SELECT NOMTYPEHEB FROM type_heb";
$r2= mysql_query($req2);

     while ($values = mysql_fetch_array($r2)){
          
    echo "<option>".$values['NOMTYPEHEB']."</option>";
    }
?>
        </select>
            <input type="submit" value="Rechercher" class="style"><br>
            <center><a href="client_menu.php" class="link-retour">&larr;Retour</a></center>
        </div></center>
    </form>
   

    
</body>
</html>