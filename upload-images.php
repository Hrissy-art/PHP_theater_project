<?php require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/layout/header.php';
?>
<div class="container">
    <h2>Formulaire d'ajout d'actualités</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" placeholder="Titre" name="title">
        </div>
        <div class="form-group">
            <label for="about">Description</label>
            <input type="text" class="form-control" id="about" placeholder="Description" name="about">
        </div>
        <div class="form-group">
            <label for="date_show">Date de début</label>
            <input type="date" class="form-control" id="date_show" name="date_show" value="2023-10-29" min="2023-11-01" max="2025-12-31">
        </div>
        <div class="form-group">
            <label for="image_show">Image</label>
            <input type="file" class="form-control-file" id="image_show" name="image_show">
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>

<?php
require_once __DIR__ . '/layout/footer.php';
?>
