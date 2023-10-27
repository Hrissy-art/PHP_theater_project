<?php

 require_once 'functions/db.php';
require_once 'layout/header.php';

if (isset($_GET['id_show'])) {
    $imageId = $_GET['id_show'];

    // Effectuez une requête pour récupérer les détails de l'image en fonction de $imageId
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM show_actuality WHERE id_show = :id_show");
    $stmt->execute(['id_show' => $imageId]);
    $imageDetails = $stmt->fetch();

    if ($imageDetails) {
        // Affichez l'image en taille réelle
        echo '<img src="' . $imageDetails['image'] . '" alt="Image en taille réelle">';
    } else {
        echo 'Image non trouvée.';
    }
} else {
    echo 'ID d\'image non spécifié.';
}
?>
<?php require_once 'layout/footer.php';