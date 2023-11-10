<?php

require_once __DIR__ . '/../classes/Utils.php';
// fermeture de la session de l'utilisateur 
session_start();
$_SESSION = [];
session_destroy();

Utils::redirect('login.php');