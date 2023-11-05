<?php

session_start();

require_once  __DIR__ ."/../classes/AppError.php";
require_once  __DIR__ ."/../classes/Utils.php";
require_once  __DIR__ ."/../functions/db.php";

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
}

if (!password_verify($password, $admin['password'])) {
    Utils::redirect('login.php?error=' . AppError::INVALID_CREDENTIALS);
}


$_SESSION['userInfos'] = [
    'id' => $admin['id'],
    'email' => $email
];

Utils::redirect('index.php');