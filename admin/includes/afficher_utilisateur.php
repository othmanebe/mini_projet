<?php 

if (isset($_GET["id"])){

$utilisateur_id = $_GET["id"];

 $query = "SELECT * FROM utilisateurs WHERE id_utilisateur={$utilisateur_id}";

 $edit_query = mysqli_query($connection, $query);

  while($row = mysqli_fetch_array($edit_query)){

   $id_utilisateur= $row["id_utilisateur"];
   $nom_utilisateur= $row["nom_utilisateur"];
   $prenom_utilisateur= $row["prenom_utilisateur"];
   $email_utilisateur= $row["email_utilisateur"];
   $mot_de_passe =$row["mot_de_passe"];
   $role_utilisateur= $row["role_utilisateur"];

    }
    } ?>

<form action="" method="post" >
<div class="form-group">
    <select class="form-select" name="role_utilisateur">
    <option value="<?php echo $role_utilisateur ?>"><?php echo $role_utilisateur ?></option>
    </select>
    </div>
    <div class="form-group">

    <label for="Nom">Nom</label>
    <input value="<?php if(isset($nom_utilisateur)){ echo $nom_utilisateur;} ?>"type="text" class="form-control" name="nom" id="">

    </div>
    <div class="form-group">

    <label for="Prénom">Prénom</label>
    <input value="<?php if(isset($prenom_utilisateur)){ echo $prenom_utilisateur;} ?>" type="text" class="form-control" name="prenom" id="">

    </div>

    <div class="form-group">

    <label for="Email">Email</label>
    <input value="<?php if(isset($email_utilisateur)){ echo $email_utilisateur;} ?>" type="email" class="form-control" name="email" id="">

    </div>

    <div class="form-group">

    <label for="password">Mot de passe</label>
    <input value="<?php if(isset($mot_de_passe)){ echo $mot_de_passe;} ?>" type="password" class="form-control" name="mot_de_passe" id="">

    </div>
    
    </form>
    <a href="utilisateurs.php">Retour</a>