<?php
require_once __DIR__ . '/classes/AppError.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/functions/db.php';

try {
    $pdo = getConnection();

    $title = $_POST['title'];
    $about = $_POST['about'];
    $date = $_POST['date_show'];
    $image = $_FILES['image_show'];

    $show_cathegory = $_POST['show_cathegory'];
    $art_director_name = $_POST['art_director_name'];
    $admin_author_name = $_POST['admin_author_name'];


    if (!is_uploaded_file($image['tmp_name']) || $image['error'] !== UPLOAD_ERR_OK) {
        Utils::redirect('upload-images.php?error=' . AppError:: REGISTER_IMG_UPLOAD);
    }


    if (!move_uploaded_file ($image['tmp_name'], __DIR__ . '/img/' . $image['name'])) {
        Utils::redirect('upload-images.php?error=' . AppError:: REGISTER_IMG_UPLOAD);
    }

    $query = "INSERT INTO show_actuality (`id_cathegory`, `title`, `image`, `texte`, `date_actu`, `id_art_director`, `id_admin_author`) 
              VALUES (:show_cathegory, :title, :image_show, :about, :date_show, :art_director_name, :admin_author_name)";
    $stmtInsert = $pdo->prepare($query);
    $stmtInsert->execute([
        'show_cathegory' => $show_cathegory,
        'title' => $title,
        'image_show' => $image['name'],
        'about' => $about,
        'date_show' => $date,
        'art_director_name' => $art_director_name,
        'admin_author_name' => $admin_author_name
    ]);
    echo "Data added";
} catch (PDOException $e) {
    Utils::redirect('upload-images.php?error=' . AppError::DB_CONNECTION);
}
?>
