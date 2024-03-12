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
    <h1 class="bg-secondary text-primary px-5">Nos réalisations </h1>


        <div class="conteneur-projets d-flex flex-row justify-content-center bg-light">
    
            <?php 
                /* incorporation de tous les projets depuis la BDD 
                **************************************************/
                // requête avec tri par date descendante
                $requete = $bdd->query('SELECT id, titre, date, image, texte FROM realisations ORDER BY date DESC LIMIT 0,3');
                
                // boucle while pour afficher toutes les entrées
                while ($data = $requete->fetch()){
                    if (!$data) // On teste si la réponse à la requête est vide.
                    {
                        echo 'La BDD n\'existe pas ou est vide.';
                        break;
                    }
                    else
                    {   // affichage de toutes les entrées de la BDD
                        echo '<div class="conteneur-projet d-flex flex-column justify-content-between w-25 p-3 projet'.$data['id'].'">
                                <h2 class="text-center">'.$data['titre'].'</h2>'
                                .'<img src="../assets/images/portfolio/'.$data['image'].'" class="image-portfolio object-fit-cover "></div>';
                        
                    }
                }
                // clôture de la requête
                $requete->closeCursor();
            ?>
        </div>

        <!-- popups contenant les infos détaillées de chaque projet -->
        <!--projet 1-->
        <div class="popup popup1 mx-5">
            <?php
                $requete1 = $bdd->query('SELECT id, titre, date, image, texte FROM realisations WHERE id="1"');     
                while ($data = $requete1->fetch()){
                    echo '<div class="d-flex flex-column w-75 p-3">
                            <h2>'.$data['titre'].'</h2>
                            <p>'.$data['date'].'</p></div>
                        <div class="d-flex flex-row p-3">
                            <img src="../assets/images/portfolio/'.$data['image'].'" class="image-portfolio w-75 object-fit-cover">
                            <p class="p-3">'.$data['texte'].'</p></div>';
                    }
                $requete1->closeCursor();
            ?>
        </div>
        <!--projet 2-->
        <div class="popup popup2 mx-5">
            <?php
                $requete2 = $bdd->query('SELECT id, titre, date, image, texte FROM realisations WHERE id="2"');     
                while ($data = $requete2->fetch()){
                    echo '<div class="d-flex flex-column w-75 p-3">
                            <h2>'.$data['titre'].'</h2>
                            <p>'.$data['date'].'</p></div>
                        <div class="d-flex flex-row p-3">
                            <img src="../assets/images/portfolio/'.$data['image'].'" class="image-portfolio w-75 object-fit-cover">
                            <p class="p-3">'.$data['texte'].'</p></div>';
                    }
                $requete2->closeCursor();
            ?>
        </div>
        <!--projet 3-->
        <div class="popup popup3 mx-5">
            <?php
                $requete3 = $bdd->query('SELECT id, titre, date, image, texte FROM realisations WHERE id="3"');     
                while ($data = $requete3->fetch()){
                    echo '<div class="d-flex flex-column w-75 p-3">
                            <h2>'.$data['titre'].'</h2>
                            <p>'.$data['date'].'</p></div>
                        <div class="d-flex flex-row p-3">
                            <img src="../assets/images/portfolio/'.$data['image'].'" class="image-portfolio w-75 object-fit-cover">
                            <p class="p-3">'.$data['texte'].'</p></div>';
                    }
                $requete3->closeCursor();
            ?>
        </div>
    
    </main>
    
    <?php include '../inc.footer.php';?>


    <script src="../assets/libraries/jquery-3.7.1.min.js"></script>
	<script src="../assets/js/anim.js"></script>	
</body>
</html>
