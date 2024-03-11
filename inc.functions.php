<?php 
        /* incorporation de tous les avis depuis la BDD 
        **************************************************/
        // requête avec tri par date descendante
    function getReviews() {
        global $bdd; 
    
    $requete = $bdd->query('SELECT texte, auteur FROM avis');
    $requete->execute();

   
        // boucle while pour afficher toutes les 
        
$itsthefirst=true;

        while ($data = $requete->fetch()){
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else {

                $style_active=($itsthefirst) ? 'active' :'';

                echo '<div class="carousel-item pt-8 '.$style_active.'"> 
                <p class="d-block m-auto text-justify text-dark">'.$data['texte'].'</p>
                <p  class=" text- text-center m-auto text-justify text-dark">'.$data['auteur'].'</p>
                </div>';
                $itsthefirst=false;
           }
          
        }

        $requete->closeCursor();  // clôture de la requête
               

                    }
     
            
                  
            
                
                
            
 
         
        
       
        
            
        
       
   
    ?>