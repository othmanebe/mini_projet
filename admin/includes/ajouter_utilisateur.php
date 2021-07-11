<h1 class="page-header">
 Ajouter un utilisateur
 </h1>

<?php

if (isset($_POST["ajouter"])){
    $nom_utilisateur= $_POST["nom"];
    $prenom_utilisateur= $_POST["prenom"];
    $email_utilisateur= $_POST["email"];
    $mot_de_passe= $_POST["mot_de_passe"];
    $role_utilisateur = $_POST["role_utilisateur"];
    

    $query = "INSERT INTO utilisateurs(nom_utilisateur, prenom_utilisateur, email_utilisateur, mot_de_passe, role_utilisateur)";
    $query .= "VALUES ('{$nom_utilisateur}', '{$prenom_utilisateur}', '{$email_utilisateur}', '{$mot_de_passe}','{$role_utilisateur}')";
    $ajouter_utilisateur= mysqli_query($connection, $query);

    if (!$ajouter_utilisateur){
        die("QUERY FAILED". mysqli_error($connection));
    }
}





?>

<form action="" method="post" >
<div class="form-group">
    <select class="form-select" name="role_utilisateur">
    <option value="abonné">choisir un role</option>
    <option value="admin">admin</option>
    <option value="abonné">abonné</option>
    </select>
    </div>
    <div class="form-group">

    <label for="Nom">Nom</label>
    <input type="text" class="form-control" name="nom" id="">

    </div>
    <div class="form-group">

    <label for="Prénom">Prénom</label>
    <input type="text" class="form-control" name="prenom" id="">

    </div>

    <div class="form-group">

    <label for="Email">Email</label>
    <input type="email" class="form-control" name="email" id="">

    </div>

    <div class="form-group">

    <label for="password">Mot de passe</label>
    <input type="password" class="form-control" name="mot_de_passe" id="">

    </div>
    
    <div class="form-group">

    <input type="submit" name="ajouter"class="btn btn-primary"value="Ajouter">

    </div>

</form>