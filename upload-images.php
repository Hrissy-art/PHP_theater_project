<?php require_once __DIR__ . '/functions/db.php';
require_once __DIR__ . '/layout/header.php';
?>

<!-- Création du formulaire pour l'insertion de nouvelles données -->

<div class="container">
    <h2>Formulaire d'ajout d'actualités</h2>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
<!-- Je récupère d'abord la colonne "catégorie" de la clé étrangère dans la table où je souhaite procéder à l'insertion  -->
    <div class="form-group">
    <label for="show_cathegory">Catégorie</label>
    <select class="form-control" id="show_cathegory" name="show_cathegory">
        <?php $pdo = getConnection();
        $query = "SELECT id_cathegory, show_cathegory FROM cathegory";
        $stmt = $pdo->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row['id_cathegory'] . '">' . $row['show_cathegory'] . '</option>';
        }
        ?>
    </select>
</div>
<!-- je prépare les champs pour les valeurs qui seront insérées dans ma table show_actuality -->
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" placeholder="Titre" name="title">
        </div>

        <div class="form-group">
            <label for="image_show">Image</label>
            <input type="file" class="form-control-file" id="image_show" name="image_show">
        </div>
        <div class="form-group">
            <label for="about">Description</label>
            <input type="text" class="form-control" id="about" placeholder="Description" name="about">
        </div>
        <div class="form-group">
            <label for="date_show">Date de début</label>
            <input type="date" class="form-control" id="date_show" name="date_show" value="2023-10-29" min="2023-11-01" max="2025-12-31">
        </div>
       
      <!-- Je récupère le nom du Directeur artistique de la table contenant les noms des Directeurs artistiques  -->
        <div class="form-group">
    <label for="art_director">Directeur artistique</label>
    <select class="form-control" id="art_director" name="art_director_name">
        <?php
          $pdo = getConnection();
        $query = "SELECT id_art_director, name FROM art_director";
        $stmt = $pdo->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row['id_art_director'] . '">' . $row['name'] . '</option>';
        }
        ?>
    </select>
</div>
<!-- Je récupère le nom de l'administrateur opérant l'insértion de la table contenant les noms des administrateurs  -->
       
        <div class="form-group">
    <label for="admin_author_name">Auteur admin</label>
    <select class="form-control" id="admin_author_name" name="admin_author_name">
        <?php
          $pdo = getConnection();
        $query = "SELECT id_admin, last_name FROM admin_author";
        $stmt = $pdo->query($query);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row['id_admin'] . '">' . $row['last_name'] . '</option>';
        }
        ?>
    </select>
</div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
