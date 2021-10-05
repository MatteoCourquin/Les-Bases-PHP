<?php

    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $requete = $bdd->prepare('SELECT j.possesseur AS nom_jeu, p.prenom AS prenom_proprietaire
    FROM jeux_video AS j, proprietaires AS p
    WHERE j.possesseur = p.ID');
    $requete ->execute();

    $donnees = $requete->fetch();
    echo '<p>' . $donnees['nom_jeu'] . ' - ' . $donnees['prenom_proprietaire'] . '</p>';

?>