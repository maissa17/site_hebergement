<html>
    <head>
        <link rel="stylesheet" href="page_form.css">
        <title>Gestion de base de données MYSQL en php</title>
</head>
<body>
<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        
        //On établit la connexion
        $conn = new PDO("mysql:host=$servername;dbname=resaa", $username, $password);

         $pdo=null;

         
    $a= $_REQUEST['type_heb'];
    $requete="SELECT CODETYPEHEB FROM type_heb WHERE NOMTYPEHEB='$a'";
    $resultat=$conn->prepare($requete);
    $resultat->execute();

    while($enreg=$resultat->fetch(PDO::FETCH_ASSOC)){
        $type=$enreg["CODETYPEHEB"];
    $requete2="SELECT * FROM hebergement WHERE CODETYPEHEB ='$type'";
    $resultat2=$conn->prepare($requete2);
    $resultat2->execute();

?>

    <center><table class="table-affichage">
        <tr><td>Code_Hebergement</td><td>Nom_HEBERGEMENT</td></tr>

    <?php while($enreg=$resultat2->fetch(PDO::FETCH_ASSOC))
    {
    ?>
    <tr>
    <td><?php echo $enreg["NOHEB"];?></td>
    <td><?php echo $enreg["NOMHEB"];?></td>
    </tr>
    <?php  } 
    }?>
    </table></center>
    <?php
    echo '<center><a href="rechercher_heb1.php" class="link-retour">&larr;retour</a></center>';
   
    ?>
    </body>
    </html>