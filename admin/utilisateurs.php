<?php include "includes/admin_header.php" ?>
<?php include "includes/supprimer_utilisateur.php" ?>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <?php 
                    if (isset($_GET["source"])){
                        $source = $_GET["source"];
                    }else{
                        $source = "";
                    }
                    switch($source){
                    case "afficher_utilisateur":
                        include "includes/afficher_utilisateur.php" ;
                        break;
                     case "ajouter_utilisateur":
                         include "includes/ajouter_utilisateur.php" ;
                        break;
                        case "modifier_utilisateur":
                            include "includes/modifier_utilisateur.php" ;
                            break;
                            default:
                            include "includes/tous_les_utilisateurs.php";
                            break;
                    }
                    
                    ?>



                    </div>
                </div> <!-- /.row -->
                

            </div><!-- /.container-fluid -->
            

        </div> <!-- /#page-wrapper -->
        

    </div> <!-- /#wrapper -->

    
    

    <?php include "includes/admin_footer.php" ?>
