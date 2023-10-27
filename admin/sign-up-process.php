<?php
require_once __DIR__ .'/../classes/Utils.php';
require_once __DIR__ .'/../classes/AppError.php';
require_once __DIR__ .'/../functions/db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    Utils::redirect('sign-up.php');
}

try {
    $pdo = getConnection();

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO admin_author(`first_name`, `last_name`, `email`, `password`) VALUES (:first_name, :last_name, :email, :hashedPassword)";
    $stmtInsert = $pdo->prepare($query);
    $stmtInsert->execute([
        'first_name' => $firstname,
        'last_name' => $lastname,
        'email' => $email,
        'hashedPassword' => $hashedPassword
    ]);

    echo "Inscription effectuée";
} catch (PDOException) {
    Utils::redirect('sign-up.php?error=' . AppError::DB_CONNECTION);
}