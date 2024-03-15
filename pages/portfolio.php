<?php	
    //démarrage session
    /*session_start();*/
	include '../inc.connexion.php';
	/*ini_set('display_errors', 'Off');
	ini_set('log_errors', 'On');
	ini_set('error_log', dirname(__file__) . '/log_error_index_php.txt');*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page portfolio</title>
    <?php include '../inc.head.php';?>
    <link href="../assets/css/portfolio.css" rel="stylesheet">
</head>
<body class="bg-secondary">
<?php include '../inc.header.php';?>


    <main>
    <h1 class="bg-secondary text-primary px-5">NOS RÉALISATIONS</h1>


        <div class="container-fluid bg-light">
            <div class="d-flex flex-row justify-content-center flex-wrap">
    
            <?php 
                /* incorporation de tous les projets depuis la BDD 
                **************************************************/
                // requête avec tri par date descendante
                $requete = $bdd->query('SELECT id, titre, date, image, texte FROM realisations ORDER BY date DESC LIMIT 0,4');
                
                // boucle while pour afficher toutes les entrées
                while ($data = $requete->fetch()){
                    if (!$data) // On teste si la réponse à la requête est vide.
                    {
                        echo 'La BDD n\'existe pas ou est vide.';
                        break;
                    }
                    else
                    {   // affichage de toutes les entrées de la BDD
                        echo '<div class="col-md-4 m-3 bg-secondary-subtle rounded projet'.$data['id'].'">
                                <div class="d-flex flex-column p-3"> 
                                    <img src="../assets/images/portfolio/'.$data['image'].'" class="mb-0 rounded object-fit-cover">
                                    <h2 class="text-center">'.$data['titre'].'</h2>
                                </div>
                            </div>';
                    }
                }
                // clôture de la requête
                $requete->closeCursor();
            ?>
            </div>
        </div>

        <!-- popups contenant les infos détaillées de chaque projet -->
        <!--projet 1-->
        <div class="popup popup1">
            <div class="d-flex flex-wrap justify-content-center mx-auto">
            <?php
                $requete1 = $bdd->query('SELECT id, titre, date, image, texte FROM realisations WHERE id="1"');     
                while ($data = $requete1->fetch()){
                    echo '<div class="d-flex flex-column col-md-5 p-3 m-3 bg-secondary-subtle rounded">
                            <h2 class="text-center">'.$data['titre'].'</h2>
                            <p class="text-center">'.$data['date'].'</p>
                            <img src="../assets/images/portfolio/'.$data['image'].'" class="img-fluid object-fit-cover rounded">
                        </div>
                        <div class="d-flex col-md-5 p-3 m-3 align-items-center bg-secondary-subtle rounded">
                            <p>'.$data['texte'].'</p>
                        </div>';
                    }
                $requete1->closeCursor();
            ?>
            </div>
        </div>
        <!--projet 2-->
        <div class="popup popup2">
            <div class="d-flex flex-wrap justify-content-center mx-auto">
            <?php
                $requete2 = $bdd->query('SELECT id, titre, date, image, texte FROM realisations WHERE id="2"');     
                while ($data = $requete2->fetch()){
                    echo '<div class="d-flex flex-column col-md-5 p-3 m-3 bg-secondary-subtle rounded">
                            <h2 class="text-center">'.$data['titre'].'</h2>
                            <p class="text-center">'.$data['date'].'</p>
                            <img src="../assets/images/portfolio/'.$data['image'].'" class="img-fluid object-fit-cover rounded">
                        </div>
                        <div class="d-flex col-md-5 p-3 m-3 align-items-center bg-secondary-subtle rounded">
                            <p>'.$data['texte'].'</p>
                        </div>';
                    }
                $requete2->closeCursor();
            ?>
            </div>
        </div>
        <!--projet 3-->
        <div class="popup popup3">
            <div class="d-flex flex-wrap justify-content-center mx-auto">
            <?php
                $requete3 = $bdd->query('SELECT id, titre, date, image, texte FROM realisations WHERE id="3"');     
                while ($data = $requete3->fetch()){
                    echo '<div class="d-flex flex-column col-md-5 p-3 m-3 bg-secondary-subtle rounded">
                            <h2 class="text-center">'.$data['titre'].'</h2>
                            <p class="text-center">'.$data['date'].'</p>
                            <img src="../assets/images/portfolio/'.$data['image'].'" class="img-fluid object-fit-cover rounded">
                        </div>
                        <div class="d-flex col-md-5 p-3 m-3 align-items-center bg-secondary-subtle rounded">
                            <p>'.$data['texte'].'</p>
                        </div>';
                    }
                $requete3->closeCursor();
            ?>
            </div>
        </div>
        <!--projet 4-->
        <div class="popup popup4">
            <div class="d-flex flex-wrap justify-content-center mx-auto">
            <?php
                $requete4 = $bdd->query('SELECT id, titre, date, image, texte FROM realisations WHERE id="4"');     
                while ($data = $requete4->fetch()){
                    echo '<div class="d-flex flex-column col-md-5 p-3 m-3 bg-secondary-subtle rounded">
                            <h2 class="text-center">'.$data['titre'].'</h2>
                            <p class="text-center">'.$data['date'].'</p>
                            <img src="../assets/images/portfolio/'.$data['image'].'" class="img-fluid object-fit-cover rounded">
                        </div>
                        <div class="d-flex col-md-5 p-3 m-3 align-items-center bg-secondary-subtle rounded">
                            <p>'.$data['texte'].'</p>
                        </div>';
                    }
                $requete4->closeCursor();
            ?>
            </div>
        </div>
       
    
    </main>
    
    <?php include '../inc.footer.php';?>


    <script src="../assets/libraries/jquery-3.7.1.min.js"></script>
	<script src="../assets/js/anim.js"></script>	
</body>
</html>
