<?php



require_once __DIR__ . '/../classes/ContactData.php';
require_once __DIR__ . '/../classes/ContactForm.php';
require_once __DIR__ . '/../classes/Utils.php';

$contactForm = new ContactForm();
$contactForm->processForm();



// require_once  __DIR__ ."/../classes/AppError.php";
// require_once  __DIR__ ."/../classes/Utils.php";
// require_once  __DIR__ ."/../functions/db.php";

// if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
//     Utils::redirect('contact.php');
// }

// try {
//     $pdo = getConnection();
//     // Récupérez les données du formulaire

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     // Vous pouvez ajouter une validation ici


//     // Préparez la requête d'insertion des données
//     $stmt = $pdo->prepare("INSERT INTO contact (name, email, message) VALUES (:name, :email, :message)");

//     // Liez les valeurs des paramètres
//     $stmt->bindParam(':name', $name, PDO::PARAM_STR);
//     $stmt->bindParam(':email', $email, PDO::PARAM_STR);
//     $stmt->bindParam(':message', $message, PDO::PARAM_STR);

//     // Exécutez la requête d'insertion
//     if ($stmt->execute()) {
//         echo 'Your message has been sent.';
//     } else {
//         echo 'Erreur';
//     }
// } catch (PDOException) {
//     Utils::redirect('contact.php?error=' . AppError::DB_CONNECTION);
// }











