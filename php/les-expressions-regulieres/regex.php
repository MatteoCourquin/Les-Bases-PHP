<?php

// fonction qui permet d'extraire des caracteres et de les remplacer
$date_replace = preg_replace('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#', '$3 / $2 / $1', '26/08/2020'); // $1 = 1ere parenthese | $2 = 2eme parenthese ...etc
// preg_replace('#(re)(gex)#' ,'deuxieme parenthese de mon premier parametre', 'string');

// Me retourne la date au format SQL soit AAAA/MM/DD
echo $date_replace;

// fonction qui permet de vérifier la correspondance de (caracteres, chiffres, lettres...)
preg_match('#regex#', 'chaine de caracteres a vérifier');

if (preg_match("#guitare#", "J'aime jouer de la guitare.")){
    echo 'VRAI';
}else{
    echo 'FAUX';
}

// #regex#i (le i permet de na pas faire la différence enter majuscule et minuscule)

// #regex|xeger# (( | = ou ) Il permet de recharger [...] ou [...])

// #regex$# (il recherche a la fin de notre chaine de caractères)

// #^regex# (il recherche au début de notre chaine de caractères)

// #reg[eao]x# (il va rechercher une des 3 lettres (regex / regax / regox) = vrai)

// #reg[a-z]x# (il va chercher "reg [toute les lettres entre a et z comprises] x")

// #reg[1-9]x# (il va chercher "reg [tout les chiffres entre 1 et 9 compris] x")

// #reg[^a-j]x# (il va chercher "reg [toute les lettres sauf celles entre a et j comprises] x")

// #reg[^1-9]x# (il va chercher "reg [tout les chiffres sauf ceux entre 1 et 9 compris] x")

// #a?# (la lettre doit etre trouver dans ma chaine de caracteres 0 ou 1 fois)

// #\?# (? il symbolise un point d'interrrogation)

// #a+# (la lettre doit etre trouver dans ma chaine de caracteres 1 ou plusieurs fois)

// #a*# (la lettre doit etre trouver dans ma chaine de caracteres 0, 1 ou plusieurs fois)

// #reg(ex){3}# ("ex" doit etre répéter 3 fois)

// #reg(ex){3, 5}# ("ex" doit etre répéter 3 à 5 fois)

// #reg(ex){3, }# ("ex" doit etre répéter 3 fois ou plus)

// #.# (il symbolise nimporte quel caractere)

// #\.# (. il symbolise un point)


// Vérifier le format d'une date
// #^([0-9]{2}/){2}[0-9]{4}$# (00/00/0000)
// ^([entre 0 et 9]{2chiffre}suivi d'un /){répéter 2 fois} puis [entre 0 et 9]{4chiffres}$

// Vérifier le format d'un numéro de téléphone
// #^0[1-9][0-9]{8}$#

// Vérifier le format d'un mail
// #^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#




// Raccourcis :

// \d = [0-9] (Indique un chiffre)

// \D = [0-9] (Indique ce qui n'est PAS un chiffre)

// \w = [a-zA-Z0-9_] (Indique un caractère alphanumérique ou un tiret de soulignement)

// \W = [^a-zA-Z0-9_] (Indique ce qui n'est PAS un mot)

// \t = Indique une tabulation

// \n = Indique une nouvelle ligne

// \r = Indique un retour chariot

// \s = Indique un espace blanc

// \S = ( \t \n \r  ) (Indique ce qui n'est PAS un espace blanc)

// . = n'importe quel caractère (Il autorise donc tout !)




?>