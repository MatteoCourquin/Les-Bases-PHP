<?php

// On indique qu'on va envoyer une image PNG
header ("Content-type: image/jpeg");


// J'importe une image existante
$image = imagecreatefromjpeg("./images/couchersoleil.jpg");
// Si c'est un png
// $image = imagecreatefrompng("./images/couchersoleil.png");


// J'afficher mon image :
// imagejpeg($image); -------------- À décommenter ----------------
// Si c'est un png
// imagepng($image);

// Enregistrer l'image dans un dossier (On a pas besoin du Header lors de l'enregistrement dans un dossier):
// imagepng($image, "images/monimage.png"); 


// Je créer mon image a partir de rien
$image = imagecreate(200,200); // On crée une nouvelle image de taille 200 x 50

// Coloriser l'image (la premier couleur d'éclarer sera la couleur de fond de limage):
$orange = imagecolorallocate($image, 255, 128, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);
$bleuclair = imagecolorallocate($image, 156, 227, 254);
$noir = imagecolorallocate($image, 0, 0, 0);
$blanc = imagecolorallocate($image, 255, 255, 255);


// imagestring($monImage, taille / type de police, position X, position Y, 'texte a écrire', $couleur);
imagestring($image, 4, 35, 15, 'Salut les Zér0s', $blanc);

// Je créer un pixel :
// ImageSetPixel ($monImage, position X, position Y, $couleur);
ImageSetPixel ($image, 5, 5, $bleu);


// Je créer une ligne entre tel coordonnée et tel autre :
// ImageLine ($monImage, position X (point départ), position Y (point départ), positionX (point arrivée), position Y (point arrivée), $couleur);
ImageLine ($image, 5, 10, 120, 10, $noir);


// Je dessine une ellipse :
// ImageEllipse ($monImage, position du centre X, position du centre Y, largeur, hauteur, $couleur);
ImageEllipse ($image, 20, 25, 20, 10, $bleuclair);


// Je dessine un rectangle :
// ImageRectangle ($monImage, position X (premier point), position Y (premier point), position X (deuxieme point), position Y (deuxieme point), $couleur);
ImageRectangle ($image, 180, 20, 190, 30, $noir);


// Faire un polygon :
// ImagePolygon ($monImage, $array_points, nombre_de_points, $couleur);
$points = array(10, 40, 120, 50, 160, 160); 
ImagePolygon ($image, $points, 3, $noir);


// Rendre l'image transparente :
imagecolortransparent($image, $orange);







imagepng($image);

imagepng($image, "images/monimage.png"); 

?>

