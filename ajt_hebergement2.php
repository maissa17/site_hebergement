<?php

$servername = 'localhost';
$username = 'root';
$password = '';

//On établit la connexion
$conn = new PDO("mysql:host=$servername;dbname=resaa", $username, $password);


$b = $_POST["type_heb"];
$c = $_POST["NOMHEB"];
$d = $_POST["NBPLACEHEB"];
$e = $_POST["SURFACEHEB"];
$f = $_POST["INTERNET"];
$g = $_POST["ANNEEHEB"];
$h = $_POST["SECTEURHEB"];
$i = $_POST["ORIENTATIONHEB"];
$j = $_POST["ETATHEB"];
$k = $_POST["DESCRIHEB"];
$l= $_POST["TARIFSEMHEB"];
$m= $_POST["PHOTOHEB"];


   
    $req3 = "INSERT INTO hebergement (CODETYPEHEB, NOMHEB, NBPLACEHEB, SURFACEHEB, INTERNET, ANNEEHEB, SECTEURHEB, ORIENTATIONHEB, ETATHEB, DESCRIHEB, PHOTOHEB, TARIFSEMHEB) 
    VALUES ((SELECT CODETYPEHEB FROM type_heb WHERE NOMTYPEHEB ='$b'), '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$m', '$l')";
    $r3=$conn->prepare($req3);
    

    if ($r3->execute()) {
        echo "<center><p>Enregistrement effectué</p></center>";
        echo '<center><a href="admin_menu.php"class="link-retour">&larr; Retour</a></center>';
    } else {
        echo "<center><h1>Erreur lors de l'enregistrement</h1></center>";
        $error_info = $r3->errorInfo();
        echo "<center><p>" . $error_info[2] . "</p></center>";
    }


?>