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
<body class="bg-light">
    <header class="bg-secondary">
        <?php include '../inc.header.php';?>
        <h1>Nos réalisations </h1>
    </header>

    

    <?php 
        /* incorporation de tous les projets depuis la BDD 
        **************************************************/
        // requête avec tri par date descendante
        $requete = $bdd->query('SELECT titre, date, image, texte FROM realisations ORDER BY date DESC LIMIT 0,3');
        
        // boucle while pour afficher toutes les entrées
        while ($data = $requete->fetch()){
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else
            {   // affichage de toutes les entrées de la BDD
                //for ($i=0; $i<3; $i++)
                echo '<div class="conteneur-projet">
                        <div class="conteneur-projet-titre-date">
                            <h2>'.$data['titre'].'</h2>'
                            .'Date : '.$data['date'].'<br></div>'
                        .'<div class="conteneur-projet-image-texte">'
                            .'<img src="../assets/images/portfolio/'.$data['image'].'" class="image-portfolio">'
                            .'<p>'.$data['texte'].'</p></div></div>';
            }
        }
        // clôture de la requête
	    $requete->closeCursor();
    ?>
    
    <?php include '../inc.footer.php';?>
</body>
</html>
