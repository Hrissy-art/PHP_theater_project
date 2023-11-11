<?php

require_once "classes/Show.php";
require_once "layout/header.php";
require_once "layout/nav.php";
// instanciation de la classe 
$shows = [
    new Show(1,'One', 'Théâtre de la Croix Rousse', 2022,"img/circus-small.jpg"  ),
    new Show(2,'La Maison de la lune', 'Théâtre de lElysée', 2018, "img/chair-small.jpg"),
    new Show(3,'vernant', 'Ateliers', 2019, "img/artists2-little.jpg" ),
];

