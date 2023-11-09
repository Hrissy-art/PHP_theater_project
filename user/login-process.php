<?php

session_start();

require_once  __DIR__ .'/../classes/AppError.php';
require_once  __DIR__ .'/../classes/Utils.php';
require_once  __DIR__ .'/../functions/db.php';

// Vérification si l'email saisi ou le mot de passe n'existent pas. S'il n'existent pas, on redirige vers le formulaire d'autentification 
if (!isset($_POST['email']) || !isset($_POST['password'])) {
    Utils::redirect('login.php');
}

[
    'email' => $email,
    'password' => $password
] = $_POST;


try {
    $pdo = getConnection();
} catch (PDOException) {
    Utils::redirect('login.php?error=' . AppError::DB_CONNECTION);
}


$query = "SELECT * FROM users WHERE email = ?";

$connectStmt = $pdo->prepare($query);
$connectStmt->execute([$email]);

$admin = $connectStmt->fetch();


if ($admin === false) {
    Utils::redirect('login.php?error=' . AppError::USER_NOT_FOUND);
    echo'User not found';
}

// vérification de la comatibilité entre le mot de masse hashé avec le mot de passe donné par l'utilisateur 
if (!password_verify($password, $admin['password'])) {
    Utils::redirect('login.php?error=' . AppError::INVALID_CREDENTIALS);
    echo'User not found';
}

// si la vérification est réussie la session de l'utilisateur est ouverte 

$_SESSION['userInfos'] = [
    'id' => $admin['id'],
    'email' => $email
];

Utils::redirect('profile.php');