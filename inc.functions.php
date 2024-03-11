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
            else {

       

            echo '<div class="carousel-item pt-8 active"> 
            <p class="d-block m-auto text-justify text-dark">'.$data['texte'].'</p>
            <p  class=" text- text-center m-auto text-justify text-dark">'.$data['auteur'].'</p>
            </div>';
        }

                     

                    }
      // clôture de la requête
      $requete->closeCursor(); 
            
                  
                }
                
                
            
 
         
        
       
        
            
        
       
   
    ?>