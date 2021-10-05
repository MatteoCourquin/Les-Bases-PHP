<!-- LES VARIABLES PHP -->

<?php

$nombre = 20; // Je déclare un nombre (number)
$texte = 'Bonjour'; // Je déclare une chaine de caractères (string)
$bool = true; // Je déclare un vrai ou faux (boolean)

?>
<hr>


<!-- AFFICHER MES VARIABLES -->

<?php

echo "L'utilisateur a $nombre ans."; // L'utilisateur a 20 ans.
echo '<br>';
echo 'L\'utilisateur a ' . $nombre . ' ans.'; // L'utilisateur a 20 ans. (Méthode recommandée)

?>
<hr>


<!-- CALCULER AVEC DES VARIABLES -->

<?php

$prix = 2.5;
$quantitée = 10;

$total = $prix - $quantitée;
$total = $prix % $quantitée;
$total = $prix + $quantitée;
$total = $prix * $quantitée;

echo 'Le prix est de ' . $total . '€.'

?>
<hr>


<!-- LES CONDITIONS -->

<?php

$age = 18;

// != (différent de)
// == (égale à (valeur))
// === (égale à (valeur + type))
// <= (inférieur ou égale)
// < (inférieur)
// >= (supérieur ou égale)
// > (supérieur)

// La condition (if)

if ($age < 18) {
    echo 'Vous êtes mineur.';
} elseif ($age >= 18 ){
    echo 'Vous êtes majeur.';
};

echo '<br>';

$adulte = true;
$nom = 'matteo';

if ($adulte){
    echo 'Vous êtes un adulte.';
}elseif (!$adulte){
    echo 'Vous êtes un enfant.';
}

echo '<br>';

// combiner des conditions

if ($adulte && $nom == 'matteo') { // Si [condition] et(&&) [condition] alors
    echo 'Matteo est un adulte.';
}elseif (!$adulte || $nom == 'matteo'){ // Si [condition] ou [condition] alors
    echo 'Matteo est un enfant.';
};

echo '<br>';

// La condition (case)

switch ($age){
    case 4:
        echo 'Tu as 4 ans.';
        break;
    case 18:
        echo 'Tu as 18 ans.';
        break;
};

?>

<hr>

<!-- LES BOUCLES -->

<!-- while -->

<?php 

// while : à utiliser de préférence lorsqu'on ne sait pas par avance combien de fois la boucle doit être répétée.

$repetition = 0;
// initialisation

while ($repetition <= 10) {
    // condition
    echo '<p>Je ne doit pas copier sur mon voisin' . $repetition . '</p>';
    $repetition ++;
    // instruction pour chaque tour (incrémentation)
};

echo '<br>';

// for : à utiliser lorsqu'on veut répéter des instructions un nombre précis de fois. (Même méthode écrit différement)

for ($repetition = 0; $repetition <= 10; $repetition++) {
    // initialisation | condition | instruction pour chaque tour (incrémentation)
    echo '<p>Je ne doit pas copier sur mon voisin' . $repetition . '</p>';
};

?>

<hr>

<!-- LES TABLEAUX (ARRAY) -->

<?php

// J'initialise mon tableau
$prenoms[0] = 'Mathieu';
$prenoms[1] = 'Marie';
$prenoms[2] = 'David';

// Meme méthode mais plus rapide
$prenoms = array('Mathieu', 'Marie', 'David');

// Créer un tableau avec des libélé 
$personne = array('nom' => 'Courquin', 'prenom' => 'Matteo', 'age' => '20');

// J'affiche le 2eme élément de mon tableau (1)
echo $prenoms[1];

echo '<br>';
echo '<br>';

// Pour débuger
print_r($personne);

echo '<br>';
echo '<br>';

// Afficher les éléments de mon tableau 1 par 1 en connaissant le nombre de case.
for ($i=0; $i <= 2 ; $i++) { 
    echo '<p>' . $prenoms[$i] . '</p>';
};

echo '<br>';

foreach ($personne as $libelle => $detail) { 
    echo '<p>' . $libelle . ' = ' . $detail . '</p>';
};

