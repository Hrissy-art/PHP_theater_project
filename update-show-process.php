<?php

require_once __DIR__ . '/classes/AppError.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/functions/db.php'; 

[
    'id_show' => $id_show,
    'title' => $title,
    'texte' => $text,
    'date_actu' => $date_actu
] = $_POST;

$pdo = getConnection();
if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
    $newImage = $_FILES['new_image'];
    $newImageFilename = $newImage['name'];
    $newImageTempPath = $newImage['tmp_name'];

    $newImageTargetPath = __DIR__ . '/img/' . $newImageFilename; 
    if (move_uploaded_file($newImageTempPath, $newImageTargetPath)) {
        // Image téléchargée avec succès, mise à jour de la base de données
        $updStmt = $pdo->prepare("UPDATE show_actuality SET title = :title, image = :image, texte = :texte, date_actu = :date_actu WHERE id_show = :id_show");
        $updStmt->execute([
            'id_show' => $id_show,
            'title' => $title,
            'image' => $newImageFilename, 
            'texte' => $text,
            'date_actu' => $date_actu
        ]);

        Utils::redirect('update.php');
    } else {
        Utils::redirect('upload-images.php?error=' . AppError::REGISTER_FILE_UPLOAD);
    }
}
