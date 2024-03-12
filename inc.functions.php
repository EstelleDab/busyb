<?php 
        /* incorporation de tous les avis depuis la BDD 
        **************************************************/
        // requête avec tri par date descendante
    function getReviews() {
        global $bdd; 
    
        $requete = $bdd->query('SELECT texte, auteur FROM avis');
        
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
                    echo '<div class="carousel-item pt-8 active"> 
                    <p class="d-block m-auto text-justify text-dark">'.$data['texte'].'</p>
                    <p class=" text- text-center m-auto text-justify text-dark">'.$data['auteur'].'</p>
                    </div>';

                }
            }
 
                   
          // clôture de la requête
	    $requete->closeCursor(); 
       }
            
       function getAds() {

        global $bdd;
        /* incorporation de toutes les annonces depuis la BDD 
          **************************************************/
          // requête avec tri par date descendante
          $requete = $bdd->query('SELECT categorie, titre, texte FROM annonces ORDER BY categorie ASC');
          
          // boucle while pour afficher toutes les entrées
          while ($annonces = $requete->fetch()){
              if (!$annonces) // On teste si la réponse à la requête est vide.
              {
                  echo 'La BDD n\'existe pas ou est vide.';
                  break;
              }
              else
              {   // affichage de toutes les entrées de la BDD
                  echo '<div class="conteneur-annonces d-flex flex-column w-25 p-3'.$annonces['categorie'].'">
                          <h2 class="text-center">'.$annonces['titre'].'</h2>
                          <p>'.$annonces['texte'].'</p>';
                  
              }
          }
          // clôture de la requête
          $requete->closeCursor();

       }
      
   
    ?>