<h1>Cinéma</h1>
<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.<br>
Les films seront caractérisés par leur titre, leur date de sortie en France, leur  durée <br>
(en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). <br>
Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  Chaque  film  est  caractérisé <br>
 par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).Votre application devra <br>
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



?>