?>

<hr>


<!-- LES FONCTIONS -->

<?php

// les fonctions toutes faites par PHP (voir la doc PHP)

$phrase = 'Bonjour je suis une phrase !';
$nbr_de_caractere = strlen($phrase);

echo 'Il y a ' . $nbr_de_caractere . ' caractères dans ma phrase.';
echo '<br>';

echo str_shuffle($phrase);
echo '<br>';

echo 'Nous sommes le ' . date("d") . '/' . date('m') . '/' . date('y') . ' et il est ' . date('H') . ':' . date('i');
echo '<br>';
echo '<br>';

// Mélange les caracteres
str_shuffle($phrase);

// Donne le nomnre de caracteres
strlen($phrase);

// Indique la date (d = day | m = mounth | y = year | H = hour | i = minutes (voir la doc PHP pour plus de parametres))
date('j');



// créer ses propres fonctions 

// Je créer ma fonction
function direBonjour($nom){
    echo '<p>Bonjour ' . $nom . '</p>';
};

// !! test !! \\
foreach ($prenoms as $prenom) {
    echo direBonjour($prenom);
};

?>

<hr>


<!-- INCMURE DES PORTIONS DE PAGES -->

<?php

// créer mon composant (par exemple nav.php)

// Je l'inclue dans mes pages
include ('pages/nav.php');

?>

<hr>


<!-- TRANSMETTRE DES DONNÉES VIA L'URL -->

<!-- grace a l'url je fait transiter des données vie mes pages -->
<a href="./pages/donnees.php?prenom=Matteo&amp;nom=Courquin&amp;age=20&amp;repetition=?">Découvrez Mattéo (cliquez pour la partie sécurité de l'url)</a>
<!-- &amp; = & -->

<hr>


<!-- LES FORMULAIRES -->

<!-- action = envoie des données vers la page déstinée | method="POST" pour envoyer le formulaire -->
<form action="pages/cible.php" method="POST">

    <!-- name pour récupérer les données en PHP  -->
    <p><label> Prénom : <input type="text" name="prenom" placeholder="Votre prénom"></label></p>
    <p><label> Êtes vous végétarien ? : <input type="checkbox" name="vegetarien"></label></p>

    <!-- type="submit" pour envoyez le formulaire -->
    <p><input type="submit"></p>
    
</form>

<a href="./pages/cible.php"> Voir la page cible.php pour les failles de sécurités</a>

<hr>


<!-- LES VARIABLES SUPERGLOBALES -->


<!-- LES COOKIES -->

<!-- déclarer un cookie -->
<!-- pseudo | date d'expiration (365*24*3600 = 31 536 000 = 1an en seconde | ? | ? | ? | "true" permet d'activer le mode  httpOnly  sur le cookie, et donc de le rendre plus sécurisé ) -->
<?php setcookie('pseudo', 'vivi-du-29', time() + 365*24*3600, null, null, false, true); ?>

<!-- !! Attention : setcookie s'écrit avant la balise !DOCTYPE comme pour sessionstart !! -->

<!-- utilisé mes cookies (utilisé isset pour vérifier l'existance du cookie) -->
<!-- les cookies sont stockés dans des array donc comme d'habitude on les récuperes comme ça : -->
<p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
</p>

<!-- modifier un cookie (il suffit de lui réasigner une valeur pour écraser l'ancienne) -->
<?php setcookie('pseudo', 'gege78', time() + 365*24*3600, null, null, false, true); ?>
<!-- le cookie "pseudo" devient alors "gege78" -->


<!-- ÉCRIRE DANS UN FICHIER -->

<?php
// 1 : on ouvre le fichier
$monfichier = fopen('cookies', 'r+');
 
// On ecrit dans mon fichier
fputs($monfichier, 'Texte à écrire');

// On lit la premiere ligne du fichier
$ligne = fgets($monfichier);
 
// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
?>


<!-- LES IMAGES -->
<!-- afficher mes images -->
<img src="./image.php" />

<!-- fusionner des images (par exemple pour un copyright) -->
<img src="copyrighter.php?image=tropiques.jpg" />
