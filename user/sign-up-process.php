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

    $query = "INSERT INTO users(`first_name`, `last_name`, `email`, `password`) VALUES (:first_name, :last_name, :email, :hashedPassword)";
    $stmtInsert = $pdo->prepare($query);
    $stmtInsert->execute([
        'first_name' => $firstname,
        'last_name' => $lastname,
        'email' => $email,
        'hashedPassword' => $hashedPassword
    ]);
   
    echo  '<p class= style="background-color: #4CAF50; color: white; padding: 10px; text-align: center;">You have been registrated</p>';

} catch (PDOException) {
    Utils::redirect('sign-up.php?error=' . AppError::DB_CONNECTION);
}