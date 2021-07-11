
 
 <h1 class="page-header">
Tous les utilisateurs
 </h1>

<!-- Une table qui liste les utilisateurs -->
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
    </thead>
    <tbody>
        <!-- pagination -->
        <?php 
        $resultats_par_page = 3;
        $query = "SELECT * FROM utilisateurs";
        $tous_les_utilisateurs = mysqli_query($connection, $query);
        $numero_des_liges= mysqli_num_rows($tous_les_utilisateurs);
        
        $numero_des_page = ceil($numero_des_liges / $resultats_par_page);
        
        if (!isset($_GET["page"])){
            $page=1;
        }else{
            $page= $_GET["page"];
        }
        
        $premier_resultat = ($page -1) * $resultats_par_page;
        
        
        
        ?>
         <!-- Affichage des utilisateurs -->
    <?php 

    $query = "SELECT * FROM utilisateurs LIMIT {$premier_resultat}, {$resultats_par_page}";
    $selectioner_les_utilisateurs = mysqli_query($connection, $query);
    while($row = mysqli_fetch_array($selectioner_les_utilisateurs)){
        $id_utilisateur= $row["id_utilisateur"];
        $nom_utilisateur= $row["nom_utilisateur"];
        $prenom_utilisateur= $row["prenom_utilisateur"];
        $email_utilisateur= $row["email_utilisateur"];
        $role_utilisateur= $row["role_utilisateur"];

        echo "<tr>";
        echo "<td>$id_utilisateur</td>";
        echo "<td>$nom_utilisateur</td>";
        echo "<td>$prenom_utilisateur</td>";
        echo "<td>$email_utilisateur</td>";
        echo "<td>$role_utilisateur</td>";
        echo "<td><a href='utilisateurs.php?source=afficher_utilisateur&id={$id_utilisateur}'>Afficher</td>";
        echo "<td><a href='utilisateurs.php?source=modifier_utilisateur&id={$id_utilisateur}'>Modifier</td>";
        echo "<td><a href='utilisateurs.php?supprimer={$id_utilisateur}'>Supprimer</a></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
<!-- afficher les numéros de pagination -->
<div style="text-align: center">
<?php for ($page=1;$page<$numero_des_page;$page++){
    echo "<a href='utilisateurs.php?page={$page}'>$page  </a>";
}
?>
</div>



                        