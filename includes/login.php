<?php include "database.php";?>
<?php session_start();?>
<?php 
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $mot_de_passe = $_POST["mot_de_passe"];
    
    $query ="SELECT * FROM utilisateurs WHERE email_utilisateur ='{$email}'";
    $select_utilisateur = mysqli_query($connection, $query);

    if(!$select_utilisateur){
        die("QUERY FAILED". mysqli_error($connection));
    }
    while ($row = mysqli_fetch_array($select_utilisateur)){
        $db_nom = $row["nom_utilisateur"];
        $db_prenom = $row["prenom_utilisateur"];
        $db_email = $row["email_utilisateur"];
        $db_password = $row["mot_de_passe"];
        $db_role = $row["role_utilisateur"];

    }
if($email == $db_email && $mot_de_passe == $db_password){
$_SESSION["nom_utilisateur"]= $db_nom;
$_SESSION["prenom_utilisateur"]= $db_prenom;
$_SESSION["role_utilisateur"]= $db_role;


    header("Location: ./admin");
}else{
    header("Location: ./index.php");
}
}



?>


<div class="wrapper text-center ">
<form class ="form-container" action="" method="post">
<div class="form-group mb-4">

<h3 class="heading">Connectez Vous </h3>
</div>

<div class="form-group mb-3">

<input type="email" class="form-control" name="email" placeholder="Addresse Email">
</div>

<div class="form-group">

<input type="password" class="form-control " name="mot_de_passe" placeholder="Mot de Passe">
</div>

<div class="form-group mt-3">

    <button type="submit" name="submit"class="btn btn-lg btn-primary col-12">Se connecter</button >

    </div>
    <div class="form-group ">

    <a href="index.php?source=inscrire">Je m'inscrire</a>
    </div>

</form>
</div>
