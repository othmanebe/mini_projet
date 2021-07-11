<?php 
if (isset($_GET["supprimer"])){
$utilisateur_id = $_GET["supprimer"];
$query = "DELETE FROM utilisateurs WHERE id_utilisateur = {$utilisateur_id}";
$delete_query = mysqli_query($connection, $query);
if(!$delete_query){
    die("QUERY FAILED". mysqli_error($connection));
}else{
    header("Location: utilisateurs.php");
}
}



?>