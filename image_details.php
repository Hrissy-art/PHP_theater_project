<?php
require_once 'functions/db.php';
require_once 'layout/header.php';

if (isset($_GET['id_show'])) {
    $imageId = $_GET['id_show'];

    // J'effectue une requête pour récupérer les détails de l'image en fonction de $imageId
    $pdo = getConnection();
    $stmt = $pdo->prepare("SELECT * FROM show_actuality WHERE id_show = :id_show");
    $stmt->execute(['id_show' => $imageId]);
    $imageDetails = $stmt->fetch(); ?>

    <div class= "container img-details">
    <div class="row"> 
      <div class="col-lg-8 ">
        <div class=" img-disposal ">

   <?php if ($imageDetails) {
        // Affichage de l'image en taille réelle
        echo '<div class="col-md-9 col-sm-6">';
        echo '<img src="img/' . $imageDetails['image'] . '" alt="Image en taille réelle" class="img-fluid">';
        echo '</div>';
?>
        </div>
   </div>


 <div class="col-lg-4 ">
 <div class=" details-show ">
    <?php
        // Affichage des détails de l'image
        echo '<div class="col-md-6 p-4 col-sm-6">';
        echo '<h3>' . $imageDetails['title'] . '</h3>';
        echo '<p>Date : ' . $imageDetails['date_actu'] . '</p>';
        echo '<p class="details-par"> A propos:'. " " . $imageDetails['texte'] . '</p>';

        // Ici j'effectue une requête pour récupérer le nom du théâtre lié à cette image
        $stmtTheater = $pdo->prepare("SELECT t.name
                                      FROM show_actuality sa
                                      INNER JOIN show_actuality_theater sat ON sa.id_show = sat.id_show
                                      INNER JOIN theater t ON sat.id_theater = t.id_theater
                                      WHERE sa.id_show = :id_show");
        $stmtTheater->execute(['id_show' => $imageId]);
        $theaterDetails = $stmtTheater->fetch();

        if ($theaterDetails) {
            echo 'Lieu:'." ". $theaterDetails['name'];
        } else {
            echo 'Théâtre non trouvé.';
        }
        echo '</div>';
    }
} ?>
</div>
</div>
</div>
</div>

<?php
require_once 'layout/footer.php';
?>
