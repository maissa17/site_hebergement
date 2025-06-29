<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un hébergement</title>
    <link rel="stylesheet" href="page_form.css">
</head>
<body>
<div class="container">
    <h1>Modifier un hébergement</h1>
    <?php
    $pdo = new PDO('mysql:host=localhost;dbname=resaa','root','');
    $id = $_POST['NOHEB'];
    $requete = "SELECT * FROM hebergement WHERE NOHEB = :id";
    $statement = $pdo->prepare($requete);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();
    $resultat = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach($resultat as $row){
    ?>
    <form action="modifier_heb3.php" method="post">
      <input name="id" type="hidden" value="<?php echo $row["NOHEB"] ?>">
      <table class="table-affichage">
        <tr>
          <th>Numéro hébergement</th>
          <td><input name="NOHEB" value="<?php echo $row["NOHEB"] ?>"></td>
        </tr>
        <tr>
          <th>Nom</th>
          <td><input name="NOMHEB" value="<?php echo $row["NOMHEB"] ?>"></td>
        </tr>
        <tr>
          <th>Nombre de places</th>
          <td><input name="NBPLACEHEB" value="<?php echo $row["NBPLACEHEB"] ?>"></td>
        </tr>
        <tr>
          <th>Surface</th>
          <td><input name="SURFACEHEB" value="<?php echo $row["SURFACEHEB"] ?>"></td>
        </tr>
        <tr>
          <th>Internet</th>
          <td><input name="INTERNET" value="<?php echo $row["INTERNET"] ?>"></td>
        </tr>
        <tr>
          <th>Année</th>
          <td><input name="ANNEEHEB" value="<?php echo $row["ANNEEHEB"] ?>"></td>
        </tr>
        <tr>
          <th>Secteur</th>
          <td><input name="SECTEURHEB" value="<?php echo $row["SECTEURHEB"] ?>"></td>
        </tr>
        <tr>
          <th>Orientation</th>
          <td><input name="ORIENTATIONHEB" value="<?php echo $row["ORIENTATIONHEB"] ?>"></td>
        </tr>
        <tr>
          <th>État</th>
          <td><input name="ETATHEB" value="<?php echo $row["ETATHEB"] ?>"></td>
        </tr>
        <tr>
          <th>Description</th>
          <td><input name="DESCRIHEB" value="<?php echo $row["DESCRIHEB"] ?>"></td>
        </tr>
        <tr>
          <th>Tarif/semaine</th>
          <td><input name="TARIFSEMHEB" value="<?php echo $row["TARIFSEMHEB"] ?>"></td>
        </tr>
        <tr>
          <td colspan="2"><button type="submit">Modifier</button></td>
        </tr>
      </table>
    </form>
    <?php }
    $pdo = null;
    ?>
</div>
</body>
</html>
