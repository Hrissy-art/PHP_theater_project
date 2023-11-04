<?php

 require_once 'functions/db.php';
require_once 'layout/header.php';
?>

<div class="container">
    <div class="row m-3"> 
<?php if (isset($_GET['id_show'])) {
    $imageId = $_GET['id_show'];

    // Effectuez une requête pour récupérer les détails de l'image en fonction de $imageId
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM show_actuality WHERE id_show = :id_show");
    $stmt->execute(['id_show' => $imageId]);
    $imageDetails = $stmt->fetch();

    if ($imageDetails) {
        // Affichez l'image en taille réelle ?>
         <div class="col-md-6 col-sm-6">
         <?php
        echo '<img src="img/'. $imageDetails['image'] . '" alt="Image en taille réelle" class="img-fluid"  >'; ?>
         </div>
        <div class="col-md-6 col-sm-6">
         <?php
        echo '<h3>' . $imageDetails['title'] . '</h3>';
        echo '<p>Date : ' . $imageDetails['date_actu'] . '</p>';
        echo '<p class="details-par">' . $imageDetails['texte'] . '</p>';?>
        </div> <?php
    } else {
        echo 'Image non trouvée.';
    }
} else {
    echo 'ID d\'image non spécifié.';
}
?>
<?php require_once 'layout/footer.php';