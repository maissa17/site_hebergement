<?php
// inscription.php : traitement du formulaire d'inscription
session_start();
$connexion = mysqli_connect("localhost", "root", "", "resaa");

if (!$connexion) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}

if (isset($_POST['USER']) && isset($_POST['MDP']) && isset($_POST['TYPECOMPTE'])) {
    $USER = mysqli_real_escape_string($connexion, $_POST['USER']);
    $MDP = mysqli_real_escape_string($connexion, $_POST['MDP']);
    $TYPECOMPTE = mysqli_real_escape_string($connexion, $_POST['TYPECOMPTE']);

    // Vérifier si l'utilisateur existe déjà
    $sql_check = "SELECT * FROM compte WHERE USER='$USER'";
    $result_check = mysqli_query($connexion, $sql_check);
    if (mysqli_num_rows($result_check) > 0) {
        echo "<script>alert('Nom d\'utilisateur déjà utilisé.'); window.location='inscription.html';</script>";
        exit();
    }

    // Insérer le nouvel utilisateur
    $sql = "INSERT INTO compte (USER, MDP, TYPECOMPTE) VALUES ('$USER', '$MDP', '$TYPECOMPTE')";
    if (mysqli_query($connexion, $sql)) {
        echo "<script>alert('Inscription réussie ! Vous pouvez vous connecter.'); window.location='connexion.html';</script>";
    } else {
        echo "Erreur lors de l'inscription : " . mysqli_error($connexion);
    }
} else {
    echo "Veuillez remplir tous les champs.";
}

mysqli_close($connexion);
?>
