<HTML>
<HEAD>
<TITLE></TITLE>
<link rel="stylesheet" href="page_form.css">
</HEAD>
<BODY>
    <?php
    $idc=mysqli_connect("localhost","root","","resaa");
   

    $requete="select * from resa";
    $resultat=mysqli_query($idc,$requete);
   
    
    ?>

    <TABLE class="table-affichage">
        <tr>
        <td> Numero de Reservation </td>
        <td> Nom utilisateurs</td>
        <td> Date début Semaine</td>
        <td> Numero de Hebergement </td>
        <td> Etat Reservation</td>
        <td> Date Reservation</td>
        <td> Date Arrhes </td>
        <td> Montant Arrhes</td>
        <td> Nboccupant </td>
        <td> Tarif à la semaine </td>
       



</tr>
<?php while ($enreg=mysqli_fetch_array($resultat))
{
?>
<tr>
    <td><?php echo $enreg["NORESA"];?></td>
    <td><?php echo $enreg["USER"];?></td>
    <td><?php echo $enreg["DATEDEBSEM"];?></td>
    <td><?php echo $enreg["NOHEB"];?></td>
    <td><?php echo $enreg["CODEETATRESA"];?></td>
    <td><?php echo $enreg["DATERESA"];?></td>
    <td><?php echo $enreg["DATEARRHES"];?></td>
    <td><?php echo $enreg["MONTANTARRHES"];?></td>
    <td><?php echo $enreg["NBOCCUPANT"];?></td>
    <td><?php echo $enreg["TARIFSEMRESA"];?></td>
  
    
</tr>

<?php } ?>

</table>
<?php
echo "<a href=admin_menu.php class='link-retour'>&larr; Retour </a>";
mysqli_close($idc);
?>
</BODY>
</HTML>