
<h1 class="page-header">Edit Post</h1>



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

    <?php 
    if (isset($_POST["modifier"])){
        $nom_utilisateur= $_POST["nom"];
        $prenom_utilisateur= $_POST["prenom"];
        $email_utilisateur= $_POST["email"];
        $mot_de_passe= $_POST["mot_de_passe"];
        $role_utilisateur = $_POST["role_utilisateur"];
       
       $query ="UPDATE utilisateurs SET nom_utilisateur = '{$nom_utilisateur}', prenom_utilisateur='{$prenom_utilisateur}', email_utilisateur='{$email_utilisateur}', mot_de_passe= '{$mot_de_passe}' , role_utilisateur = '{$role_utilisateur}'WHERE id_utilisateur = {$utilisateur_id}";
       $update_query = mysqli_query($connection, $query);
       if(!$update_query){
           die("QUERY FAILDE". mysqli_error($connection));
       }
       header("Location: utilisateurs.php");
    }
    
    
    
    ?>

<form action="" method="post" >
<div class="form-group">
    <select class="form-select" name="role_utilisateur">
    <option value="<?php echo $role_utilisateur ?>"><?php echo $role_utilisateur ?></option>
<?php 
if ($role_utilisateur == "admin"){
    echo "<option value='abonné'>abonné</option>";
}else{
    echo "<option value='admin'>admin</option>";
}

?>


    
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
    
    <div class="form-group">

    <input type="submit" name="modifier"class="btn btn-primary"value="Modifier">

    </div>

</form>