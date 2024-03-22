<?php 
        /* incorporation de tous les avis depuis la BDD 
        **************************************************/
        // requête avec tri par date descendante
function getReviews() {
    global $bdd; 
    
    $requete = $bdd->query('SELECT texte, auteur, note FROM avis');
    $requete->execute();

        // boucle while pour afficher toutes les entrées
        
            $itsthefirst=true; 

        while ($data = $requete->fetch()){
            if (!$data) // On teste si la réponse à la requête est vide.
            {
                echo 'La BDD n\'existe pas ou est vide.';
                break;
            }
            else {

            $style_active=($itsthefirst) ? 'active' :'';
                
            $status='';
            echo '
                <div class="carousel-item pt-5 '.$style_active.'"> 
                <div class="rating-'.$data['note'].' d-flex flex-row justify-content-center align-items-center">'; 

                for($i=0; $i<5; $i++) {
                    if($i>=$data['note']){
                       $status= 'off';
                    }
                    else{
                        $status='on'; 
                    }

                   echo' <i class="fa-solid fa-star '.$status.' "></i>';
                }
                    
                echo'  </div> 
                    <p class="d-block pt-4 m-auto text-justify text-dark">'.$data['texte'].'</p>
                    <p  class="text-center m-auto text-justify text-primary">'.$data['auteur'].'</p>
                    </div> ';
                $itsthefirst=false;
           }
        }

        $requete->closeCursor();  // clôture de la requête

}
     


    // Fonction pour afficher les résultats d'une recherche
	function getAds(){
        ini_set('display_errors', 0);
		global $bdd;
        // On vérifie si le formulaire a été soumis
			if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['categorie'])) {
                // Si oui, on récupère les catégories sélectionnées
                $categories = implode('","', $_POST['categorie']);
                $requete = 'SELECT * FROM annonces WHERE categorie IN ("' . $categories . '")';
            } else {
                // Si non, on affiche toutes les annonces
                $requete = 'SELECT * FROM annonces';
            }

            //On parcourt les valeurs de notre tableau de retours checkbox
			$param_categ = ''; 
				foreach($_POST['categorie'] as $valeur ) { 
				$param_categ .= 'categorie="'.$valeur.'" OR '; 
				}

				// On retire le OR qui va s'ajouter à la fin de la boucle
				if($param_categ != '' ) {
				$requete .= ' AND ('.substr($param_categ, 0, -4).')'; 
				}

			$requete=$bdd->prepare($requete);
			$requete->execute();
				
            while ($annonces = $requete->fetch()){
                // On teste si la réponse à la requête est vide
                if (!$annonces) 
                {
                    echo 'La BDD n\'existe pas ou est vide.';
                    break;
                }
                else
                // On affiche les annonces
                {   
                    echo '
                    <div class="col-md-4 pb-2">
                          <div class="border shadow rounded card">
                              <span class="bg-info text-light text-center border rounded-pill w-25 mx-2 mt-1">'.$annonces['categorie'].'</span>
                              <h2 class="text-center text-secondary ">'.$annonces['titre'].'</h2>
                                  <p class="overflow-hidden text-justify p-3">'.$annonces['texte'].'</p>
                          </div>
                      </div>';
                }
							}
        // On ferme la requête
		$requete->closeCursor();	

		};
      
   
    ?>