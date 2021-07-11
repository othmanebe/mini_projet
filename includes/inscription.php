<?php

if (isset($_POST["submit"])){
    $nom_utilisateur= $_POST["nom"];
    $prenom_utilisateur= $_POST["prenom"];
    $email_utilisateur= $_POST["email"];
    $mot_de_passe= $_POST["mot_de_passe"];

    $query = "INSERT INTO utilisateurs(nom_utilisateur, prenom_utilisateur, email_utilisateur, mot_de_passe, role_utilisateur)";
    $query .= "VALUES ('{$nom_utilisateur}', '{$prenom_utilisateur}', '{$email_utilisateur}', '{$mot_de_passe}','abonné')";
    $ajouter_utilisateur= mysqli_query($connection, $query);

    if (!$ajouter_utilisateur){
        die("QUERY FAILED". mysqli_error($connection));
    }else{
        header("Location: ./index.php");
    }
    
}
?>



<div class="wrapper text-center ">
<form class ="form-container" action="" method="post">
<div class="form-group mb-4">

<h3 class="heading">Inscription </h3>
</div>
<div class="form-group mb-3">

<input type="text" class="form-control" name="nom" placeholder="Nom">
</div>
<div class="form-group mb-3">

<input type="text" class="form-control" name="prenom" placeholder="Prénom">
</div>

<div class="form-group mb-3">

<input type="email" class="form-control" name="email" placeholder="Addresse Email">
</div>

<div class="form-group">

<input type="password" class="form-control " name="mot_de_passe" placeholder="Mot de Passe">
</div>

<div class="form-group mt-3">

    <button type="submit" name="submit"class="btn btn-lg btn-primary col-12">S'inscrire</button >

    </div>
    <div class="form-group ">

    <a href="index.php?source=connection">Se connecter</a>
    </div>

</form>
</div>
<?php //include "footer.php" ?>