<?php


$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$requete = $bdd->prepare('SELECT UPPER(console) AS console_majuscule , nom, prix FROM jeux_video WHERE console ORDER BY prix DESC LIMIT 0, 20');
$requete ->execute();

// Majuscule
// UPPER(console) AS console_majuscule

// Minuscule
// LOWER(console) AS console_minuscule

// Longueur de la chaine de caracteres
// LENGTH(console) AS longueur_console

// Faire la moyenne (ne fonctionne que sur des integer)
// AVG(prix) AS prix_moyen

// La somme (ne fonctionne que sur des integer)
// SUM(prix) AS somme_jeux_videos

// Plus grand nombre (ne fonctionne que sur des integer)
// MAX(prix) AS prix_max

// Plus petit nombre (ne fonctionne que sur des integer)
// MIN(prix) AS prix_min

// Nombre de ligne dans la table (mettre une étoile pour compter les lignes vides)
// COUNT(*) 

// Regrouper les console = 10
// HAVING console = 10


// Zone exemple

$requete = $bdd->prepare('SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10');
$requete ->execute();


?>