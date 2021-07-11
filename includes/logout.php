<?php include "database.php";?>
<?php session_start();?>

<?php 
$_SESSION["nom_utilisateur"]= null;
$_SESSION["prenom_utilisateur"]= null;
$_SESSION["role_utilisateur"]= null;

header("Location: ../index.php");



?>