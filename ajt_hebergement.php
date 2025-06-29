
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un hébergement</title>
    <link rel="stylesheet" href="page_form.css">
</head>
<body>
<div class="container">
    <h1>Les informations de l'hébergement</h1>
    <form method="POST" action="ajt_hebergement2.php">
      <table class="table-affichage">
        <tr>
          <th>Type de l'hébergement</th>
          <td>
            <select name="type_heb" class="selection">
              <?php
              mysql_connect("localhost","root","");
              mysql_select_db("resaa");
              $req2 = "SELECT NOMTYPEHEB FROM type_heb";
              $r2= mysql_query($req2);
              while ($values = mysql_fetch_array($r2)){
                echo "<option>".$values['NOMTYPEHEB']."</option>";
              }
              ?>
            </select>
          </td>
        </tr>
        <tr>
          <th>Nom de l'hébergement</th>
          <td><input type="text" name="NOMHEB"></td>
        </tr>
        <tr>
          <th>Année de construction</th>
          <td><input type="number" name="ANNEEHEB"></td>
        </tr>
        <tr>
          <th>Secteur</th>
          <td><input type="text" name="SECTEURHEB"></td>
        </tr>
        <tr>
          <th>Orientation</th>
          <td>
            <select name="ORIENTATIONHEB"class="selection">
              <option value="nord">Nord</option>
              <option value="sud">Sud</option>
              <option value="ouest">Ouest</option>
              <option value="est">Est</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>État</th>
          <td>
            <select name="ETATHEB" class="selection">
              <option value="operationnelle">Operationnelle</option>
              <option value="renovation">En rénovation</option>
            </select>
          </td>
        </tr>
        <tr>
          <th>Description</th>
          <td><input type="text" name="DESCRIHEB"></td>
        </tr>
        <tr>
          <th>Tarif/semaine</th>
          <td><input type="number" name="TARIFSEMHEB"></td>
        </tr>
        <tr>
          <th>Photo</th>
          <td><input type="file" name="PHOTOHEB"></td>
        </tr>
        <tr>
          <th>Nombre de places</th>
          <td><input type="number" name="NBPLACEHEB"></td>
        </tr>
        <tr>
          <th>Surface</th>
          <td><input type="number" name="SURFACEHEB"></td>
        </tr>
        <tr>
          <th>Internet</th>
          <td>
            <select name="INTERNET" class="selection">
              <option value="oui">OUI</option>
              <option value="non">NON</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><input type="reset" value="Annuler"></td>
          <td><input type="submit" value="Valider"></td>
        </tr>
      </table>
    </form>
    <a class="link-retour" href="admin_menu.php">&larr; Retour au menu</a>
</div>
</body>
</html>