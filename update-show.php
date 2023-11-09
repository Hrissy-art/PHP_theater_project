<?php
require_once 'layout/header.php';

require_once __DIR__ . '/classes/AppError.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/functions/db.php'; 

$pdo = getConnection();

if (isset($_GET['id_show'])) {
    $id_show = $_GET['id_show'];

    $showStmt = $pdo->prepare("SELECT * FROM show_actuality WHERE id_show = :id_show");
    $showStmt->execute(['id_show' => $id_show]);
    $shows = $showStmt->fetch();

    ?>
<!-- Création du formulaire pour la mise à jour des éléments -->
<h1 class="update-title">Update </h1>
<form action = "update-show-process.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
    <label for="text">Title</label>
    <input type="text" class="form-control" id="title"  name="title" value = "<?php echo $shows['title']; ?>"/>
  </div>
  <div class="form-group">
    <label for="image">Img</label>
   

    <input type="file" class="form-control" id="image"  name="new_image"
    value = "<?php echo $shows['image']; ?>"/>
   
  </div>
  <div class="form-group">
    <label for="text">Description</label>
    <input type="text" class="form-control" id="text"  name="texte"
    value = "<?php echo $shows['texte']; ?>"/>
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date"  name="date_actu"
    value = "<?php echo $shows['date_actu']; ?>"/>
  </div>
  
  <input type="hidden"  name="id_show"
    value = "<?php echo $shows['id_show']; ?>"/>
  <button type="submit" class="btn btn-dark">Modify</button>
</form>
<?php
}
else {
  echo 'Show not found.';
} 

require_once __DIR__ . '/layout/footer.php';
?>