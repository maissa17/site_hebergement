<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Liste des hébergements</title>
  <link rel="stylesheet" href="page_form.css">
</head>
<body>
  <div class="container">
    <h1>Liste des hébergements</h1>
    <?php
    $idc = mysqli_connect("localhost", "root", "", "resaa");
    $requete = "select * from hebergement";
    $resultat = mysqli_query($idc, $requete);
    echo "<p class='message'>Le nombre d'hébergement enregistré est : <b>" . mysqli_num_rows($resultat) . "</b></p>";
    ?>
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
        <th>Photos</th>
        <th>Tarif</th>
      </tr>
      <?php while ($enreg = mysqli_fetch_array($resultat)) { ?>
      <tr>
        <td><?php echo $enreg["NOHEB"]; ?></td>
        <td><?php echo $enreg["CODETYPEHEB"]; ?></td>
        <td><?php echo $enreg["NOMHEB"]; ?></td>
        <td><?php echo $enreg["NBPLACEHEB"]; ?></td>
        <td><?php echo $enreg["SURFACEHEB"]; ?></td>
        <td><?php echo $enreg["INTERNET"]; ?></td>
        <td><?php echo $enreg["ANNEEHEB"]; ?></td>
        <td><?php echo $enreg["SECTEURHEB"]; ?></td>
        <td><?php echo $enreg["ORIENTATIONHEB"]; ?></td>
        <td><?php echo $enreg["ETATHEB"]; ?></td>
        <td><?php echo $enreg["DESCRIHEB"]; ?></td>
        <td><?php echo "<img src='photo/" . $enreg["PHOTOHEB"] . "' style='max-width:80px;max-height:60px;border-radius:6px;'>"; ?></td>
        <td><?php echo $enreg["TARIFSEMHEB"]; ?></td>
      </tr>
      <?php } ?>
    </table>
    <a href="client_menu.php" class="link-retour">&larr; Retour</a>
    <?php mysqli_close($idc); ?>
  </div>
</body>
</html>