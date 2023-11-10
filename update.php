<?php
require_once 'layout/header.php';

require_once __DIR__ . '/classes/AppError.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/functions/db.php';

// Je récupère le contenu de ma table à l'aide d'un SELECT //


    $pdo = getConnection();

    $stmt = $pdo->query("SELECT id_show, title, image, texte, date_actu FROM show_actuality");
   
while ($shows = $stmt->fetch()) {
    ?>
     <div class= "container updates-info">
    <div class="row"> 

    <div class="col-md-10 col-sm-6 p-4 rounded border border-secondary">
        <a href="update-show.php?id_show=<?php echo $shows["id_show"];?>">Update</a>
        <h3><?php echo $shows['title']; ?></h3>
        <p><?php echo $shows['texte']; ?></p>
        <p><?php echo $shows['date_actu']; ?></p>
        <p><?php echo $shows['image']; ?></p>
    </div>
    <div class="col-md-2 col-sm-6">
</div>
    <?php
}
?>

        <?php  require_once __DIR__ . '/layout/footer.php';