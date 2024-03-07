<?php	
    //démarrage session
    /*session_start();*/
	include 'inc.connexion.php';
	/*ini_set('display_errors', 'Off');
	ini_set('log_errors', 'On');
	ini_set('error_log', dirname(__file__) . '/log_error_index_php.txt');*/

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page portfolio</title>
    <?php include 'inc.head.php';?>
</head>
<body class="vw-auto h-100">
<?php include 'inc.header.php';?>

    <h1>Nos réalisations</h1>

    <?php 
        /* incorporation de tous les projets depuis la BDD 
        **************************************************/
        $requete = $bdd->query('SELECT * FROM realisations');
        while ($data = $requete->fetch()){
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else
            {
                // echo 'Titre : '.$data['titre'].'<br>';
                echo '<div class="conteneur-projet">
                        <div class="conteneur-projet-titre-date">
                            <h2>'.$data['titre'].'</h2>'
                            .'Date : '.$data['date'].'<br></div>'
                        .'<div class="conteneur-projet-image-texte">'
                            .'<img src="assets/images/portfolio/'.$data['image'].'" class="image-portfolio">'
                            .'<p>'.$data['texte'].'</p></div></div>';
            }
        }
	    $requete->closeCursor();

    ?>
    
    <?php include 'inc.footer.php';?>
</body>
</html>
