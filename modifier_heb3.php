<?php

$pdo = new PDO('mysql:host=localhost;dbname=resaa','root','');

$id = $_POST['id'];
$NOHEB = $_POST['NOHEB'];

$NOMHEB = $_POST['NOMHEB'];
$NBPLACEHEB = $_POST['NBPLACEHEB'];
$SURFACEHEB = $_POST['SURFACEHEB'];
$INTERNET = $_POST['INTERNET'];
$ANNEEHEB = $_POST['ANNEEHEB'];
$SECTEURHEB = $_POST['SECTEURHEB'];
$ORIENTATIONHEB = $_POST['ORIENTATIONHEB'];
$ETATHEB = $_POST['ETATHEB'];
$DESCRIHEB = $_POST['DESCRIHEB'];
$TARIFSEMHEB = $_POST['TARIFSEMHEB'];

$query = "UPDATE hebergement SET NOHEB = ?, NOMHEB = ?, NBPLACEHEB = ?, SURFACEHEB = ? , INTERNET = ? , ANNEEHEB = ? , SECTEURHEB = ? , ORIENTATIONHEB = ? , ETATHEB = ? , DESCRIHEB = ? , TARIFSEMHEB = ? 


WHERE NOHEB = ?";

$stmt = $pdo->prepare($query);
$stmt->bindParam(1, $NOHEB);
$stmt->bindParam(2, $NOMHEB);
$stmt->bindParam(3, $NBPLACEHEB);
$stmt->bindParam(4, $SURFACEHEB);
$stmt->bindParam(5, $INTERNET);
$stmt->bindParam(6, $ANNEEHEB);
$stmt->bindParam(7, $SECTEURHEB);
$stmt->bindParam(8, $ORIENTATIONHEB);
$stmt->bindParam(9, $ETATHEB);
$stmt->bindParam(10, $DESCRIHEB);
$stmt->bindParam(11, $TARIFSEMHEB);




$stmt->bindParam(12, $id);
$stmt->execute();

if($stmt){
    header("location:modifier_heb.php");
}
?>
