<?php include "includes/database.php" ?>
<?php include "includes/header.php" ?>




<?php 
if (isset($_GET["source"])){
    $source = $_GET["source"];
}else{
    $source = "";
}
    switch ($source) {
        case 'inscrire':
             include "includes/inscription.php" ;
            break;
            case 'connection':
                include "includes/login.php" ;
               break;
        default:
        include "includes/login.php" ;
            break;
    }


?>
























<?php include "includes/footer.php" ?>
