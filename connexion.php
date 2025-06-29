<?php
session_start();
  $connexion =mysqli_connect("localhost","root","","resaa");
   $_SESSION['user']=$_POST['USER'];
   $USER=$_SESSION['user'];
   $MDP=$_POST['MDP'];

   $sql="SELECT * from compte where USER='$USER'and MDP ='$MDP'";
 $result=mysqli_query($connexion,$sql);
   
   
   
  if ($result){

    $row = mysqli_fetch_assoc($result);
   if ($row){
$typeCompte = $row['TYPECOMPTE'];

if ($typeCompte == 'adm'){
header('Location: admin_menu.php');
exit();
    } 
 elseif ($typeCompte == 'cli'){

header('Location: client_menu.php');
exit();
} else {
 header("Location: menu_autre.html");
 exit();
} 

} else {
 
 header("location: erreur.html");
exit();
} 

} else {

echo "Erreur de requête SQL :" .mysqli_error($connexion);
}

mysqli_close($connexion)


?>

        
        
        
  