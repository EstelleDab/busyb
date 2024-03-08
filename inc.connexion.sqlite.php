<?php
	// sélection du fichier BdD
	$base = 'bdd_busyb.db';

	// Connexion
	try {
		$bdd = new SQLite3($base, 0666);
	} catch (SQLiteException $e) {
		die("La création ou l'ouverture de la base [$base] a échoué pour la raison suivante: ".$e->getMessage());
	};

	// Inserer ici les requêtes



	// Deconnexion
	$bdd = null;
?>


