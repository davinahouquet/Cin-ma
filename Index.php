<h1>Cinéma</h1>
<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.<br>
Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée <br>
(en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). <br>
Un résumé du film (synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé <br>
par un seul genre cinématographique (science-fiction, aventure, action, ...).Votre application devra <br>
recenser également les acteurs de chacun des films. On désire connaître le nom, le prénom, le sexe et la <br>
date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué par l’acteur dans le(s) film(s)<br>
concerné(s).Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous<br>
de le mettre en place correctement !Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une<br>

    seule fois (dans la mesure où ce rôle a été incarné par plusieurs acteurs.)</p>
<h2>Résultat</h2>

<?php

function chargerClasse($classe)
{
    require $classe . '.php';
}
spl_autoload_register('chargerClasse');

//IMPORTANT : Il faut déclarer les $variables dans l'ordre (sinon undefined variable) = les déclarer d'abord pour s'en servir dans les lignes dessous

//Création de différents réalisateurs
$timBurton = new Realisateur ("Burton", "Tim", "Homme", "25 août 1958");
$joelSchumacher = new Realisateur ("Schumacher", "Joel ", "Homme", "22 juin 2020");

//Création de différents films
$batmanLeDefi = new Film ("Batman : Le Défi", "1992", 126, $timBurton, "Synopsis");
$batmanForever = new Film ("Batman Forever", "1995", 121, $joelSchumacher, "Synopsis");
$batmanEtRobin = new Film ("Batman et Robin", "1997", 125, $joelSchumacher, "Synopsis");

//Création de différents acteurs
$michaelKeaton = new Acteur ("Keaton", "Michael", "Homme", "5 septembre 1951");
$michellePfeiffer = new Acteur ("Pfeiffer", "Michelle", "Femme", "29 avril 1958");
$dannyDeVito = new Acteur ("DeVito", "Danny", "Homme", "17 novembre 1944");

$valKilmer = new Acteur ("Kilmer", "Val", "Homme", "31 décembre 1959");
$jimCarrey = new Acteur ("Carrey", "Jim", "Homme", "17 janvier 1962");
$drewBarrymore = new Acteur("Barrymore", "Drew", "Femme", "22 février 1975");

$georgeClooney = new Acteur (" Clooney", "George", "Homme", "6 mai 1961");
$umaThurman = new Acteur ("Thurman", "Uma", "Femme", "29 avril 1970");
$aliciaSilverstone = new Acteur ("Silverstone", "Alicia", "Femme", "4 octobre 1976");

//Création de différents genre

//Création de différents rôles
$batman = new Role("Batman", $michaelKeaton);
$catwoman = new Role("Catwoman", $michellePfeiffer);
$oswaldcobblepot = new Role("Oswald Cobblepot", $dannyDeVito);

$batman = new Role("Batman", $valKilmer);
$sphinx = new Role("Sphinx", $jimCarrey);
$sugar = new Role ("Sugar", $drewBarrymore);

$batman = new Role("Batman", $georgeClooney);
$poisonIvy = new Role ("Poison Ivy", $umaThurman);
$batgirl = new Role("Batgirl", $aliciaSilverstone);

//Création de différents casting
$casting1 = new Casting ($batmanLeDefi, $batman, $michaelKeaton);
// $casting1 = new Casting ($film1, $role1, $acteur1);
// $casting1 = new Casting ($film1, $role1, $acteur1);

echo $casting1->afficherCasting();


// $role1 = new Role()

/* Série de tests de méthodes */
// Test du listage des acteurs ayant incarné le même rôle

// Test du listage d'un casting d'un film

// Test du listage des films par genre

// Test du listage de la filmographie d'un acteur

// Test du listage de la filmographie d'un réalisateur

?>